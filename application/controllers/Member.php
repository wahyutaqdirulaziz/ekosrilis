<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Member extends CI_Controller{
    public function __construct()
	{
		parent::__construct();

		cek_login();
	}

    public function index(){
        $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();       
        $this->load->view('adminbaru/menu/template/header',$data);
        $this->load->view('adminbaru/menu/template/sidebar',$data);
		$this->load->view('member/Member', $data);
		$this->load->view('adminbaru/menu/template/footer');
	}
	public function edit(){
		
		
		$data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();       
		$this->form_validation->set_rules('name', 'Full name','required|trim');
		if($this->form_validation->run()== false){
			$this->load->view('adminbaru/menu/template/header',$data);
			$this->load->view('adminbaru/menu/template/sidebar',$data);
		$this->load->view('member/editprofil',$data);
		$this->load->view('adminbaru/menu/template/footer');
		}else{
			$nama = $this->input->post('name');
			$email    = $this->input->post('email');
			$upload_gambar = $_FILES['gambar']['name'];
			if($upload_gambar){
				$config['upload_path']= './uploads/profil';
					$config['allowed_types']= 'jpg|jpeg|png|gif';
					
					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')){
						$new_gambar= $this->upload->data('file_name');
						$this->db->set('gambar_user',$new_gambar);
					
					}else{
						echo 'gambar tidak di upload';
					}


			}
			
			$this->db->set('nama',$nama);
			$this->db->where('email', $email);
			$this->db->update('user');

			redirect('Member');
		
		}
		


	}
	
}



?>