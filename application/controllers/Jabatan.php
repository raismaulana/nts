<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('jabatan_model');

    }

    public function index(){
        $this->load->view('v_jabatan');
    }

    function data_jabatan(){
        $data=$this->jabatan_model->jabatan_list();
        echo json_encode($data);
    }

    function simpan_jabatan(){
        $jabat = $this ->input->post('jabat');
        $data=$this->jabatan_model->simpan_jabatan($jabat);
        echo json_encode($data);

    }

    function update_jabatan(){
        $jabat=$this->input->post('jabat');
        $data=$this->jabatan_model->update_jabatan($jabat);
        echo json_encode($data);

    }

    function hapus_jabatan(){
        $jabat=$this->input->post('jabatan');
        $data=$this->jabatan_model->hapus_jabatan($jabat);
        echo json_encode($data);
    }
 

    // public function index()
    // {
    //     $context['data_jabatan'] = $this->jabatan_model->select();
    //     $this->load->view('v_jabatan', $context);
        
    // }

    // public function insert_jabatan()
    // {
    //     $object = array(
    //         'nama_jabatan' => $this->input->post('nama')
    //     );

    //     $result = $this->jabatan_model->insert($object);

    //     redirect('jabatan','refresh');
        
    // }

}

/* End of file Jabatan.php */
