<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

    private $folder = "suplier/";
    private $template = "template-admin/";
    private $menu = "suplier";

    public function __construct(){
        parent::__construct();

        //model
        $this->load-> model ('M_suplier');

        //ceklogin
        Cekadmin();
    }
        

    public function index(){

        $q = $this->M_suplier->GetAll();

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

        $q = $this->M_suplier->GetAll();

        $data = array(
            "menu"      => $this->menu,
            "submenu"   => 'create',
        
        );

        $this->load->view($this->template.'head',$data);
        $this->load->view($this->template.'sidebar',$data);
        $this->load->view($this->template.'header',$data);

        
        $this->load->view($this->folder.'create', $data);

        $this->load->view($this->template.'footer',$data);
        
    }

    public function save(){

           
        $data = array(
            'id_supl'    =>NULL,
            'nama_sup'  =>$this->input->post('nama_sup'),
            'telp_supl' =>$this->input->post('telp_supl'),
            'instansi' =>$this->input->post('instansi'),
            'alamat' =>$this->input->post('alamat'),
            'status' =>$this->input->post('status')
        );
            $this->M_suplier->insert($data);
            
            redirect('suplier','refresh');
    }


    public function delete()
    {
        
        $id = $this->uri->segment(3);
        
        $this->M_suplier->delete($id);
        
        redirect('suplier','refresh');
        
        
    }
    public function edit(){
        
        $id = $this->uri->segment(3);
        
        $data = array(
            "menu"   => $this->menu,
            "submenu"    => 'edit',
            "data"  => $this->M_suplier->GetByid($id)

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
            'nama_sup'  =>$this->input->post('nama_sup'),
            'telp_supl' =>$this->input->post('telp_supl'),
            'instansi' =>$this->input->post('instansi'),
            'alamat' =>$this->input->post('alamat'),
            'status' =>$this->input->post('status')
        );
            
        $this->M_suplier->update($id, $data);
        
        redirect('suplier','refresh');
    }

}

/* End of file suplier.php */
