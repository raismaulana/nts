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
		$this->load->view('v_data_kabid', $context);
	}

	public function insert_pengguna()
	{
		$object = array(
			'nama_pengguna' => $this->input->post('input_nama_kabid'),
			'nik_pengguna' => $this->input->post('input_nik_kabid'),
			'nip_pengguna' => $this->input->post('input_nip_kabid'),
			'alamat_pengguna' => $this->input->post('input_alamat_kabid'),
			'id_kecamatan' => $this->input->post('input_kecamatan_kabid'),
			'email_pengguna' => $this->input->post('input_email_kabid'),
			'golongan_pengguna' => $this->input->post('input_gol_kabid'),
			'tanggal_lahir_pengguna' => $this->input->post('input_tgl_lahir_kabid'),
			'telepon_pengguna' => $this->input->post('input_no_telp_kabid'),
			'pendidikan' => $this->input->post('input_pendidikan_kabid'),
			'username_pengguna' => $this->input->post('input_username_kabid'),
			'password_pengguna' => password_hash($this->input->post('input_password_kabid'), PASSWORD_ARGON2I),
			'level_pengguna' => '3',
			'status_pengguna' => '1',
		);

		$result = $this->pengguna_model->insert($object);

		$object2 = array(
			'id_bidang' => $this->input->post('input_bidang_kabid'),
			'id_pengguna' => $result
		);

		$result = $this->kabid_model->insert($object2);
		redirect('data_kabid', 'refresh');
	}

	public function update_pengguna()
	{
		$object = array(
			'nama_pengguna' => $this->input->post('edt_nama_kabid'),
			'nik_pengguna' => $this->input->post('edt_nik_kabid'),
			'nip_pengguna' => $this->input->post('edt_nip_kabid'),
			'alamat_pengguna' => $this->input->post('edt_alamat_kabid'),
			'id_kecamatan' => $this->input->post('edt_kecamatan_kabid'),
			'email_pengguna' => $this->input->post('edt_email_kabid'),
			'golongan_pengguna' => $this->input->post('edt_gol_kabid'),
			'tanggal_lahir_pengguna' => $this->input->post('edt_tgl_lahir_kabid'),
			'telepon_pengguna' => $this->input->post('edt_no_telp_kabid'),
			'pendidikan' => $this->input->post('edt_pendidikan_kabid'),
			'username_pengguna' => $this->input->post('edt_username_kabid'),
			'password_pengguna' => password_hash($this->input->post('edt_password_kabid'), PASSWORD_ARGON2I)
		);

		$where = array(
			'id_pengguna' => $this->input->post('edt_id_pengguna')

		);

		$result = $this->pengguna_model->update($object, $where);
		redirect('data_kabid', 'refresh');
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

	public function delete_pengguna()
	{
		$where = array(
			'id_pengguna' => $this->input->post('del_id_pengguna')
		);

		//hapus di tabel kabid dulu
		if ($this->kabid_model->delete($where, 'kabid')) {
			if ($this->kabid_model->delete($where, 'pengguna')) {

				redirect('data_kabid', 'refresh');
			}
		}
	}
}
