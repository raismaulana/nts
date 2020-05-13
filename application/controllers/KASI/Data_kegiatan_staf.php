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
		$this->load->view('KASI/v_kegiatan_staf', $context);
	}

	public function select_all()
	{
		$data = array(
			'data' =>  $this->kegiatan_model->select()
		);

		echo json_encode($data);
	}

	public function get_detail()
	{
		$data = $this->kegiatan_model->select_where_join_pengguna($this->input->post('id_kegiatan'));

		echo json_encode($data);
	}
}
