<?php

class Model_sorum extends CI_Model {
    
    public function tampil_data(){
        return $this->db->get('tb_lengkap');

    }
    
    public function tambah_kos($data,$table){
        return $this->db->insert($table,$data);
    }
    public function edit($where,$table){
        return $this->db->get_where($table,$where);

        

    }
    public function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);

    }
    public function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
        
    }
    public function Cek_kos($id_kos){
        $result = $this->db->where('id_kos', $id_kos)->get('tb_lengkap');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
    function data($number,$offset){
		return $query = $this->db->get('tb_lengkap',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('tb_lengkap')->num_rows();
    }
    function get_cari($keyword){
        $this->db->select('*');
        $this->db->from('tb_lengkap');
        $this->db->like('nama_kos',$keyword);
        $this->db->or_like('alamat',$keyword);
        $this->db->or_like('katagori',$keyword);
        $this->db->or_like('keterangan',$keyword);
        $this->db->or_like('harga',$keyword);
        $this->db->or_like('stok',$keyword);
        $this->db->or_like('gambar',$keyword);
        $this->db->or_like('kampus',$keyword);
        return $this->db->get()->result();
    }

    
}


?>