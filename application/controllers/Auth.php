<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        $this->auth_model->is_login();
        $this->load->view('login');
        
    }

    public function login()
    {
        $this->auth_model->is_login();
        $object = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
         );
        $result = $this->auth_model->login($object);
    }

    public function logout()
    {
        $this->auth_model->logout();
        
    }
}

/* End of file Login.php */
