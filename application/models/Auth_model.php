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
                    $id = $this->session->userdata('id');
    
                    if ($lvl == '1') {
                        //staf
                        $this->db->select('pengguna.id_pengguna, staf.id_staf, staf.id_jabatan');
                        $this->db->join('staf', 'pengguna.id_pengguna = staf.id_pengguna', 'left');
                        $this->db->where('pengguna.id_pengguna', $id);
                        $staf = $this->db->get('pengguna')->row();
                        $sess_staf = array(
                            'id_staf' => $staf->id_staf,
                            'id_jabatan' => $staf->id_jabatan
                        );
                        $this->session->set_userdata($sess_staf);
                        
                        redirect('staf/beranda','refresh');
                        
                    } else if ($lvl == '2') {
                        //kasi
                        $this->db->select('pengguna.id_pengguna, kasi.id_kasi, kasi.id_seksi');
                        $this->db->join('kasi', 'pengguna.id_pengguna = kasi.id_pengguna', 'left');
                        $this->db->where('pengguna.id_pengguna', $id);
                        $kasi = $this->db->get('pengguna')->row();
                        $sess_kasi = array(
                            'id_kasi' => $kasi->id_kasi,
                            'id_seksi' => $kasi->id_seksi
                        );
                        $this->session->set_userdata($sess_kasi);
                        
                        redirect('kasi/beranda_kasi','refresh');
                        
                    } else if ($lvl == '3') {
                        //kabid
                        $this->db->select('pengguna.id_pengguna, kabid.id_kabid, kabid.id_bidang');
                        $this->db->join('kabid', 'pengguna.id_pengguna = kabid.id_pengguna', 'left');
                        $this->db->where('pengguna.id_pengguna', $id);
                        $kasi = $this->db->get('pengguna')->row();
                        $sess_kabid = array(
                            'id_kabid' => $kasi->id_kabid,
                            'id_bidang' => $kasi->id_bidang
                        );
                        $this->session->set_userdata($sess_kabid);

                        redirect('kabid/beranda_kabid','refresh');
                        
                    } else if ($lvl == '4') {
                        //admin
                        $this->db->select('pengguna.id_pengguna');
                        $this->db->where('pengguna.id_pengguna', $id);
                        $admin = $this->db->get('pengguna')->row();
                        $sess_admin = array(
                            'id_admin' => $admin->id_pengguna
                        );
                        $this->session->set_userdata($sess_admin);

                        redirect('home','refresh');
                        
                    }
                } else {
                    $this->session->set_flashdata('info', 'Akun tidak aktif');
				    redirect ('auth');
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

            if ($this->session->userdata('id_staf')) {
                
                redirect('staf/beranda','refresh');
                
            } else if ($this->session->userdata('id_kasi')){
                
                redirect('kasi/beranda_kasi','refresh');
                
            } else if ($this->session->userdata('id_kabid')) {
                
                redirect('kabid/beranda_kabid','refresh');
                
            } else if ($this->session->userdata('id_admin')) {
                
                redirect('home','refresh');
                
            }
        }
    }
    
    public function can_staf()
    {
        if (!$this->session->userdata('id_staf')) {
            
            redirect('auth','refresh');
            
        }
    }

    public function can_kasi()
    {
        if (!$this->session->userdata('id_kasi')) {
            
            redirect('auth','refresh');
            
        }
    }

    public function can_kabid()
    {
        if (!$this->session->userdata('id_kabid')) {
            
            redirect('auth','refresh');
            
        }
    }

    public function can_admin()
    {
        if (!$this->session->userdata('id_admin')) {
            
            redirect('auth','refresh');
            
        }
    }
}

/* End of file Login_model.php */
