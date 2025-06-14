<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
	protected $informasi = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		$this->informasi = $this->base_model->get_all("informasi")[0];
	}

	public function index()
	{
		redirect('profil/beranda', 'refresh');
	}

	public function beranda()
	{
		$data['title'] = 'Beranda';
		$data["informasi"] = $this->informasi;
		$this->load->view('profil/beranda', $data);
	}

	public function tentang()
	{
		$data['title'] = 'Tentang';
		$data["informasi"] = $this->informasi;
		$this->load->view('profil/tentang', $data);
	}

	public function visimisi()
	{
		$data['title'] = 'Visi & Misi';
		$data["informasi"] = $this->informasi;
		$this->load->view('profil/visimisi', $data);
	}

	public function galeri()
	{
		$data['title'] = 'Galeri';
		$data["galeri"] =  $this->base_model->get_all("galeri");
		$data["informasi"] = $this->informasi;
		$this->load->view('profil/galeri', $data);
	}

	public function alamat()
	{
		$data['title'] = 'Alamat';
		$data["informasi"] = $this->informasi;
		$this->load->view('profil/alamat', $data);
	}

	public function login()
	{
		$data['title'] = 'Login';
		$this->load->view('profil/login', $data);
	}
}
