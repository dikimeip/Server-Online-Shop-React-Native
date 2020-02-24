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
		$data['pemesanan'] = $this->MyModel->pemesanan_get();
		$data['nomer'] = 1;
		$this->load->view('template/header');
		$this->load->view('admin/pemesanan',$data);
		$this->load->view('template/footer');
	}

	public function pemesanan_put($id)
	{
		$data['pemesanan'] = $this->MyModel->pemesanan_get_id($id);
		$this->load->view('template/header');
		$this->load->view('admin/ubah_pemesanan',$data);
		$this->load->view('template/footer');
	}

	

}
