<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Kasi extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('alamat_model');
		$this->load->model('seksi_model');
		$this->load->model('pengguna_model');
		$this->load->model('kasi_model');
	}

	public function index()
	{
		$context['data_alamat'] = $this->alamat_model->select_join_kabupaten_provinsi();
		$context['data_seksi'] = $this->seksi_model->select_where();
		$this->load->view('KABID/v_kabid_data_kasi',$context);
	}

	public function select_all()
	{
		$data = $this->kasi_model->select();
		$datas = array(
            "data" => $data
        );
        echo json_encode($datas);
	}

	public function get_where()
	{

		$dataf = $this->kasi_model->select_join_seksi_pengguna($this->input->post('id_pengguna'));

		echo json_encode($dataf);
	}

	public function get_detail()
	{
		$data = $this->kasi_model->select_detail($this->input->post('id_pengguna'));

		echo json_encode($data);
	}

}
