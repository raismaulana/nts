<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengguna_model');
    }

    public function index()
    {
        $this->load->view('setting_profile');
    }

    public function update()
    {
        $data = array(
            'username_pengguna' => $this->input->post('edt_username'),
            'password_pengguna' => $this->input->post('edt_password')
        );

        $hasil = $this->pengguna_model->update($data,$this->session->userdata('id'));

        redirect('Home','refresh');
    }
}

/* End of file Setting.php */
