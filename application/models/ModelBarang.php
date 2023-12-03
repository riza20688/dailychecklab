<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelBarang extends CI_Model
{
    //manajemen cek_barang
    public function tampil()
    {
        return $this->db->get('cek_barang');
    }
    public function where($where)
    {
        return $this->db->get_where('cek_barang', $where);
    }
    public function simpan($data = null)
    {
        $this->db->insert('cek_barang', $data);
    }
    public function update($data = null, $where = null)
    {
        $this->db->update('cek_barang', $data, $where);
    }
    public function hapus($where = null)
    {
        $this->db->delete('cek_barang', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('cek_barang');
        return $this->db->get()->row($field);
    }

    //manajemen barang
    public function getBarang()
    {
        return $this->db->get('barang');
    }
    public function whereBarang($where)
    {
        return $this->db->get_where('barang', $where);
    }
    public function simpanBarang($data = null)
    {
        $this->db->insert('barang', $data);
    }
    public function hapusBarang($where = null)
    {
        $this->db->delete('barang', $where);
    }
    public function updateBarang($where = null, $data = null)
    {
        $this->db->update('barang', $data, $where);
    }
    //join
    public function joinCekBarang($where)
    {
        $this->db->select('cek_barang.nim,user.nama');
        $this->db->from('cek_barang');
        $this->db->join('user', 'user.nim = cek_barang.nim');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUser()
    {
        return $this->db->get('user');
    }
    public function joinBarang($where)
    {
        $this->db->select('cek_barang.id,barang.nm_barang');
        $this->db->from('cek_barang');
        $this->db->join('barang', 'barang.id = cek_barang.id');
        $this->db->where($where);
        return $this->db->get();
    }

    public function countBarangBagus()
    {
        $dateNow = date('Y-m-d');
        $this->db->select('SUM(bagus) as barang_bagus');
        $this->db->from('cek_barang');
        $this->db->where('tgl_cek', $dateNow);
        $result = $this->db->get();

        $row = $result->row();

        $barang_bagus = $row->barang_bagus;

        // Echo or use the value as needed
        echo ($barang_bagus != 0) ? $barang_bagus : 0;
    }
    public function countBarangRusak()
    {
        $dateNow = date('Y-m-d');
        $this->db->select('SUM(rusak) as barang_rusak');
        $this->db->from('cek_barang');
        $this->db->where('tgl_cek', $dateNow);
        $result = $this->db->get();

        $row = $result->row();

        $barang_rusak = $row->barang_rusak;

        // Echo or use the value as needed
        echo ($barang_rusak != 0) ? $barang_rusak : 0;
    }
}
