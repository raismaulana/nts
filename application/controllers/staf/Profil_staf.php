<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_staf extends CI_Controller{

    public function index()
    {
        $this->load->view('Staf/View_profil_staf');
        
    }

}