<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bidang_model');
        $this->load->model('kasi_model');
        $this->load->model('laporan_model');
        $this->load->model('pengguna_model');
        $this->load->model('seksi_model');

    }

    public function update()
    {
        $data = array('status_laporan' => $this->input->post('edit_status_laporan')
        );

        $hasil = $this->laporan_model->update($this->input->post('edit_id_laporan'),$data);

        
        redirect('laporan_kegiatan_staf','refresh');
        
    }

//STAF STAF STAF STAF

    public function index()
    {
        $id = $this->session->userdata('id');
        $context['data_laporan'] = $this->laporan_model->select_where($id);

        $this->load->view('v_laporan', $context);
    }

    public function insert_laporan()
    {
        $id = $this->session->userdata('id');
        $bulan = date('m');
        $tahun = date('Y');
        $result = $this->laporan_model->select_where3($bulan, $tahun, $id);
        if( count($result) == 0){
            $object = array(
                'id_pengguna' => $id,
                'bulan_laporan' => $bulan,
                'tahun_laporan' => $tahun,
                'status_laporan' => '0'
            );
            $result = $this->laporan_model->insert($object);
            
            redirect("laporan",'refresh');
            
        } else {
            $this->session->set_flashdata('info', 'Coba lagi bulan depan!');
            redirect("laporan",'refresh');
        }
    }

//KASI KASI KASI KASI

    public function list_laporan_staf()
    {
        if($this->session->userdata('id_kasi')){ //KABID KABID
            $id_seksi = $this->session->userdata('id_seksi');
            $context['data'] = $this->pengguna_model->select_where_join_staf('staf.id_seksi', $id_seksi)->result();
            $context['seksi'] = $this->seksi_model->select_where($id_seksi);
            $this->load->view('v_list_laporan_staf', $context);     

        } else if ($this->session->userdata('id_kabid')) { //KABID KABID
            $id_seksi = $this->input->get('id_seksi');

            if(!$id_seksi == null) {
                $id_bidang = $this->session->userdata('id_bidang') ;
                $bidang_seksi = $this->seksi_model->select_where($id_seksi);
                if(!$bidang_seksi == null){
                    if($bidang_seksi->id_bidang == $id_bidang){
                        $context['data'] = $this->pengguna_model->select_where_join_staf('staf.id_seksi', $id_seksi)->result();
                        $context['seksi'] = $this->seksi_model->select_where($id_seksi);
                        $this->load->view('v_list_laporan_staf', $context);
                    } else {
                        echo "FORBIDEN";
                    }
                } else {
                    echo "data tidak ditemukan";
                }
            } else {
                redirect('laporan/seksi', 'refresh');
            }

        }
    }

    public function laporan_staf($id)
    {
        $id_seksi = $this->session->userdata('id_seksi');
        $seksi_staf = $this->pengguna_model->select_where_join_staf('pengguna.id_pengguna', $id)->row()->id_seksi;
        
        if($id_seksi == $seksi_staf){
            $context['data_laporan'] = $this->laporan_model->select_where_join_pengguna($id);

            $this->load->view('v_laporan_staf', $context);
        } 
        // else if(){
        //     } 
        else {
            echo "FORBIDEN";
        }
    }
    
    public function approve()
    {

    }

    public function decline()
    {

    }

//KABID KABID KABID KABID

    public function list_laporan_seksi()
    {
        if($this->session->userdata('id_kabid')){
            $id_bidang = $this->session->userdata('id_bidang');
            $context['data'] = $this->kasi_model->select_join_seksi_pengguna_where($id_bidang);
            $context['bidang'] = $this->bidang_model->select_where($id_bidang);
            $this->load->view('v_list_laporan_seksi', $context);
            
        } else {
            echo "FORBIDEN";
        }
    }


}

/* End of file Laporan.php */
