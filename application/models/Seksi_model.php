<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seksi_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'seksi'
        );
    }

    public function select()
    {
        return $this->db->get($this->context['tabel'])->result();
    }

    public function select_join_bidang()
    {
        $this->db->select('seksi.id_seksi, seksi.nama_seksi, seksi.id_bidang, bidang.nama_bidang,');
        $this->db->join('bidang', 'seksi.id_bidang = bidang.id_bidang', 'left');
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_where($id_seksi)
    {
        $this->db->where('id_seksi', $id_seksi);
        return $this->db->get($this->context['tabel'])->row();
    }

    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

    public function select_where()
    {
        
        return $this->db->query("SELECT * FROM `seksi` WHERE NOT id_seksi IN (SELECT id_seksi FROM kasi)")->result();
    }
    

}

/* End of file seksi_model.php */
