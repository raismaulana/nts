<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'jurusan'
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

}

/* End of file Jurusan_model.php */
