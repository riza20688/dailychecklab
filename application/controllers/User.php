<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/user_sidenav', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_footer', $data);
    }
    public function inputlaporan()
    {
        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/user_sidenav', $data);
        $this->load->view('user/inputlaporan', $data);
        $this->load->view('templates/user_footer', $data);
    }
}
