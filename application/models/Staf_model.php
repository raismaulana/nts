<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'staf'
        );
    }

    public function select()
    {
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_join_jabatan_pengguna_seksi()
    {
        $this->db->select('staf.id_staf, staf.id_jabatan, staf.id_pengguna, staf.id_seksi, jabatan.nama_jabatan, pengguna.nama_pengguna, seksi.nama_seksi');
        $this->db->join('jabatan', 'staf.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->join('pengguna', 'staf.id_pengguna = pengguna.id_pengguna', 'left');
        $this->db->join('seksi', 'staf.id_seksi = seksi.id_seksi', 'left');
        return $this->db->get($this->context['tabel'])->result();
        
    }
    
    public function insert($object)
    {
        $this->db->insert($this->context['tabel'], $object);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function update($object, $where)
    {
        return $this->db->update($this->context['tabel'], $object, "id_staf = $where");

    }

}

/* End of file Staf_model.php */
