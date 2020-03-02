<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function login($object)
    {
        $u = $object['username'];
        $pwd = ($object['password']);
		$this->db->where('username_pengguna like binary', $u);
        $query=$this->db->get('pengguna');
        
		if($query->num_rows()>0) {
            
            $row = $query->row();

			if (password_verify($pwd, $row->password_pengguna)) {
                if($row->status_pengguna == '1'){
                    $sess = array(
                        'id' => $row->id_pengguna,
                        'username' => $row->username_pengguna,
                        'level' => $row->level_pengguna
                    );
                    $this->session->set_userdata($sess);
                        
                    $lvl = $this->session->userdata('level');
                    $id = $this->session->userdata('id_global');
    
                    if ($lvl == '1') {
                        //staf
                        
                        redirect('home','refresh');
                        
                    } else if ($lvl == '2') {
                        //kasi
                        
                        redirect('home','refresh');
                        
                    } else if ($lvl == '3') {
                        //kabid
                        
                        redirect('home','refresh');
                        
                    } else if ($lvl == '4') {
                        //admin
                        
                        redirect('home','refresh');
                        
                    }
                }
			} else {
				$this->session->set_flashdata('info', 'Username atau Password Salah');
				redirect ('auth');	
			}
		} else {
			$this->session->set_flashdata('info', 'Username atau Password Salah');
			redirect ('auth');
		}
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('auth','refresh');
    }

    public function security()
    {
        if(!$this->session->userdata('username')){
            $this->logout();
        }
    }

    public function is_login()
    {
        if($this->session->userdata('username')){
            redirect('home', 'refresh');
        }
    }

}

/* End of file Login_model.php */
