<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function index()
	{
		redirect('profil/beranda', 'refresh');
	}

	public function beranda()
	{
		$data['title'] = 'Beranda';
		$this->load->view('profil/beranda', $data);
	}

	public function tentang()
	{
		$data['title'] = 'Tentang';
		$this->load->view('profil/tentang', $data);
	}

	public function visimisi()
	{
		$data['title'] = 'Visi & Misi';
		$this->load->view('profil/visimisi', $data);
	}

	public function galeri()
	{
		$data['title'] = 'Galeri';
		$this->load->view('profil/galeri', $data);
	}

	public function alamat()
	{
		$data['title'] = 'Alamat';
		$this->load->view('profil/alamat', $data);
	}
}
