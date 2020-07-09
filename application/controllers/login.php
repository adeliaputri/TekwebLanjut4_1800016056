<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}

	public function ceklogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('model_login');
		$this->model_login->ambillogin($username,$password);
	}
	
}






