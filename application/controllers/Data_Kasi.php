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
		$this->load->view('v_data_kasi',$context);
	}

	public function insert_pengguna()
    {
        $object = array(
			'nama_pengguna' => $this->input->post('input_nama_kasi'),
			'nik_pengguna' => $this->input->post('input_nik_kasi'),
			'nip_pengguna' => $this->input->post('input_nip_kasi'),
			'alamat_pengguna' => $this->input->post('input_alamat_kasi'),
            'id_kecamatan' => $this->input->post('input_kecamatan_kasi'),
            'email_pengguna' => $this->input->post('input_email_kasi'),
			'golongan_pengguna' => $this->input->post('input_gol_kasi'),
			'tanggal_lahir_pengguna' => $this->input->post('input_tgl_lahir_kasi'),
			'telepon_pengguna' => $this->input->post('input_no_telp_kasi'),
			'pendidikan' => $this->input->post('input_pendidikan_kasi'),
			'username_pengguna' => $this->input->post('input_username_kasi'),
			'password_pengguna' => password_hash($this->input->post('input_password_kasi'), PASSWORD_ARGON2I),
			'level_pengguna' => '2',
            'status_pengguna' => '1',      
        );

        $result = $this->pengguna_model->insert($object);

        $object2 = array(
            'id_seksi' => $this->input->post('input_seksi_kasi'),
            'id_pengguna' => $result
        );     

        $result = $this->kasi_model->insert($object2);
        redirect('data_kasi','refresh');
        
	}
	
	public function select_all()
	{
		$data = $this->kasi_model->select();
		$datas = array(
            "data" => $data
        );
        echo json_encode($datas);
	}

}
