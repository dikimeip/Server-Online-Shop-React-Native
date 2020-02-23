<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DasboardController extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dasboard');
	}

}
