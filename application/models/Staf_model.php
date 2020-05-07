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
        $this->db->select('id_pengguna,nama_pengguna,telepon_pengguna,nik_pengguna,golongan_pengguna');

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

    public function insert($object)
    {
        return $this->db->insert($this->context['tabel'], $object);
    }

    // public function update($object, $where)
    // {
    //     return $this->db->update($this->context['tabel'], $object, "id_staf = $where");
    //
    // }
    public function delete($where,$table)
    {
        $this->db->where($where);
        return $this->db->delete($table);

    }

}

/* End of file Staf_model.php */
