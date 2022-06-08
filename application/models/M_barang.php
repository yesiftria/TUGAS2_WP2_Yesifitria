<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

    private $table = 'barang';
    private $pk ='id_barang';

    public function GetAll(){
        return $this->db->get($this->table);
    }

    public function insert($data){

        return $this->db->insert($this->table,$data);
    }

    public function delete($id)
    {
        $this->db->where($this->pk, $id);
        return $this->db->delete($this->table);
    }
    public function GetByid($id)
    {
        $this->db->where($this->pk, $id);
        return $this->db->get($this->table)->row_array();
    }
    public function update($id, $data){
        $this->db->where($this->pk, $id);
        return $this->db->update($this->table,$data);
    }
}

/* End of file M_barang.php */
