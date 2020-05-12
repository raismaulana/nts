<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Staf extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('auth_model');
		// $this->auth_model->security();
		
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
			'id_seksi' => $this->input->post('input_seksi_staf'),
			'id_pengguna' => $result

		);

		$result = $this->staf_model->insert($object2);
		redirect('data_staf', 'refersh');
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
			'pendidikan' => $this->input->post('edt_pendidikan_staf'),
			'username_pengguna' => $this->input->post('edt_username_staf'),
			'password_pengguna' => password_hash($this->input->post('edt_password_staf'), PASSWORD_ARGON2I)
		);

		$where = array(
			'id_pengguna' => $this->input->post('edt_id_pengguna')

		);

		$result = $this->pengguna_model->update($object, $where);
		redirect('data_staf', 'refresh');
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
		$this->datatables->add_column('#', '<a data-id="$1" style="margin:2px;" class="btn-detail btn-edit btn btn-info btn-xs"> Detail</a>'.' <a data-id="$1" style="margin:2px;" class="btn-edit btn btn-primary btn-xs"> Edit</a>'.' <a data-id="$1" style="margin:2px;" class="btn-delete btn btn-danger btn-xs ">Delete</a>', 'id_pengguna');
		

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

	public function insert()
	{
		// $this->form_validation->set_error_delimiters('', '');
		// $this->form_validation->set_rules('fname','First Name', 'required');
		// $this->form_validation->set_rules('lname','Last Name', 'required');
		// $this->form_validation->set_rules('email','Email Address','required|valid_email|is_unique[sec_users.email]');
		// if ($this->form_validation->run() == FALSE) {
		// 	echo validation_errors();
		// } 
		// else {
			
			$dataDiriStaf = array(
				'id_kecamatan' => $this->input->post('kecamatan'),
				'nama_pengguna' => $this->input->post('nama'),
				'nik_pengguna' => $this->input->post('nik'),
				'nip_pengguna' => $this->input->post('nip'),
				'alamat_pengguna' => $this->input->post('alamat'),
				'email_pengguna' => $this->input->post('email'),
				'tanggal_lahir_pengguna' => $this->input->post('bday'),
				'telepon_pengguna' => $this->input->post('telepon'),
				'pendidikan' => $this->input->post('pendidikan'),
				'username_pengguna' => $this->input->post('username'),
				'password_pengguna' => password_hash($this->input->post('password'), PASSWORD_ARGON2I),
				'level_pengguna' => '1',
				'status_pengguna' => '1',
			);
			if ($this->pengguna_model->check_username($dataDiriStaf['username_pengguna'])) {
				$resultId = $this->pengguna_model->insert($dataDiriStaf);
				if ($resultId != false) { 
					$dataJabatanStaf = array(
						'id_jabatan' => $this->input->post('jabatan'),
						'id_pengguna' => $resultId,
						'id_seksi' => $this->input->post('seksi'),
					);
					$result2 = $this->staf_model->insert($dataJabatanStaf);
					if ($result2) {
						header('Content-Type: application/json');
						echo json_encode( ['error' => false, 'message' => 'insert success'] );
					} else {
						header('Content-Type: application/json');
						echo json_encode( ['error' => true, 'message' => 'insert jabatan failed'] );
					}
				} else {
					header('Content-Type: application/json');
					echo json_encode( ['error' => true, 'message' => 'insert failed'] );
				}
			} else {
				header('Content-Type: application/json');
				echo json_encode( ['error' => true, 'message' => ' username has been used'] );
			}
		// }
		
	}

	public function update()
	{
		$id = $this->input->post('id');
		$dataDiriStaf = array(
			'id_kecamatan' => $this->input->post('kecamatan'),
			'nama_pengguna' => $this->input->post('nama'),
			'nik_pengguna' => $this->input->post('nik'),
			'nip_pengguna' => $this->input->post('nip'),
			'alamat_pengguna' => $this->input->post('alamat'),
			'email_pengguna' => $this->input->post('email'),
			'tanggal_lahir_pengguna' => $this->input->post('bday'),
			'telepon_pengguna' => $this->input->post('telepon'),
			'pendidikan' => $this->input->post('pendidikan'),
			'username_pengguna' => $this->input->post('username'),
			'password_pengguna' => password_hash($this->input->post('password'), PASSWORD_ARGON2I),
			'level_pengguna' => $this->input->post('level'),
			'status_pengguna' => $this->input->post('status'),
		);
		
		$resultPengguna = $this->pengguna_model->edit_data_diri($dataDiriStaf, $id);
		if ($resultPengguna != false) { 
			$dataJabatanStaf = array(
				'id_jabatan' => $this->input->post('jabatan'),
				'id_seksi' => $this->input->post('seksi'),
			);
			$resultJabatan = $this->staf_model->update($dataJabatanStaf, $id);
			if ($resultJabatan) {
				header('Content-Type: application/json');
				echo json_encode( ['error' => false, 'message' => 'Update success'] );
			} else {
				header('Content-Type: application/json');
				echo json_encode( ['error' => true, 'message' => 'Update jabatan failed'] );
			}
		} else {
			header('Content-Type: application/json');
			echo json_encode( ['error' => true, 'message' => 'username has been used / server error'] );
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->pengguna_model->update(['status_pengguna' => '0'], $id);
		if ($result) {
			header('Content-Type: application/json');
			echo json_encode( ['error' => false, 'message' => 'success delete'] );
		} else {
			header('Content-Type: application/json');
			echo json_encode( ['error' => true, 'message' => 'server error'] );
		}
	}

	public function checkUsername()
	{
		if($this->pengguna_model->check_username($this->input->get('username'))) {
			header('Content-Type: application/json');
			echo json_encode( ['error' => false, 'message' => 'username has not been used'] );
		} else {
			header('Content-Type: application/json');
			echo json_encode( ['error' => true, 'message' => ' username has been used'] );
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

				redirect('data_staf', 'refresh');
			}
		}
	}


}
