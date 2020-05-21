<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_kabid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->auth_model->security();
		$this->auth_model->can_kabid();
        
        $this->load->model('kabid_model');
    }

    public function index()
    {
        $data = $this->kabid_model->select_detail($this->session->userdata('id'));

        $this->load->view('KABID/v_profil_kabid',$data);
    }
}
