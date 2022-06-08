<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
        //model
        $this->load->model('M_admin');
    }
    

    public function index()
    {
        $this->load->view('login');
        
    }
    public function login()
    {
        $username      = htmlspecialchars($this->input->post('username'));
        $password   = $this->input->post('password');
    
        $admin       = $this->M_admin->CekData(['username'=> $username])->row_array();

        //jika username terdaftar
        if($admin){
            //cek keaktifan admin
            if($admin['username'] == 12207027){
                //cek password
                if($password == $admin['password']){

                    $data = array(
                        'username' => $admin['username'],
                        'nama' => $admin['nama'],
                        'Cekadmin' => 1

                    );

                    $this->session->set_userdata($data);
                    
                    redirect('Home');
                    

                }else{
                    $this->session->set_flashdata('pesan','password salah');
            
                    redirect('auth');
                }
                
            }else{
                $this->session->set_flashdata('pesan','admin non aktif');
            
                redirect('auth');
            }
        }else{
            $this->session->set_flashdata('pesan','username tidak ada');
            
            redirect('auth');
            
        }

        
    }
    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('pesan','logout berhasil');
            
        redirect('auth');
    }

}
