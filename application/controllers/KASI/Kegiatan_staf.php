<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_staf extends CI_Controller {

	
	public function index()
	{
		$this->load->view('KASI/v_kegiatan_staf');
	}
}
