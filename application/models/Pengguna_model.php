<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

    var $tabel;

    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'pengguna'
        );
    }

    public function select()
    {
        return $this->db->get($this->context['tabel'])->result();
        
    }
    
    public function insert($object)
    {
        $this->db->insert($this->context['tabel'], $object);
        return $this->db->insert_id();
        
    }

}

/* End of file Pengguna_model.php */
