<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {
    private $folder = "stok/";
    private $template = "template-admin/";
    private $menu = "stok";

    public function __construct(){
        parent::__construct();

        //model
        $this->load-> model ('M_stok');

        //ceklogin
        Cekadmin();

        
    }
        

    public function index(){

        $q = $this->M_stok->GetAll();

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

        $q = $this->M_stok->GetAll();

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

        $id = $this->uri->segment(3);

        $data = array(
            'id_barang' =>$this->input->post('id_barang'),
            'in_out' =>$this->input->post('in_out'),
            'qty' =>$this->input->post('qty'),
            'hrg_pokok' =>$this->input->post('hrg_pokok'),
            'hrg_jual' =>$this->input->post('hrg_jual'),
            'note' =>$this->input->post('note')


        );
        
        $this->M_stok->insert($data);
        
        redirect('stok','refresh');
    }

    public function delete(){
        
        $id = $this->uri->segment(3);
        
        $this->M_stok->delete($id);
        
        redirect('stok','refresh');
        
    }
    public function edit(){
        
        $id = $this->uri->segment(3);
        
        $data = array(
            "menu"   => $this->menu,
            "submenu"    => 'edit',
            "data"  => $this->M_stok->GetByid($id)
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
            'id_barang' =>$this->input->post('id_barang'),
            'in_out' =>$this->input->post('in_out'),
            'qty' =>$this->input->post('qty'),
            'hrg_pokok' =>$this->input->post('hrg_pokok'),
            'hrg_jual' =>$this->input->post('hrg_jual'),
            'note' =>$this->input->post('note')
        );
        
        $this->M_stok->update($id, $data);
        
        redirect('stok','refresh');
    }
}

/* End of file Controllername.php */
