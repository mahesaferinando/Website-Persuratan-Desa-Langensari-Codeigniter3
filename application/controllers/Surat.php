<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Pengajuan Surat';
		$this->load->view('templates/topbar');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('surat/index');
	}

	public function sktmRS()
	{
		$data['title'] = 'Pengajuan Surat - SKTM Rumah Sakit';
		$this->load->view('templates/topbar');
		$this->load->view('templates/header', $data);
		$this->load->view('surat/sktmRS');
		$this->load->view('templates/footer');
	}

	public function sktmSekolah()
	{
		$data['title'] = 'Pengajuan Surat - SKTM Sekolah';
		$this->load->view('templates/topbar');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('surat/sktmSekolah');
	}

	public function sKelahiran()
	{
		$data['title'] = 'Pengajuan Surat - Surat Keterangan Pernyataan';
		$this->load->view('templates/topbar');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('surat/sKelahiran');
	}

	public function sKematian()
	{
		$data['title'] = 'Pengajuan Surat - Surat Kematian';
		$this->load->view('templates/topbar');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('surat/sKematian');
	}

	public function sRekomendasiKades()
	{
		$data['title'] = 'Pengajuan Surat - Surat Rekomendasi Kades';
		$this->load->view('templates/topbar');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('surat/sRekomendasiKades');
	}
}
