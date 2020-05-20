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
		$this->load->view('KASI/v_kegiatan_staf', $context);
	}

	public function select_all()
	{
		$data = array(
			'data' =>  $this->kegiatan_model->select_sort($where = array('seksi.id_seksi' => $this->session->userdata('id_seksi') ))
		);

		echo json_encode($data);
	}

	public function get_detail()
	{
		$data = $this->kegiatan_model->select_where_join_pengguna($this->input->post('id_kegiatan'));

		echo json_encode($data);
	}
	public function update()
	{
		
		$data = array(
			'status_kegiatan' => $this->input->post('edit_status')
		);

		$this->kegiatan_model->update($this->input->post('edit_id_kegiatan'),$data);

		redirect('KASI/Kegiatan_staf','refresh');
		
	}
}
