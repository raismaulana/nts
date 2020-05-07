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

    public function select_where()
    {
        
        return $this->db->query("SELECT * FROM `bidang` WHERE NOT id_bidang IN (SELECT id_bidang FROM kabid)")->result();
    }
}

/* End of file ModelName.php */
