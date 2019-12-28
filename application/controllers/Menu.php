<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		cek_login();
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();       
		$data['menu']= $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu','Menu','required');
		
		if($this->form_validation->run()== false){

			$this->load->view('adminbaru/menu/template/header',$data);
			$this->load->view('adminbaru/menu/template/sidebar',$data);
			$this->load->view('admin/Menu', $data);
			$this->load->view('adminbaru/menu/template/footer');


		}else{
			$this->db->insert('user_menu',['menu'=> $this->input->post('menu')]);
			$this->session->set_flashdata('massage','<div class="alert alert-info" role="alert">
            akun belum terdaftar !
          </div>');
          redirect('Menu');
          
		}

		
        
	}
}
