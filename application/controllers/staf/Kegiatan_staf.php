<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_staf extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

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
				'waktu_kegiatan' => $this->kegiatan_model->durasi($this->input->post('input_tgl_mulai'), $this->input->post('input_tgl_selesai'))
			);

			$hasil = $this->kegiatan_model->insert($insert_kegiatan);
			redirect('staf/kegiatan_staf', 'refresh');
		} else {
			$insert_kegiatan = array(
				'id_laporan' => $cek->id_laporan,
				'aktivitas_kegiatan' => $this->input->post('input_aktivitas'),
				'kuantitas_output_kegiatan' => $this->input->post('input_kuantitas'),
				'status_kegiatan' => 0,
				'tanggal_kegiatan' => $this->input->post('input_tgl_mulai'),
				'tanggal_selesai_kegiatan' => $this->input->post('input_tgl_selesai'),
				'waktu_kegiatan' => $this->kegiatan_model->durasi($this->input->post('input_tgl_mulai'), $this->input->post('input_tgl_selesai'))
			);

			$hasil = $this->kegiatan_model->insert($insert_kegiatan);
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
			'tanggal_update_kegiatan' => date('Y-m-d H:i'),
			'waktu_kegiatan' => $this->kegiatan_model->durasi($this->input->post('edit_tgl_mulai'), $this->input->post('edot_tgl_selesai'))
		);

		$this->kegiatan_model->update($this->input->post('edit_id_kegiatan'),$data);

		redirect('staf/kegiatan_staf','refresh');
		
	}

	public function delete()
	{
		$this->kegiatan_model->delete($this->input->post('del_id_kegiatan'));
		
		redirect('staf/kegiatan_staf','refresh');
		
	}
}
