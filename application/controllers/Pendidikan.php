<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('jurusan_model');
        $this->load->model('pendidikan_model');
        $this->load->model('kualifikasi_model');

    }

    public function index()
    {
        
        $context['data_jurusan'] = $this->jurusan_model->select();
        $context['data_kualifikasi'] = $this->kualifikasi_model->select_join_pendidikan_jurusan();
        $context['data_pendidikan'] = $this->pendidikan_model->select();
        $this->load->view('v_pendidikan', $context);
        
    }

    public function insert_pendidikan()
    {
        $object = array(
            'nama_pendidikan' => $this->input->post('nama')
        );

        $result = $this->pendidikan_model->insert($object);

        redirect('pendidikan','refresh');
        
    }

    public function insert_jurusan()
    {
        $object = array(
            'nama_jurusan' => $this->input->post('nama')
        );

        $result = $this->jurusan_model->insert($object);

        redirect('pendidikan','refresh');
        
    }
    public function insert_kualifikasi()
    {
        $object = array(
            'id_pendidikan' => $this->input->post('pendidikan'),
            'id_jurusan' => $this->input->post('jurusan')
        );

        $result = $this->kualifikasi_model->insert($object);

        redirect('pendidikan','refresh');
        
    }

}

/* End of file Pendidikan.php */
