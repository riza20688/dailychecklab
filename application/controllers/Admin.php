<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['user'] = $this->ModelUser->cekData(['id_user' =>
        $this->session->userdata('id_user')])->row_array();
        $data['barang'] = $this->ModelBarang->getBarang()->row_array();
        $data['cek'] = $this->ModelBarang->tampil()->result_array();
        $data['title'] = 'Daily Check Lab | Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/admin_sidenav', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function ceksiswa()
    {
        $data['user'] = $this->ModelUser->cekData(['id_user' =>
        $this->session->userdata('id_user')])->row_array();
        $data['anggota'] = $this->ModelUser->cekUser()->result_array();
        $data['title'] = 'Daily Check Lab | Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/admin_sidenav', $data);
        $this->load->view('admin/ceksiswa', $data);
        $this->load->view('templates/footer');
    }
    public function hapussiswa()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelUser->hapusUser($where);
        redirect('admin/ceksiswa');
    }
}
