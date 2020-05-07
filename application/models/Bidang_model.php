<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'bidang'
        );
    }

    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

    public function select()
    {
        return $this->db->get($this->context['tabel'])->result();
    }

    public function select_where($where)
    {
        $this->db->where('id_bidang', $where);
        return $this->db->get($this->context['tabel'])->row();
    }
}

/* End of file ModelName.php */
