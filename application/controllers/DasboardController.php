<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DasboardController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('user') !== 'isAdmin') {
			$this->session->set_flashdata('success','Failed Login');
			redirect('LoginController');
		}
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('admin/dasboard');
		$this->load->view('template/footer');
	}

}
