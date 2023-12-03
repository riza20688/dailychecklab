<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    //manajemen Barang
    public function index()
    {
        $data['title'] = 'Data Barang';
        $data['user'] = $this->ModelUser->cekData(['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['barang'] = $this->ModelBarang->getBarang()->result_array();
        $this->form_validation->set_rules('id', 'Id Barang', 'required', [
            'required' => 'Harus diisi',

        ]);
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Nama barang harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok',
            'required',
            [
                'required' => 'Harus diisi',
            ]
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daily Check Lab | Barang';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/admin_sidenav');
            $this->load->view('barang/inputbarang', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id' => $this->input->post('id', true),
                'nm_barang' => $this->input->post('nama', true),
                'stok' => $this->input->post('stok', true),
                'tgl_masuk' => time()
            ];

            $this->ModelBarang->simpanBarang($data);
            $this->session->set_flashdata('message', '<div 
           class="alert alert-success alert-message" role="alert">Barang Berhasil Diinput !</div>');
            redirect('barang');
        }
    }
    public function hapusBarang()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelBarang->hapusBarang($where);
        redirect('barang');
    }

    //Cek_Barang
    public function cekBarang()
    {

        $data['title'] = 'Data Barang';
        $data['user'] = $this->ModelUser->cekData(['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['cek'] = $this->ModelBarang->tampil()->result_array();
        $data['id'] = $this->ModelUser->cekData('id_user')->result_array();
        $data['barang'] = $this->ModelBarang->getBarang()->result_array();
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
                'tgl_cek' => time()

            ];

            $this->ModelBarang->simpan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Barang Berhasil diInput!
          </div>');
            redirect('barang/cekbarang');
        }
    }
    public function laporanBarang()
    {
        $data['user'] = $this->ModelUser->cekData(['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['cek'] = $this->ModelBarang->tampil()->result_array();
        $data['title'] = 'Daily Check Lab | Laporan Barang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/admin_sidenav');
        $this->load->view('barang/laporanbarang', $data);
        $this->load->view('templates/footer');
    }
    public function editlaporan()
    {
        $data['user'] = $this->ModelUser->cekData(['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['cek'] = $this->ModelBarang->tampil()->result_array();
        $data['laporan'] = $this->ModelBarang->where(['id_cek' => $this->uri->segment(3)])->result_array();
        $data['title'] = 'Daily Check Lab | Laporan Barang';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/admin_sidenav');
            $this->load->view('barang/laporanbarang', $data);
            $this->load->view('templates/footer');
        } else {

            $id = $this->input->post('id_cek', true);
            $jumlah = $this->input->post('jumlah', true);
            $bgs =  $this->input->post('bagus', true);
            $rsk = $this->input->post('rusak', true);

            $this->db->set('jumlah', $jumlah, 'bagus', $bgs, 'rusak', $rsk);
            $this->db->where('id_user', $id);
            $this->db->update('cek_barang');
            $this->session->set_flashdata('pesan', '<div 
    class="alert alert-success alert-message" role="alert">Profil 
    Berhasil diubah </div>');
            redirect('barang/laporanbarang');
        }
    }
    public function hapuslaporan()
    {
        $where = ['id_cek' => $this->uri->segment(3)];
        $this->ModelBarang->hapus($where);
        redirect('barang/laporanbarang');
    }
}
