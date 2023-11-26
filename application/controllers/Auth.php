<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules(
            'nim',
            'Nim',
            'trim|required',
            ['required' => 'NIM harus diisi']
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required',
            ['required' => 'Password tidak boleh kosong !']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daily Check Lab | Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nim = $this->input->post('nim', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['nim' => $nim])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nim' => $user['nim'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password Salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
            Akun belum diaktivasi admin ! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Akun tidak ada!
          </div>');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules(
            'nim',
            'Nim',
            'required|trim|is_unique[user.nim]',
            [
                'required' => 'NIM Harus diisi',
                'is_unique' => 'NIM sudah ada !'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            ['required' => 'Nama tidak boleh kosong']
        );
        $this->form_validation->set_rules(
            'password1',
            'Password1',
            'required|trim|max_length[8]|matches[password2]',
            [
                'required' => 'Password tidak boleh kosong',
                'max_lenght' => 'Hanya boleh 8 karakter',
                'matches' => 'Password tidak sama'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Password2',
            'required|trim|matches[password1]',
            ['required' => 'Password harus diisi', 'matches' => 'Password tidak sama']
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daily Check Lab | Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nim' => $this->input->post('nim', true),
                'nama' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'foto' => 'default.jpg'
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat, silahkan minta admin untuk aktivasi!
          </div>');
            redirect('auth');
        }
    }
}
