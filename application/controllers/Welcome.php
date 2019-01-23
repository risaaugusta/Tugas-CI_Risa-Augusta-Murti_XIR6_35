<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($nama,$gender)
	{
		$data['nama_lengkap']=$nama;
		$data['jenis_kelamin']=$gender;
		$this->load->view('indext', $data);
	}

	// public function dashboard($nama,$gender)
	// {
	// 	$data['nama_lengkap']=$nama;
	// 	$data['jenis_kelamin']=$gender;
	// 	$this->load->view('beranda', $data);
	// }

	public function profil()
	{
		$this->load->view('agent-single');
	}

	public function utama()
	{
		$this->load->view('utama');
	}

	public function event()
	{
		$this->load->view('event');
	}

	public function gallery()
	{
		$this->load->view('gallery');
	}

	public function contact()
	{
		$this->load->view('contact3');
	}

	
}
