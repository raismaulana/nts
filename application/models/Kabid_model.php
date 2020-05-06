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
        $this->db->select('id_pengguna,nama_pengguna,telepon_pengguna,nik_pengguna,golongan_pengguna');
        return $this->db->get($this->context['peng'])->result();
        
    }

    public function select_join_bidang_pengguna($where)
    {
        $this->db->select();
        $this->db->where('pengguna.id_pengguna', $where);
        $this->db->join('bidang', 'kabid.id_bidang = bidang.id_bidang', 'inner');
        $this->db->join('pengguna', 'kabid.id_pengguna = pengguna.id_pengguna', 'left');
        return $this->db->get($this->context['tabel'])->result();
        
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

}

/* End of file Kabid_model.php */
