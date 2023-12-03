<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function getStatus($where = null)
    {
        return $this->db->get_where('user', array('is_active' => $where));
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function cekUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
    public function hapusUser($where = null)
    {
        $this->db->delete('user', $where);
    }
    public function getrole($role = 2)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', $role);
        return $this->db->get();
    }
}
