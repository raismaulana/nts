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
        $this->db->where('level_pengguna','3');
        return $this->db->get($this->context['peng'])->result();
        
    }

    public function select_join_bidang_pengguna()
    {
        $this->db->select('kabid.id_kabid, kabid.id_bidang, bidang.nama_bidang, kabid.id_pengguna, pengguna.nama_pengguna');
        $this->db->join('bidang', 'kabid.id_bidang = bidang.id_bidang', 'left');
        $this->db->join('pengguna', 'kabid.id_pengguna = pengguna.id_pengguna', 'left');
        return $this->db->get($this->context['tabel'])->result();
        
    }
    
    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

}

/* End of file Kabid_model.php */
