<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Kabid extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('alamat_model');
		$this->load->model('bidang_model');
		$this->load->model('pengguna_model');
		$this->load->model('kabid_model');
	}

	public function index()
	{
		$context['data_alamat'] = $this->alamat_model->select_join_kabupaten_provinsi();
		$context['data_bidang'] = $this->bidang_model->select_where();
		$this->load->view('kabid/v_data_kabid', $context);
	}

	public function select_all()
	{
		$data = $this->kabid_model->select();
		$datas = array(
			"data" => $data
		);
		echo json_encode($datas);
	}

	public function get_where()
	{

		$dataf = $this->kabid_model->select_join_bidang_pengguna($this->input->post('id_pengguna'));

		echo json_encode($dataf);
	}

	public function get_detail()
	{
		$data = $this->kabid_model->select_detail($this->input->post('id_pengguna'));

		echo json_encode($data);
	}
}
