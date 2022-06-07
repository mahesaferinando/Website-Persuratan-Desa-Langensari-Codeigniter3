<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Tentang - Website Resmi Desa Langensari';
		$this->load->view('templates/topbar');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('tentang/index');
	}
}