<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel');
		if ($this->session->userdata('user') !== 'isAdmin') {
			$this->session->set_flashdata('success','Failed Login');
			redirect('LoginController');
		}
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

	public function pemesanan_putData()
	{
		$query = $this->MyModel->pemesanan_put();
		if ($query == 1) {
			$this->session->set_flashdata('success','Success Update Data');
			redirect('PemesananController');
		} else {
			$this->session->set_flashdata('success','Failed Update Data');
			redirect('PemesananController');
		}
	}

	public function pemesanan_show($id)
	{
		$data['pemesanan'] = $this->MyModel->pemesanan_get_id($id);
		$this->load->view('template/header');
		$this->load->view('admin/show_pemesanan',$data);
		$this->load->view('template/footer');
	}

	public function pemesanan_delete($id)
	{
		$query = $this->MyModel->pemesanan_delete($id);
		if ($query == 1) {
			$this->session->set_flashdata('success','Success Remove Data');
			redirect('PemesananController');
		} else {
			$this->session->set_flashdata('success','Failed Remove Data');
			redirect('PemesananController');
		}
	}

	public function pemesanan_cetak()
	{
		$data['pemesanan'] = $this->MyModel->pemesanan_get();
		$data['nomer'] = 1;
		$this->load->view('admin/cetak_pemesanan',$data);
	}

	

}
