<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('jabatan_model');

    }

    public function index()
    {
        $context['data_jabatan'] = $this->jabatan_model->select();
        $this->load->view('v_jabatan', $context);
        
    }

    public function insert_jabatan()
    {
        $object = array(
            'nama_jabatan' => $this->input->post('nama')
        );

        $result = $this->jabatan_model->insert($object);

        redirect('jabatan','refresh');
        
    }

}

/* End of file Jabatan.php */
