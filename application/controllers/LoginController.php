<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel');
	}

	public function index()
	{
		$this->load->view('Login');
	}

	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->MyModel->login_admin($username,$password);
		if ($query == 1) {
			$this->session->set_userdata([
				'user' => 'isAdmin' 
			]);
			redirect('DasboardController');
		} else {
			$this->session->set_flashdata('success','Failed Login');
			redirect('LoginController');
		}
	}
}
