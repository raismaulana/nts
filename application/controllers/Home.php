<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->auth_model->security();

        $this->load->model('bidang_model');
        $this->load->model('jabatan_model');
        $this->load->model('kabid_model');
        $this->load->model('kasi_model');
        $this->load->model('pengguna_model');
        $this->load->model('seksi_model');
        $this->load->model('staf_model');
        $this->load->model('kegiatan_model');
    }


    public function index()
    {
        $a = $this->kegiatan_model->select_where_default($where = array('status_kegiatan' => 0));
        $b = $this->kegiatan_model->select_where_default($where = array('status_kegiatan' => 1));
        $c = $this->kegiatan_model->select_where_default($where = array('status_kegiatan' => 2));
        $d = $a + $b + $c;
        $e =  0;
		$f = 0;
		$g = 0;
		$h = 0;
		if ($d == 0) {
			$e =  0;	$f = 0;	$g = 0;
		} else {
			$e = ($d / $d) * 100;
			$f = ($a / $d) * 100;
			$g = ($b / $d) * 100;
			$h = ($c / $d) * 100;
		}
		
		$context = array(
			'total_kegiatan' => $d,
			'menunggu' => $a,
			'diterima' => $b,
			'ditolak' => $c,
			'persen_t' => $e,
			'persen_m' => $f,
			'persen_de' => $g,
			'persen_do' => $h
		);
        $this->load->view('home', $context);
    }

    public function insert_bidang()
    {
        $object = array(
            'nama_bidang' => $this->input->post('nama')
        );

        $result = $this->bidang_model->insert($object);

        redirect('home', 'refresh');
    }

    public function insert_seksi()
    {
        $object = array(
            'id_bidang' => $this->input->post('bidang'),
            'nama_seksi' => $this->input->post('nama')
        );

        $result = $this->seksi_model->insert($object);

        redirect('home', 'refresh');
    }

    public function insert_jabatan()
    {
        $object = array(
            'id_seksi' => $this->input->post('seksi'),
            'nama_jabatan' => $this->input->post('nama')
        );

        $result = $this->jabatan_model->insert($object);

        redirect('home', 'refresh');
    }

    public function insert_pendidikan()
    {
        $object = array(
            'nama_pendidikan' => $this->input->post('nama')
        );

        $result = $this->pendidikan_model->insert($object);

        redirect('home', 'refresh');
    }

    public function insert_jurusan()
    {
        $object = array(
            'id_pendidikan' => $this->input->post('jurusan'),
            'nama_jurusan' => $this->input->post('nama')
        );

        $result = $this->jurusan_model->insert($object);

        redirect('home', 'refresh');
    }

    public function insert_pengguna()
    {
        $object = array(
            'id_jurusan' => $this->input->post('jurusan'),
            'alamat_pengguna' => $this->input->post('alamat'),
            'email_pengguna' => $this->input->post('email'),
            'golongan_pengguna' => $this->input->post('golongan'),
            'level_pengguna' => $this->input->post('level'),
            'nama_pengguna' => $this->input->post('nama'),
            'nik_pengguna' => $this->input->post('nik'),
            'nip_pengguna' => $this->input->post('nip'),
            'password_pengguna' => $this->input->post('password'),
            'status_pengguna' => '1',
            'tanggal_lahir_pengguna' => $this->input->post('bday'),
            'telepon_pengguna' => $this->input->post('telepon'),
            'username_pengguna' => $this->input->post('username')
        );

        $result = $this->pengguna_model->insert($object);

        redirect('home', 'refresh');
    }

    public function insert_kabid()
    {
        $object = array(
            'id_bidang' => $this->input->post('bidang'),
            'id_pengguna' => $this->input->post('nama')
        );

        $result = $this->kabid_model->insert($object);

        redirect('home', 'refresh');
    }

    public function insert_kasi()
    {
        $object = array(
            'id_seksi' => $this->input->post('seksi'),
            'id_pengguna' => $this->input->post('nama')
        );

        $result = $this->kasi_model->insert($object);

        redirect('home', 'refresh');
    }

    public function insert_staf()
    {
        $object = array(
            'id_jabatan' => $this->input->post('jabatan'),
            'id_pengguna' => $this->input->post('nama')
        );

        $result = $this->staf_model->insert($object);

        redirect('home', 'refresh');
    }
}

/* End of file Home.php */
