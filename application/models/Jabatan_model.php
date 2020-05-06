<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'jabatan'
        );
    }
    
    public function select()
    {
        return $this->db->get($this->context['tabel'])->result();
    }

    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

    public function select_where()
    {
        
        return $this->db->query("SELECT * FROM `jabatan` WHERE NOT id_jabatan IN (SELECT id_jabatan FROM staf)")->result();
    }

}

/* End of file Jabatan_model.php */
