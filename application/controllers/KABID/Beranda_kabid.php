<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_kabid extends CI_Controller {


	public function index()
	{
		$this->load->view('KABID/v_beranda_kabid');
	}
}
