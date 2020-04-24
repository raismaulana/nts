<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model {

    function jabatan_list(){
        $hasil=$this->db->query("select * from jabatan");
        return $hasil->result();
    }

    


    // var $context;
    
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->context = array(
    //         'tabel' => 'jabatan'
    //     );
    // }
    
    // public function select()
    // {
    //     return $this->db->get($this->context['tabel'])->result();
    // }

    // public function insert($object)
    // {
    //     return $this->db->insert($this->context['tabel'], $object);
    // }

}

/* End of file Jabatan_model.php */
