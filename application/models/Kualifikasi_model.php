<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kualifikasi_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'kualifikasi'
        );
    }

    
    public function select_join_pendidikan_jurusan()
    {
        $this->db->select('kualifikasi.id_kualifikasi, kualifikasi.id_jurusan, jurusan.nama_jurusan, kualifikasi.id_pendidikan, pendidikan.nama_pendidikan');
        $this->db->join('pendidikan', 'kualifikasi.id_pendidikan = pendidikan.id_pendidikan', 'left');
        $this->db->join('jurusan', 'kualifikasi.id_jurusan = jurusan.id_jurusan', 'left');
        return $this->db->get('kualifikasi')->result();
        
    }
    
    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

}

/* End of file ModelName.php */
