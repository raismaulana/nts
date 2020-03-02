<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        
    }

    public function index()
    {
        $this->load->view('login');
        
    }

    public function login()
    {
        $object = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
         );
        $result = $this->Auth_model->login($object);
    }

    public function logout()
    {
        $this->Auth_model->logout();
        
    }
}

/* End of file Login.php */
