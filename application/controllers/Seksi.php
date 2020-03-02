<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('bidang_model');
        $this->load->model('kabid_model');
        $this->load->model('kasi_model');
        $this->load->model('pengguna_model');
        $this->load->model('seksi_model');

    }
    
    public function index()
    {
        $context['data_bidang'] = $this->bidang_model->select();
        $context['data_kasi'] = $this->kasi_model->select_join_bidang_seksi_pengguna();
        $context['data_pengguna'] = $this->pengguna_model->select();
        $context['data_seksi'] = $this->seksi_model->select_join_bidang();
        $this->load->view('v_seksi', $context);
        
    }

    public function insert_seksi()
    {
        $object = array(
            'id_bidang' => $this->input->post('bidang'),
            'nama_seksi' => $this->input->post('nama')            
        );

        $result = $this->seksi_model->insert($object);
        
        redirect('seksi','refresh');
        
    }

    public function insert_kasi()
    {
        $object = array(
            'id_seksi' => $this->input->post('seksi'),
            'id_pengguna' => $this->input->post('pengguna')
        );

        $result = $this->kasi_model->insert($object);
        
        redirect('seksi','refresh');
    }

}

/* End of file Seksi.php */
