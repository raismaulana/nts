<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

    var $tabel;

    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'pengguna'
        );
    }

    public function select()
    {
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_where($id)
    {
        return $this->db->get_where($this->context['tabel'], ['id_pengguna' => $id]);
        
    }
    
    public function insert($object)
    {
        $this->db->insert($this->context['tabel'], $object);
        $id = $this->db->insert_id();
        return ($this->db->affected_rows() > 0) ? $id : false;

    }

    public function update($object, $where)
    {
        return $this->db->update($this->context['tabel'], $object, "id_pengguna = $where");
    }

    public function check_username($username)
    {
        $this->db->where('username_pengguna', $username)
            ->get($this->context['tabel'])->row();
        return ($this->db->affected_rows() > 0) ? false : true;
    }

    public function edit_data_diri($object, $id)
    {
        $uname = $this->db->get_where($this->context['tabel'], ['id_pengguna' => $id])->row();
        if ($uname->username_pengguna == $object['username_pengguna']) {
            $uname = $this->db->get_where($this->context['tabel'], 'username_pengguna !=', $object['username_pengguna']);
            if ($uname->num_rows()) {
                return false;
            } else {
                $this->db->where('id_pengguna', $id);
                return $this->db->update($this->context['tabel'], $object);
            }
        } else {
            if($this->check_username($object['username_pengguna'])) {  
                $this->db->where('id_pengguna', $id);
                return $this->db->update($this->context['tabel'], $object);  
            } else {        
                return false;
            }
        }
    }

    public function select_where_join_staf($where, $id)
    {
        $this->db->join('staf', 'pengguna.id_pengguna = staf.id_pengguna', 'left');
        $this->db->join('jabatan', 'staf.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->where($where, $id);
        return $this->db->get($this->context['tabel']);
        
    }

    public function select_where_join_jabatan_kegiatan($where, $id)
    {
        $this->db->join('staf', 'pengguna.id_pengguna = staf.id_pengguna', 'left');
        $this->db->join('jabatan', 'staf.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->join('laporan', 'pengguna.id_pengguna = laporan.id_pengguna', 'left');
        $this->db->join('kegiatan', 'laporan.id_laporan = kegiatan.id_laporan', 'left');
        $this->db->where($where, $id);
        return $this->db->get($this->context['tabel']);
        
    }

    public function update($data,$where)
    {
        $this->db->where($where);
        
        return $this->db->update($this->context['tabel'], $data);
        
    }

}

/* End of file Pengguna_model.php */
