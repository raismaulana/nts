<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Staf extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('auth_model');
		$this->load->model('pengguna_model');
		$this->load->model('staf_model');
		$this->load->model('alamat_model');
		$this->load->model('jabatan_model');
		$this->load->model('seksi_model');

		$this->load->library('datatables');
		$this->load->library('form_validation');

		$this->load->helper('form');
	}
	

	public function index()
	{
		$context['data_alamat'] = $this->alamat_model->select_join_kabupaten_provinsi();
		$context['data_jabatan'] = $this->jabatan_model->select();
		$context['data_seksi'] = $this->seksi_model->select();
		$this->load->view('KABID/v_kabid_data_staf', $context);
	}

	public function select_all()
	{
		$data = $this->staf_model->select();
		$datas = array(
			'data' => $data
		);
		echo json_encode($datas);
	}

	public function get_where()
	{

		$dataf = $this->staf_model->select_join_jabatan_pengguna_seksi($this->input->post('id_pengguna'));

		echo json_encode($dataf);
	}

	public function get_detail()
	{
		$data = $this->staf_model->select_detail($this->input->post('id_pengguna'));

		echo json_encode($data);
	}

	public function get()
	{
		header('Content-Type: application/json');
        $this->datatables->select('id_pengguna, nama_pengguna, alamat_pengguna, telepon_pengguna, nik_pengguna, nip_pengguna, golongan_pengguna');
        $this->datatables->from('pengguna');
		$this->datatables->where('level_pengguna', '1');
		$this->datatables->unset_column('id_pengguna');
		$this->datatables->add_column('#', '<a data-id="$1" style="margin:2px;" class="btn-detail btn-edit btn btn-info btn-xs"> Detail</a>');
		

        echo $this->datatables->generate();
	}

	public function getId($id)
	{
		$dataStaf = $this->pengguna_model->select_where($id);
		if($dataStaf->num_rows()) {
			header('Content-Type: application/json');
			echo json_encode(['error' => false, 'message' => 'success retrieved data', 'data' => $dataStaf->result()]);
		} else {
			header('Content-Type: application/json');
			echo json_encode(['error' => true, 'message' => 'failed retrieved data']);
		}
	}

}
