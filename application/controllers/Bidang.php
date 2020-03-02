<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();

        $this->load->model('bidang_model');
        $this->load->model('kabid_model');
        $this->load->model('pengguna_model');

    }
    

    public function index()
    {
        $context['data_bidang'] = $this->bidang_model->select();
        $context['data_kabid'] = $this->kabid_model->select_join_bidang_pengguna();
        $context['data_pengguna'] = $this->pengguna_model->select();
        $this->load->view('v_bidang', $context);
        
    }

    public function insert_bidang()
    {
        $object = array(
            'nama_bidang' => $this->input->post('nama')
        );

        $result = $this->bidang_model->insert($object);
        
        redirect('bidang','refresh');
        
    }

    public function insert_kabid()
    {
        $object = array(
            'id_bidang' => $this->input->post('bidang'),
            'id_pengguna' => $this->input->post('pengguna')
        );

        $result = $this->kabid_model->insert($object);
        
        redirect('bidang','refresh');
    }

}

/* End of file Bidang.php */
