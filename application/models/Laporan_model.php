<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    var $tabel;

    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'laporan'
        );
    }

    public function select_where($where)
    {
        $this->db->where('id_pengguna', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_where3($where1, $where2, $where3)
    {
        $this->db->where('bulan_laporan', $where1);
        $this->db->where('tahun_laporan', $where2);
        $this->db->where('id_pengguna', $where3);
        return $this->db->get($this->context['tabel'])->result();
        
    }
    
    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
        
    }
}

/* End of file Laporan_model.php */
