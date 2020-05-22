<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_staf extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->auth_model->security();
		$this->auth_model->can_kasi();

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
		$id = $this->input->post('edit_id_kegiatan');
		$data = array(
			'status_kegiatan' => $this->input->post('edit_status'),
			'tanggal_update_kegiatan' => date('Y-m-d'),
		);

		$this->kegiatan_model->update($id,$data);
		
		$this->log_model->write($this->session->userdata['id'], 'Mengganti status_kegiatan menjadi '.$data['status_kegiatan'].' pada id_kegiatan '.$id);

		redirect('KASI/Kegiatan_staf','refresh');
		
	}
}
