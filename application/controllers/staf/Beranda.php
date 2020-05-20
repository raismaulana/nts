<?php


class Beranda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('kegiatan_model');
		
	}
	
	public function index()
	{
		$a = $this->kegiatan_model->select_where_custom($where = array(
			'kegiatan.status_kegiatan' => '0',
			'staf.id_staf' => $this->session->userdata('id_staf')
		));
		$b = $this->kegiatan_model->select_where_custom($where = array(
			'status_kegiatan' => '1',
			'staf.id_staf' => $this->session->userdata('id_staf')
		));
		$c = $this->kegiatan_model->select_where_custom($where = array(
			'status_kegiatan' => '2',
			'staf.id_staf' => $this->session->userdata('id_staf')
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
		$this->load->view('Staf/View_beranda',$context);
	}
}
