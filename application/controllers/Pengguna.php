<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('auth_model');
        // $this->auth_model->security();

        $this->load->model('alamat_model');
        $this->load->model('jabatan_model');
        $this->load->model('pengguna_model');
        $this->load->model('seksi_model');
        $this->load->model('staf_model');
        

    }
    
    public function index()
    {
        $context['data_alamat'] = $this->alamat_model->select_join_kabupaten_provinsi();
        $context['data_jabatan'] = $this->jabatan_model->select();
        $context['data_pengguna'] = $this->pengguna_model->select();
        $context['data_seksi'] = $this->seksi_model->select();
        $context['data_staf'] = $this->staf_model->select_join_jabatan_pengguna_seksi();
        $this->load->view('v_pengguna', $context);
    }

    public function insert_pengguna()
    {
        $object = array(
            'id_kecamatan' => $this->input->post('kecamatan'),
            'alamat_pengguna' => $this->input->post('alamat'),
            'email_pengguna' => $this->input->post('email'),
            'golongan_pengguna' => $this->input->post('golongan'),
            'level_pengguna' => $this->input->post('level'),  
            'nama_pengguna' => $this->input->post('nama'),
            'nik_pengguna' => $this->input->post('nik'),
            'nip_pengguna' => $this->input->post('nip'),
            'password_pengguna' => password_hash($this->input->post('password'), PASSWORD_ARGON2I),
            'pendidikan' => $this->input->post('pendidikan'),
            'status_pengguna' => '1',      
            'tanggal_lahir_pengguna' => $this->input->post('bday'),
            'telepon_pengguna' => $this->input->post('telepon'),
            'username_pengguna' => $this->input->post('username')
        );

        $result = $this->pengguna_model->insert($object);

        $object2 = array(
            'id_jabatan' => $this->input->post('jabatan'),
            'id_pengguna' => $result
        );     

        $result = $this->staf_model->insert($object2);
        redirect('pengguna','refresh');
        
    }

    public function insert()
    {
        $object = array(
            'id_kecamatan' => 1101010,
            'alamat_pengguna' => 'JAKARTA',
            'email_pengguna' => 'anonymous@gmail.com',
            'golongan_pengguna' => null,
            'level_pengguna' => 4,  
            'nama_pengguna' => 'Administrator',
            'nik_pengguna' => '1234567890123456',
            'nip_pengguna' => null,
            'password_pengguna' => password_hash('admin', PASSWORD_ARGON2I),
            'pendidikan' => 'Phd Phsycology',
            'status_pengguna' => '1',      
            'tanggal_lahir_pengguna' => '1900-01-01',
            'telepon_pengguna' => '1234567890',
            'username_pengguna' => 'administrator'
        );

        $result = $this->pengguna_model->insert($object);
    }

    public function update_staf()
    {
        $where = $this->input->post('staf');
        $object = array(
            'id_seksi' => $this->input->post('seksi')
        );
        $this->staf_model->update($object, $where);
        
        redirect('pengguna','refresh');
        
    }

}

/* End of file Pengguna.php */
