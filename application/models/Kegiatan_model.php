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
    

}

/* End of file Kegiatan_model.php */
