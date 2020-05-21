<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_kabid extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth_model->security();
		$this->auth_model->can_kabid();
		
		$this->load->model('kegiatan_model');
	}


	public function index()
	{
		$a = $this->kegiatan_model->select_where_custom($where = array(
			'kegiatan.status_kegiatan' => '0',
			'seksi.id_bidang' => $this->session->userdata('id_bidang')
		));
		$b = $this->kegiatan_model->select_where_custom($where = array(
			'status_kegiatan' => '1',
			'seksi.id_bidang' => $this->session->userdata('id_bidang')
		));
		$c = $this->kegiatan_model->select_where_custom($where = array(
			'status_kegiatan' => '2',
			'seksi.id_bidang' => $this->session->userdata('id_bidang')
		));
		$d = $a + $b + $c;
		$e =  0;
		$f = 0;
		$g = 0;
		$h = 0;
		if ($d == 0) {
			$e =  0;	$f = 0;	$g = 0;
		} else {
			$e = ($d / $d) * 100;
			$f = ($a / $d) * 100;
			$g = ($b / $d) * 100;
			$h = ($c / $d) * 100;
		}
		
		$context = array(
			'total_kegiatan' => $d,
			'menunggu' => $a,
			'diterima' => $b,
			'ditolak' => $c,
			'persen_t' => $e,
			'persen_m' => $f,
			'persen_de' => $g,
			'persen_do' => $h
		);
		$this->load->view('KABID/v_beranda_kabid', $context);
	}
}
