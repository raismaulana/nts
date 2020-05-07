<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasi_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'kasi',
            'peng' => 'pengguna'
        );
    }

    public function select()
    {
        $this->db->select('id_pengguna,nama_pengguna,telepon_pengguna,nik_pengguna,golongan_pengguna');
        $this->db->where('level_pengguna','2');
        return $this->db->get($this->context['peng'])->result();
        
    }

    public function select_join_seksi_pengguna($where)
    {
        $this->db->select();
        $this->db->where('pengguna.id_pengguna', $where);
        $this->db->join('seksi', 'kasi.id_seksi = seksi.id_seksi', 'inner');
        $this->db->join('pengguna', 'kasi.id_pengguna = pengguna.id_pengguna', 'left');
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

/* End of file Kasi_model.php */
