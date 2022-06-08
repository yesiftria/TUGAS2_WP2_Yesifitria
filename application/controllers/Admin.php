<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    private $folder = "admin/";
    private $template = "template-admin/";
    private $menu = "admin";

    public function __construct(){
        parent::__construct();

        //model
        $this->load-> model ('M_admin');

        //ceklogin
        Cekadmin();

    }
        

    public function index(){

        $q = $this->M_admin->GetAll();

        $data = array(
            "menu"   => $this->menu,
            "submenu"    => 'read',
            "data"  => $q
        );

        $this->load->view($this->template.'head',$data);
        $this->load->view($this->template.'sidebar',$data);
        $this->load->view($this->template.'header',$data);

        
        $this->load->view($this->folder.'read', $data);

        $this->load->view($this->template.'footer',$data);
        
    }

    public function create(){

        $q = $this->M_admin->GetAll();

        $data = array(
            "menu"   => $this->menu,
            "submenu"    => 'create',
        );

        $this->load->view($this->template.'head',$data);
        $this->load->view($this->template.'sidebar',$data);
        $this->load->view($this->template.'header',$data);

        
        $this->load->view($this->folder.'create', $data);

        $this->load->view($this->template.'footer',$data);
        
        
    }

    public function save(){
        

        $data = array(
            'username' =>$this->input->post('username'),
            'nama' =>$this->input->post('nama'),
            'password' =>$this->input->post('password')
        );
        
        $this->M_admin->insert($data);
        
        redirect('admin','refresh');
    }

    public function delete(){
        
        $id = $this->uri->segment(3);
        
        $this->M_admin->delete($id);
        
        redirect('admin','refresh');
        
    }
    public function edit(){
        
        $id = $this->uri->segment(3);
        
        $data = array(
            "menu"   => $this->menu,
            "submenu"    => 'edit',
            "data"  => $this->M_admin->GetByid($id)
        );

        $this->load->view($this->template.'head',$data);
        $this->load->view($this->template.'sidebar',$data);
        $this->load->view($this->template.'header',$data);

        
        $this->load->view($this->folder.'edit', $data);

        $this->load->view($this->template.'footer',$data);
        
    } 

    public function update(){

        $id = $this->uri->segment(3);
        
        $data = array(
            'nama' =>$this->input->post('nama'),
            'password' =>$this->input->post('password')
        );
        
        $this->M_admin->update($id, $data);
        
        redirect('admin','refresh');
    }
}

/* End of file admin.php */
