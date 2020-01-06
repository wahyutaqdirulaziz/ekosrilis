<?php

class Model_sorum extends CI_Model {
    
   

    
    function get_cari($keyword){
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->like('nama_kamar',$keyword);
        $this->db->or_like('slug',$keyword);
        $this->db->or_like('keterangan',$keyword);
        $this->db->or_like('slug',$keyword);
      
        return $this->db->get()->result();
    }

    
}


?>