<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->auth_model->security();
        
        $this->load->model('pengguna_model');
    }

    public function index()
    {
        $this->load->view('setting_profile');
    }
    public function load_kabid()
    {
        $this->load->view('KABID/setting_profile');
    }
    public function load_kasi()
    {
        $this->load->view('KASI/setting_profile');
    }
    public function load_staf()
    {
        $this->load->view('Staf/setting_profile');
    }

    public function update()
    {
        $data = array(
            'username_pengguna' => $this->input->post('edt_username'),
            'password_pengguna' => password_hash($this->input->post('edt_password'), PASSWORD_ARGON2I)
        );

        $hasil = $this->pengguna_model->update($data,$this->session->userdata('id'));

		$this->log_model->write($this->session->userdata['id'], "Memperbarui akun (username/password) id_pengguna ".$this->session->userdata('id'));

        redirect('Home','refresh');
    }

    public function update_kbid()
    {
        $data = array(
            'username_pengguna' => $this->input->post('edt_username'),
            'password_pengguna' => password_hash($this->input->post('edt_password'), PASSWORD_ARGON2I)
        );

        $hasil = $this->pengguna_model->update($data,$this->session->userdata('id'));

        $this->log_model->write($this->session->userdata['id'], "Memperbarui akun (username/password) id_pengguna ".$this->session->userdata('id'));

        redirect('KABID/Beranda_kabid','refresh');
    }
    public function update_kasi()
    {
        $data = array(
            'username_pengguna' => $this->input->post('edt_username'),
            'password_pengguna' => password_hash($this->input->post('edt_password'), PASSWORD_ARGON2I)
        );

        $hasil = $this->pengguna_model->update($data,$this->session->userdata('id'));

        $this->log_model->write($this->session->userdata['id'], "Memperbarui akun (username/password) id_pengguna ".$this->session->userdata('id'));

        redirect('KASI/Beranda_kasi','refresh');
    }

    public function update_staf()
    {
        $data = array(
            'username_pengguna' => $this->input->post('edt_username'),
            'password_pengguna' => password_hash($this->input->post('edt_password'), PASSWORD_ARGON2I)
        );

        $hasil = $this->pengguna_model->update($data,$this->session->userdata('id'));

        $this->log_model->write($this->session->userdata['id'], "Memperbarui akun (username/password) id_pengguna ".$this->session->userdata('id'));

        redirect('Staf/Beranda','refresh');
    }
}

/* End of file Setting.php */
