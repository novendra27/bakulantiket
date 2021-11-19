<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jadwal_tiket extends CI_Controller {

	public function index()
	{
		$this->load->view('NewBiz\index.html');
		$this->load->view('NewBiz\inner-page.html');
		$this->load->view('NewBiz\portfolio-details.html');
	}
}
