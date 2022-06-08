<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    private $folder = "home/";
    private $template = "template-admin/";
    private $menu = "Home";

    
    public function __construct()
    {
        parent::__construct();
        
        //ceklogin
        Cekadmin();
        
        
    }
    

    public function index(){

        $data = array(
            "menu"   =>  $this->menu,
            "submenu"    => 'read'
        );

        $this->load->view($this->template.'head',$data);
        $this->load->view($this->template.'sidebar',$data);
        $this->load->view($this->template.'header',$data);

        
        $this->load->view($this->folder.'read', $data);

        $this->load->view($this->template.'footer',$data);
        
        
    }

}

/* End of file Home.php */
