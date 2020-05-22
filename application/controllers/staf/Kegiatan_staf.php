<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_staf extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->auth_model->security();
		$this->auth_model->can_staf();

		$this->load->model('kegiatan_model');
		$this->load->model('laporan_model');
		$this->load->model('staf_model');
	}

	public function index()
	{
		$context['pengguna'] = $this->staf_model->select_join_seksi();
		$this->load->view('staf/View_kegiatan_staf', $context);
	}

	public function select_all()
	{
		$data = array(
			'data' => $this->kegiatan_model->select_sort($where = array('staf.id_staf' => $this->session->userdata('id_staf')))
		);

		echo json_encode($data);
	}

	public function insert()
	{
		$cek = $this->laporan_model->select_check(
		$this->session->userdata('id')
		);

		if ($cek == null || $cek->bulan_laporan !== date('m')) {

			$insert_laporan = array(
				'id_pengguna' => 
				$this->session->userdata('id')
				,
				'bulan_laporan' => date('m'),
				'tahun_laporan' => date('Y'),
				'status_laporan' => '0'
			);

			$id_lap = $this->laporan_model->insert($insert_laporan);


			$insert_kegiatan = array(
				'id_laporan' => $id_lap,
				'aktivitas_kegiatan' => $this->input->post('input_aktivitas'),
				'kuantitas_output_kegiatan' => $this->input->post('input_kuantitas'),
				'status_kegiatan' => 0,
				'tanggal_kegiatan' => $this->input->post('input_tgl_mulai'),
				'tanggal_selesai_kegiatan' => $this->input->post('input_tgl_selesai'),
				'tanggal_update_kegiatan' => date('Y-m-d'),
				'waktu_kegiatan' => $this->kegiatan_model->durasi($this->input->post('input_tgl_mulai'), $this->input->post('input_tgl_selesai'))
			);

			$hasil = $this->kegiatan_model->insert($insert_kegiatan);

			$this->log_model->write($this->session->userdata['id'], "Mengisi Kegiatan di id_laporan $id_lap");

			redirect('staf/kegiatan_staf', 'refresh');
		} else {
			$insert_kegiatan = array(
				'id_laporan' => $cek->id_laporan,
				'aktivitas_kegiatan' => $this->input->post('input_aktivitas'),
				'kuantitas_output_kegiatan' => $this->input->post('input_kuantitas'),
				'status_kegiatan' => 0,
				'tanggal_kegiatan' => $this->input->post('input_tgl_mulai'),
				'tanggal_selesai_kegiatan' => $this->input->post('input_tgl_selesai'),
				'tanggal_update_kegiatan' => date('Y-m-d'),
				'waktu_kegiatan' => $this->kegiatan_model->durasi($this->input->post('input_tgl_mulai'), $this->input->post('input_tgl_selesai'))
			);

			$hasil = $this->kegiatan_model->insert($insert_kegiatan);

			$this->log_model->write($this->session->userdata['id'], "Mengisi Kegiatan di id_laporan ".$cek->id_laporan);

			redirect('staf/kegiatan_staf', 'refresh');
		}
	}

	public function get_detail()
	{
		$data = $this->kegiatan_model->select_where_join_pengguna($this->input->post('id_kegiatan'));

		echo json_encode($data);
	}

	public function update()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'aktivitas_kegiatan' => $this->input->post('edit_aktivitas'),
			'kuantitas_output_kegiatan' => $this->input->post('edit_kuantitas'),
			'tanggal_kegiatan' => $this->input->post('edit_tgl_mulai'),
			'tanggal_selesai_kegiatan' => $this->input->post('edit_tgl_selesai'),
			'tanggal_update_kegiatan' => date('Y-m-d'),
			'waktu_kegiatan' => $this->kegiatan_model->durasi($this->input->post('edit_tgl_mulai'), $this->input->post('edot_tgl_selesai')),
			'status_kegiatan' => 0,
		);

		$id = $this->input->post('edit_id_kegiatan');
		$this->kegiatan_model->update($id, $data);

		$this->log_model->write($this->session->userdata['id'], "Memperbarui Kegiatan id_kegiatan $id");

		redirect('staf/kegiatan_staf','refresh');
		
	}

	public function delete()
	{
		$id = $this->input->post('del_id_kegiatan');
		$this->kegiatan_model->delete($id);
		
		$this->log_model->write($this->session->userdata['id'], "Menghapus Kegiatan id_kegiatan $id");

		redirect('staf/kegiatan_staf','refresh');
		
	}
}
