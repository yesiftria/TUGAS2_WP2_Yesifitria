<?php

    function Cekadmin()
    {
        
        $Ci =& get_instance();
        
        if($Ci->session->userdata('Cekadmin') <> 1){
            
            $Ci->session->set_flashdata('pesan','login terlebih dahulu');
            redirect('auth');

        }
        
  }

?>