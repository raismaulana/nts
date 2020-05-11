<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kegiatan_staf extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

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
		$this->load->view('v_data_kegiatan_staf', $context);
	}

	public function select_all()
	{
		$data = array(
			'data' =>  $this->kegiatan_model->select()
		);

		echo json_encode($data);
	}

	public function insert()
	{
		$cek = $this->laporan_model->select_check($this->input->post('input_id_pengguna'));

		if ($cek == null || $cek->bulan_laporan !== date('m')) {

			$insert_laporan = array(
				'id_pengguna' => $this->input->post('input_id_pengguna'),
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
			redirect('data_kegiatan_staf', 'refresh');
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
			redirect('data_kegiatan_staf', 'refresh');
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
			'status_kegiatan' => $this->input->post('edit_status'),
			'tanggal_kegiatan' => $this->input->post('edit_tgl_mulai'),
			'tanggal_selesai_kegiatan' => $this->input->post('edit_tgl_selesai'),
			'tanggal_update_kegiatan' => date('Y-m-d H:i'),
			'waktu_kegiatan' => $this->kegiatan_model->durasi($this->input->post('edit_tgl_mulai'), $this->input->post('edot_tgl_selesai'))
		);

		$this->kegiatan_model->update($this->input->post('edit_id_kegiatan'),$data);

		redirect('data_kegiatan_staf','refresh');
		
	}

	public function delete()
	{
		$this->kegiatan_model->delete($this->input->post('del_id_kegiatan'));
		
		redirect('data_kegiatan_staf','refresh');
		
	}
}
