<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasi_model extends CI_Model {

    var $context;
    
    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'kasi'
        );
    }

    public function select()
    {
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_join_bidang_seksi_pengguna()
    {
        $this->db->select('kasi.id_kasi, kasi.id_seksi, kasi.id_pengguna, seksi.nama_seksi, seksi.id_bidang, pengguna.nama_pengguna, bidang.nama_bidang');
        $this->db->join('seksi', 'kasi.id_seksi = seksi.id_seksi', 'left');
        $this->db->join('pengguna', 'kasi.id_pengguna = pengguna.id_pengguna', 'left');
        $this->db->join('bidang', 'seksi.id_bidang = bidang.id_bidang', 'left');
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_join_seksi_pengguna_where($where)
    {
        $this->db->join('seksi', 'kasi.id_seksi = seksi.id_seksi', 'left');
        $this->db->join('pengguna', 'kasi.id_pengguna = pengguna.id_pengguna', 'right');
        $this->db->where('seksi.id_bidang', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }
    
    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

}

/* End of file Kasi_model.php */
