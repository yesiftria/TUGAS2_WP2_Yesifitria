<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    private $folder = "barang/";
    private $template = "template-admin/";
    private $menu = "barang";

    public function __construct(){
        parent::__construct();

        //model
        $this->load-> model ('M_barang');

        //ceklogin
        Cekadmin();

        
    }
        

    public function index(){

        $q = $this->M_barang->GetAll();

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

        $q = $this->M_barang->GetAll();

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
            'nama_brg' =>$this->input->post('nama_brg'),
            'harga_pokok' =>$this->input->post('harga_pokok'),
            'harga_jual' =>$this->input->post('harga_jual')

        );
        
        $this->M_barang->insert($data);
        
        redirect('barang','refresh');
    }

    public function delete(){
        
        $id = $this->uri->segment(3);
        
        $this->M_barang->delete($id);
        
        redirect('barang','refresh');
        
    }
    public function edit(){
        
        $id = $this->uri->segment(3);
        
        $data = array(
            "menu"   => $this->menu,
            "submenu"    => 'edit',
            "data"  => $this->M_barang->GetByid($id)
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
            'nama_brg' =>$this->input->post('nama_brg'),
            'harga_pokok' =>$this->input->post('harga_pokok'),
            'harga_jual' =>$this->input->post('harga_jual')
        );
        
        $this->M_barang->update($id, $data);
        
        redirect('barang','refresh');
    }
}

/* End of file Controllername.php */
