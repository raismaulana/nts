<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kasi extends CI_Controller {


	public function index()
	{
		$this->load->view('KABID/v_kabid_data_kasi');
	}
}
