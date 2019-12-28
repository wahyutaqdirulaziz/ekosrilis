<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function __construct()
	{
		parent::__construct();

		cek_login();
	}
    public function index(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/Dashboard');
		$this->load->view('templates/footer');
    }
}


?>