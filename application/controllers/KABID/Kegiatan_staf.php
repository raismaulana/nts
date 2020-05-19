<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_staf extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('kegiatan_model');
		$this->load->model('laporan_model');
		$this->load->model('staf_model');
	}

	public function index()
	{
		$context['pengguna'] = $this->staf_model->select_join_seksi();
		$this->load->view('kABID/v_kabid_kegiatan_staf', $context);
	}

	public function select_all()
	{
		$data = array(
			'data' =>  $this->kegiatan_model->select_sort($where = array('seksi.id_bidang' => $this->session->userdata('id_bidang') ))
		);

		echo json_encode($data);
	}

	public function get_detail()
	{
		$data = $this->kegiatan_model->select_where_join_pengguna($this->input->post('id_kegiatan'));

		echo json_encode($data);
	}

}
