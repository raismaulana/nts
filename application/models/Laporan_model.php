<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    var $tabel;

    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'laporan'
        );
    }

    public function select_check($id)
    {
        return $this->db->query("SELECT * FROM laporan WHERE id_laporan = ( SELECT MAX(id_laporan) FROM laporan WHERE id_pengguna = $id)")->row();
        ;
        
    }

    public function select_where($where)
    {
        $this->db->where('id_pengguna', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_where_join_pengguna($where)
    {
        $this->db->join('pengguna', 'laporan.id_pengguna = pengguna.id_pengguna', 'left');
        $this->db->where('laporan.id_pengguna', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_where3($where1, $where2, $where3)
    {
        $this->db->where('bulan_laporan', $where1);
        $this->db->where('tahun_laporan', $where2);
        $this->db->where('id_pengguna', $where3);
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_where_join_laporan_staf($where)
    {
        $this->db->select('pengguna.nama_pengguna, staf.id_seksi, laporan.*');
        $this->db->join('staf', 'pengguna.id_pengguna = staf.id_pengguna', 'left');
        $this->db->join('laporan', 'pengguna.id_pengguna = laporan.id_pengguna', 'right');       
        $this->db->where('id_seksi', $where);
        return $this->db->get('pengguna')->result();

    }
    
    public function insert($object)
    {
        $this->db->insert($this->context['tabel'], $object);
        return $this->db->insert_id();
    }

}
/* End of file Laporan_model.php */
