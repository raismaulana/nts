<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Staf extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('alamat_model');	
		$this->load->model('staf_model');	
		$this->load->model('pengguna_model');	
		$this->load->model('jabatan_model');	
		$this->load->model('seksi_model');	
	}

	public function index()
	{
		$context['data_alamat'] = $this->alamat_model->select_join_kabupaten_provinsi();
		$context['data_jabatan'] = $this->jabatan_model->select_where();
		$context['data_seksi'] = $this->seksi_model->select_where();
		$this->load->view('v_data_staf', $context);
	}

	public function insert_pengguna()
	{
		$object = array(
			'nama_pengguna' => $this->input->post('input_nama_staf'),
			'nik_pengguna' => $this->input->post('input_nik_staf'),
			'nip_pengguna' => $this->input->post('input_nip_staf'),
			'alamat_pengguna' => $this->input->post('input_alamat_staf'),
            'id_kecamatan' => $this->input->post('input_kecamatan_staf'),
            'email_pengguna' => $this->input->post('input_email_staf'),
			'golongan_pengguna' => $this->input->post('input_gol_staf'),
			'tanggal_lahir_pengguna' => $this->input->post('input_tgl_lahir_staf'),
			'telepon_pengguna' => $this->input->post('input_no_telp_staf'),
			'pendidikan' => $this->input->post('input_pendidikan_staf'),
			'username_pengguna' => $this->input->post('input_username_staf'),
			'password_pengguna' => password_hash($this->input->post('input_password_staf'), PASSWORD_ARGON2I),
			'level_pengguna' => '1',
            'status_pengguna' => '1',      
		);
		
		$result = $this->pengguna_model->insert($object);

		$object2 = array(
			'id_jabatan' => $this->input->post('input_jabatan_staf'),
			'id_seksi' => $this->input->post('input_seksi_kasi'),
			'id_pengguna' => $result

		);

		$result = $this->staf_model->insert($object2);
		redirect('data_staf', 'refersh');
	}

	public function select_all()
	{
		$data = $this->staf_model->select();
		$datas = array(
			'data' => $data
		);
		echo json_encode($datas);
	}
}
