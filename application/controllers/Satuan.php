<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {
    private $folder = "satuan/";
    private $template = "template-admin/";
    private $menu = "satuan";

    public function __construct(){
        parent::__construct();

        //model
        $this->load-> model ('M_satuan');

        //ceklogin
        Cekadmin();


    }
        

    public function index(){

        $q = $this->M_satuan->GetAll();

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

        $q = $this->M_satuan->GetAll();

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
            'id_satuan' =>NULL,
            'satuan' =>$this->input->post('satuan'),
            'simbol' =>$this->input->post('simbol')
        );
        
        $this->M_satuan->insert($data);
        
        redirect('satuan','refresh');
    }

    public function delete(){
        
        $id = $this->uri->segment(3);
        
        $this->M_satuan->delete($id);
        
        redirect('satuan','refresh');
        
    }
    public function edit(){
        
        $id = $this->uri->segment(3);
        
        $data = array(
            "menu"   => $this->menu,
            "submenu"    => 'edit',
            "data"  => $this->M_satuan->GetByid($id)
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
            'satuan' =>$this->input->post('satuan'),
            'simbol' =>$this->input->post('simbol')
        );
        
        $this->M_satuan->update($id, $data);
        
        redirect('satuan','refresh');
    }
}

/* End of file Satuan.php */
