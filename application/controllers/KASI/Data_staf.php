<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Staf extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->auth_model->security();
		$this->auth_model->can_kasi();

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
		$this->load->view('KASI/v_data_staf', $context);
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
			'id_seksi' => $this->session->userdata('id_seksi'),
			'id_pengguna' => $result

		);

		$result2 = $this->staf_model->insert($object2);
		
		$this->log_model->write($this->session->userdata['id'], "Mendaftarkan pengguna (staf) dengan id_pengguna $result");

		redirect('KASI/data_staf', 'refersh');
	}

	public function update_pengguna()
	{
		$object = array(
			'nama_pengguna' => $this->input->post('edt_nama_staf'),
			'nik_pengguna' => $this->input->post('edt_nik_staf'),
			'nip_pengguna' => $this->input->post('edt_nip_staf'),
			'alamat_pengguna' => $this->input->post('edt_alamat_staf'),
			'id_kecamatan' => $this->input->post('edt_kecamatan_staf'),
			'email_pengguna' => $this->input->post('edt_email_staf'),
			'golongan_pengguna' => $this->input->post('edt_gol_staf'),
			'tanggal_lahir_pengguna' => $this->input->post('edt_tgl_lahir_staf'),
			'telepon_pengguna' => $this->input->post('edt_no_telp_staf'),
			'pendidikan' => $this->input->post('edt_pendidikan_staf')
			
		);

		$where = array(
			'id_pengguna' => $this->input->post('edt_id_pengguna')

		);

		$result = $this->pengguna_model->update($object, $where);

		$this->log_model->write($this->session->userdata['id'], 'Menperbarui data pengguna (staf) dengan id_pengguna '.$where['id_pengguna']);

		redirect('KASI/data_staf', 'refresh');
	}

	public function select_all()
	{
		$data = $this->staf_model->select2($where = array(
			'staf.id_seksi' => $this->session->userdata('id_seksi'),
			'pengguna.level_pengguna', '1'
		));
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
		$this->datatables->add_column('#', '<a data-id="$1" style="margin:2px;" class="btn-detail btn-edit btn btn-info btn-xs"> Detail</a>' . ' <a data-id="$1" style="margin:2px;" class="btn-edit btn btn-primary btn-xs"> Edit</a>' . ' <a data-id="$1" style="margin:2px;" class="btn-delete btn btn-danger btn-xs ">Delete</a>', 'id_pengguna');


		echo $this->datatables->generate();
	}

	public function getId($id)
	{
		$dataStaf = $this->pengguna_model->select_where($id);
		if ($dataStaf->num_rows()) {
			header('Content-Type: application/json');
			echo json_encode(['error' => false, 'message' => 'success retrieved data', 'data' => $dataStaf->result()]);
		} else {
			header('Content-Type: application/json');
			echo json_encode(['error' => true, 'message' => 'failed retrieved data']);
		}
	}

	public function delete_pengguna()
	{
		$where = array(
			'id_pengguna' => $this->input->post('del_id_pengguna')
		);

		//hapus di tabel staf dulu
		if ($this->staf_model->delete($where, 'staf')) {
			if ($this->staf_model->delete($where, 'pengguna')) {
				
				$this->log_model->write($this->session->userdata['id'], 'Menghapus data pengguna (staf) dengan id_pengguna '.$where['id_pengguna']);
				
				redirect('KASI/data_staf', 'refresh');
			}
		}
	}
}
