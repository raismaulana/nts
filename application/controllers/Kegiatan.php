<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kegiatan_model');
        $this->load->model('pengguna_model');
        
    }

    public function index($id)
    {
        $context['data_kegiatan'] = $this->kegiatan_model->select_where($id);

        $this->load->view('v_kegiatan', $context);
        
    }

    public function input_kegiatan($id)
    {
        $context['id'] = $id;


        $this->load->view('v_input_kegiatan', $context);
    }

    public function insert_kegiatan()
    {
        $id = $this->input->post('id');
        $data = array(
            'id_laporan' => $id,
            'aktivitas_kegiatan' => $this->input->post('aktivitas'),
            'waktu_kegiatan' => $this->input->post('waktu'),
            'kuantitas_output_kegiatan' => $this->input->post('kuantitas_output'),
            'tanggal_kegiatan' => $this->input->post('tanggal'),
            'status_kegiatan' => '0',
            'tanggal_update_kegiatan' => date('Y-m-d')
        );
        
        $result = $this->db->insert('kegiatan', $data);
        if($result == 1) {
            
            redirect("kegiatan/$id",'refresh');
            
        }
    }

    public function edit_kegiatan($id)
    {
        $data = $this->kegiatan_model->select_where_kegiatan($id);
        print_r($data);
    }

    public function kegiatan_staf($id)
    {
        $id_seksi = $this->session->userdata('id_seksi');
        $seksi_staf = $this->pengguna_model->select_where_join_jabatan_kegiatan('laporan.id_laporan', $id)->row();
        
        if($id_seksi == $seksi_staf->id_seksi){
            $context['data_kegiatan'] = $this->kegiatan_model->select_where_join_pengguna($id);
            $this->load->view('v_kegiatan_staf', $context);
        } else {
        }
    }

    public function approve($id)
    {
        $id_seksi = $this->session->userdata('id_seksi');
        $seksi_staf = $this->pengguna_model->select_where_join_jabatan_kegiatan('kegiatan.id_kegiatan', $id)->row()->id_seksi;
        
        if($id_seksi == $seksi_staf){
            $data = array(
                'status_kegiatan' => '1'
            );
            $result = $this->kegiatan_model->update($id, $data);

        } else {
        }
    }

    public function decline($id)
    {
        $id_seksi = $this->session->userdata('id_seksi');
        $seksi_staf = $this->pengguna_model->select_where_join_jabatan_kegiatan('kegiatan.id_kegiatan', $id)->row()->id_seksi;
        
        if($id_seksi == $seksi_staf){
            $data = array(
                'status_kegiatan' => '2'
            );
            $result = $this->kegiatan_model->update($id, $data);
            
        } else {
        }
    }
}

/* End of file Kegiatan.php */
