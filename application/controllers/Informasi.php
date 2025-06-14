<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Informasi';
		$data['informasi_sekolah'] = $this->base_model->get_all('informasi')[0];
		$this->load->view('admin/informasi/index', $data);
	}

	public function edit()
	{
		$id_informasi = $this->input->post("id_informasi");
		$data = [
			"email" => $this->input->post("email"),
			"no_telepon" => $this->input->post("no_telepon"),
			"jumlah_siswa_ra" => $this->input->post("jumlah_siswa_ra"),
			"jumlah_siswa_mi" => $this->input->post("jumlah_siswa_mi"),
			"jumlah_guru" => $this->input->post("jumlah_guru"),
			"visi" => $this->input->post("visi"),
			"misi" => $this->input->post("misi"),
			"alamat" => $this->input->post("alamat"),
		];

		$this->base_model->update('informasi', $data, $id_informasi);
		redirect('informasi');
	}
}
