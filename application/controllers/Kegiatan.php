<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kegiatan_model');
        $this->load->model('pengguna_model');
        
    }

    public function index($id)
    {
        $context = $this->kegiatan_model->select_where($id);

        $this->load->view('v_kegiatan', $context);
        
    }

}

/* End of file Kegiatan.php */
