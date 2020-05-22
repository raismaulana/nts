<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabid_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'kabid',
            'peng' => 'pengguna'
        );
    }

    public function select()
    {
        $this->db->select('id_pengguna,nama_pengguna,telepon_pengguna,nik_pengguna,golongan_pengguna,status_pengguna');
        $this->db->where('level_pengguna','3');
        return $this->db->get($this->context['peng'])->result();
        
    }

    public function select_bidang_join_pengguna()
    {
        $this->db->select();
        $this->db->join('bidang', 'kabid.id_bidang = bidang.id_bidang', 'inner');
        $this->db->join('pengguna', 'kabid.id_pengguna = pengguna.id_pengguna', 'left');
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_join_bidang_pengguna($where)
    {
        $this->db->select();
        $this->db->where('pengguna.id_pengguna', $where);
        $this->db->join('bidang', 'kabid.id_bidang = bidang.id_bidang', 'inner');
        $this->db->join('pengguna', 'kabid.id_pengguna = pengguna.id_pengguna', 'left');
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_detail($where)
    {
        $this->db->select();
        $this->db->where('pengguna.id_pengguna', $where);
        $this->db->join('kabid', 'kabid.id_pengguna = pengguna.id_pengguna');
        $this->db->join('kecamatan', 'pengguna.id_kecamatan = kecamatan.id_kecamatan');
        $this->db->join('bidang', 'bidang.id_bidang = kabid.id_bidang');
        $this->db->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.id_kabupaten');
        $this->db->join('provinsi', 'provinsi.id_provinsi = kabupaten.id_provinsi');
  
        return $this->db->get($this->context['peng'])->row();
    }
    
    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

    public function delete($where,$table)
    {
        $this->db->where($where);
        return $this->db->delete($table);
        
    }

    public function select_join_bidang_pengguna_where_idbidang($where)
    {
        $this->db->select();
        $this->db->where('kabid.id_bidang', $where);
        $this->db->join('bidang', 'kabid.id_bidang = bidang.id_bidang', 'left');
        $this->db->join('pengguna', 'kabid.id_pengguna = pengguna.id_pengguna', 'right');
        $this->db->order_by('id_kabid', 'desc');
        $this->db->limit(1);

        return $this->db->get($this->context['tabel'])->result();
        
    }

}

/* End of file Kabid_model.php */
