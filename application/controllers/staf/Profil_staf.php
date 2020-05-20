<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_staf extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('staf_model');
		
	}
   public function index()
   {
	   $data = $this->staf_model->select_detail($this->session->userdata('id'));
	   $this->load->view('Staf/View_profil_staf',$data);
   }

}