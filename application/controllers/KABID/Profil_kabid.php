<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_kabid extends CI_Controller{

    public function index()
    {
        $this->load->view('KABID/v_profil_kabid');
        
    }

}