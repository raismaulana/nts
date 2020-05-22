<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_model extends CI_Model {

    var $context;

    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'staf',
            'peng' => 'pengguna',

        );
    }

    public function select()
    {
        $this->db->select('id_pengguna,nama_pengguna,telepon_pengguna,nik_pengguna,golongan_pengguna,status_pengguna');
        $this->db->where('level_pengguna','1');
        return $this->db->get($this->context['peng'])->result();

    }

    public function select2($where)
    {
        $this->db->select('pengguna.id_pengguna,pengguna.nama_pengguna,pengguna.telepon_pengguna,pengguna.nik_pengguna,pengguna.golongan_pengguna,status_pengguna');
        $this->db->join('staf', 'staf.id_pengguna = pengguna.id_pengguna');
        $this->db->where($where);
        return $this->db->get($this->context['peng'])->result();

    }

    public function select_where($where)
    {
        $this->db->select('pengguna.id_pengguna,pengguna.nama_pengguna,pengguna.telepon_pengguna,pengguna.nik_pengguna,pengguna.golongan_pengguna,status_pengguna');
        $this->db->join('staf', 'staf.id_pengguna = pengguna.id_pengguna');
        $this->db->join('seksi', 'seksi.id_seksi = staf.id_seksi');
        $this->db->where($where);
        return $this->db->get($this->context['peng'])->result();

    }

    public function select_join_seksi()
    {
        $this->db->select('pengguna.id_pengguna,pengguna.nama_pengguna,seksi.nama_seksi');
        $this->db->where('level_pengguna','1');
        $this->db->join('staf', 'pengguna.id_pengguna = staf.id_pengguna');
        $this->db->join('seksi', 'seksi.id_seksi = staf.id_seksi');
        
        return $this->db->get($this->context['peng'])->result();

    }

    public function select_join_jabatan_pengguna_seksi($where)
    {
        $this->db->select();
        $this->db->where('pengguna.id_pengguna', $where);
        $this->db->join('jabatan', 'staf.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->join('pengguna', 'staf.id_pengguna = pengguna.id_pengguna', 'left');
        $this->db->join('seksi', 'staf.id_seksi = seksi.id_seksi', 'left');
        return $this->db->get($this->context['tabel'])->result();

    }

    public function select_detail($where)
    {
        $this->db->select();
        $this->db->where('pengguna.id_pengguna', $where);
        $this->db->join('staf', 'staf.id_pengguna = pengguna.id_pengguna');
        $this->db->join('kecamatan', 'pengguna.id_kecamatan = kecamatan.id_kecamatan');
        $this->db->join('seksi', 'seksi.id_seksi = staf.id_seksi');
        $this->db->join('jabatan', 'jabatan.id_jabatan = staf.id_jabatan');
        $this->db->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.id_kabupaten');
        $this->db->join('provinsi', 'provinsi.id_provinsi = kabupaten.id_provinsi');
  
        return $this->db->get($this->context['peng'])->row();
    }

    public function insert($object)
    {
        $this->db->insert($this->context['tabel'], $object);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function delete($where,$table)
    {
        $this->db->where($where);
        return $this->db->delete($table);

    }

}

/* End of file Staf_model.php */
