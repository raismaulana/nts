<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {

    var $tabel;

    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'kegiatan'
        );
    }

    public function select_where($where)
    {
        $this->db->where('id_laporan', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }
    
    public function select_where_join_pengguna($where)
    {
        $this->db->join('laporan', 'kegiatan.id_laporan = laporan.id_laporan', 'left');
        $this->db->join('pengguna', 'laporan.id_pengguna = pengguna.id_pengguna', 'left');
        $this->db->where('kegiatan.id_laporan', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }    

    public function select_where_kegiatan($where)
    {
        $this->db->where('id_kegiatan', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function update($id, $data){
        $this->db->where('id_kegiatan', $id);
        return $this->db->update($this->context['tabel'], $data);
    }

}

/* End of file Kegiatan_model.php */
