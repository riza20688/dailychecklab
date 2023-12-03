<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CekBarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    //manajemen Buku
    public function index()
    {

        $data['title'] = 'Data Barang';
        $data['user'] = $this->ModelUser->cekData(['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['cek'] = $this->ModelBarang->tampil()->result_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Harus diisi',

        ]);
        $this->form_validation->set_rules(
            'jumlah',
            'Jumlah',
            'required',
            [
                'required' => 'harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'bagus',
            'Bagus',
            'required',
            [
                'required' => 'Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'rusak',
            'Rusak',
            'required',
            [
                'required' => 'Harus diisi',
            ]
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daily Check Lab | Barang';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/user_sidenav');
            $this->load->view('barang/cekbarang', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nm_barang' => $this->input->post('nama', true),
                'jumlah' => $this->input->post('jumlah', true),
                'bagus' => $this->input->post('bagus', true),
                'rusak' => $this->input->post('rusak', true),
                'tgl_cek' => date('Y-m-d'),
                'id_user' => $this->session->userdata('id_user')
            ];

            $this->ModelBarang->simpan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Barang Berhasil diInput!
          </div>');
            redirect('barang/cekbarang');
        }
    }
    public function hapus()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelBarang->hapus($where);
        redirect('barang');
    }
}
