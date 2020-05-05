<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'kec' => 'kecamatan',
            'kab' => 'kabupaten',
            'prov' => 'provinsi'
        );
    }

    public function select()
    {
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_join_kabupaten_provinsi()
    {
        $this->db->select('kecamatan.id_kecamatan, kecamatan.nama_kecamatan, kabupaten.id_kabupaten, kabupaten.nama_kabupaten, provinsi.id_provinsi, provinsi.nama_provinsi');
        $this->db->join('kabupaten', 'kecamatan.id_kabupaten = kabupaten.id_kabupaten', 'left');
        $this->db->join('provinsi', 'kabupaten.id_provinsi = provinsi.id_provinsi', 'left');
        return $this->db->get($this->context['kec'])->result();
        
    }

    public function select_kab()
    {
        $this->db->select('nama_provinsi');
        return $this->db->get($this->context['prov'])->result();
        
    }
    
    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

}

/* End of file Alamat_model.php */
