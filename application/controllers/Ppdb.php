<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Pendaftaran PPDB';
		$data['data_result'] = $this->base_model->get_all('siswa');
		$this->load->view('admin/ppdb/index', $data);
	}

	public function pengumuman()
	{
		$data['title'] = 'Pengumuman PPDB';
		$this->db->where_in('status_diterima', ['diterima', 'tidak diterima']);
		$data['data_result'] = $this->db->get('siswa')->result();
		$this->load->view('admin/ppdb/pengumuman', $data);
	}

	public function penerimaan($status_diterima, $id_siswa)
	{
		$data = ['status_diterima' => $status_diterima == 'diterima' ? 'diterima' : 'tidak diterima'];
		$this->base_model->update('siswa', $data, $id_siswa);
		redirect('ppdb');
	}
}
