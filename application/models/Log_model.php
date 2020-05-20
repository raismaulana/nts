<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {
    
    var $context;

    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'log'
        );
    }
    
    public function write($id_pengguna, $keterangan)
    {
        $object = array(
            'id_pengguna' => $id_pengguna,
            'keterangan' => $keterangan,
            // 'tanggal' => date(Y-m-d),
        );
        return $this->db->insert($this->context['tabel'], $object);
    }
}

/* End of file ModelName.php */
