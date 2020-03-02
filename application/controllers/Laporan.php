<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_model');
        $this->load->model('pengguna_model');
        
    }

    public function index($id)
    {
        $context['data_laporan'] = $this->laporan_model->select_where($id);

        $this->load->view('v_laporan', $context);
    }

    public function insert_laporan()
    {
        $bulan = date('m');
        $tahun = date('Y');
        $id = $this->input->get('id');
        $result = $this->laporan_model->select_where3($bulan, $tahun, $id);
        if( count($result) == 0){
            $object = array(
                'id_pengguna' => $id,
                'bulan_laporan' => $bulan,
                'tahun_laporan' => $tahun,
                'status_laporan' => '0'
            );
            $result = $this->laporan_model->insert($object);
            
            redirect("laporan/$id",'refresh');
            
        } else {
            $this->session->set_flashdata('info', 'Coba lagi bulan depan!');
            redirect("laporan/$id",'refresh');
        }
    }

}

/* End of file Laporan.php */
