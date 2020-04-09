<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_kasi extends CI_Controller {


	public function index()
	{
		$this->load->view('KASI/v_beranda_kasi');
	}
}
