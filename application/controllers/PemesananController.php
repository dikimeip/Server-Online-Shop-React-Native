<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel');

	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('admin/pemesanan');
		$this->load->view('template/footer');
	}

	public function pemesanan_get()
	{
		# code...
	}

}
