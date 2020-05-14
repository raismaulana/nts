<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_kegiatan_staf extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_model');
        $this->load->model('kegiatan_model');
        
        
    }


    public function index()
    {

        $this->load->view('v_laporan_kegiatan_staf');
    }

    public function select_all()
    {
        $data = array('data' => $this->laporan_model->select_join_banyak());

        echo json_encode($data);
    }

    public function get_detail()
    {
        $kegi = $this->kegiatan_model->select_where($this->input->post('id_laporan'));
        $id = $kegi[0]->id_kegiatan;
        $bio = $this->kegiatan_model->select_where_join_pengguna($id);

        $data = array(
            'kegiatan' => $kegi,
            'biodata' => $bio
        );

        echo json_encode($data);
    }

    public function update()
    {
        $data = array('status_laporan' => $this->input->post('edit_status')
        );

        $hasil = $this->laporan_model->update($this->input->post('edit_id_laporan'),$data);

        
        redirect('laporan_kegiatan_staf','refresh');
        
    }
}

/* End of file 
.php */
