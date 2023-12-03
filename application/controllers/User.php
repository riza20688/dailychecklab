<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['id_user' =>
        $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Daily Check Lab | Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/user_sidenav', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function inputlaporan()
    {
        $data['title'] = 'Daily Check Lab | Input';
        $data['user'] = $this->db->get_where('user', ['id_user' =>
        $this->session->userdata('id_user')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/user_sidenav', $data);
        $this->load->view('user/inputlaporan', $data);
        $this->load->view('templates/footer', $data);
    }
    public function siswa()
    {
        $data['judul'] = 'Data siswa';
        $data['user'] = $this->ModelUser->cekData(['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['anggota'] = $this->db->get('user')->result_array();
        $data['role'] = $this->ModelUser->getrole()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin_sidenav', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/ceksiswa', $data);
        $this->load->view('templates/footer');
    }
    public function ubahProfil()
    {
        $data['tittle'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required|trim',
            [
                'required' => 'Nama tidak Boleh Kosong'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/user_sidenav', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/ubah-profil', $data);
            $this->load->view('templates/footer');
        } else {
            $nim = $this->input->post('id_user', true);
            $nama = $this->input->post('nama', true);
            //jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/image/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '3000';
                $config['max_width'] = '1024';
                $config['max_height'] = '1000';
                $config['file_name'] = 'pro' . time();
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['user']['image'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/image/profile/' .
                            $gambar_lama);
                    }
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                }
            }
            $this->db->set('nama', $nama);
            $this->db->where('id_user', $nim);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div 
    class="alert alert-success alert-message" role="alert">Profil 
    Berhasil diubah </div>');
            redirect('user');
        }
    }
}
