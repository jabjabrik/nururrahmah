<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Galeri';
		$data['data_result'] = $this->base_model->get_all('galeri');
		$this->load->view('admin/galeri/index', $data);
	}

	public function insert()
	{
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['foto'] = upload_file('foto');
		$this->base_model->insert('galeri', $data);
		redirect('galeri');
	}

	public function edit()
	{
		$id_galeri = trim($this->input->post('id_galeri', true));

		$foto = $this->base_model->get_one_data_by('galeri', 'id_galeri', $id_galeri)->foto;

		unlink("./uploads/$foto");
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['foto'] = upload_file('foto');

		$this->base_model->update('galeri', $data, $id_galeri);
		redirect('galeri');
	}


	public function delete($id_galeri = null)
	{
		if (is_null($id_galeri)) redirect('galeri');

		$foto = $this->base_model->get_one_data_by('galeri', 'id_galeri', $id_galeri)->foto;
		unlink("./uploads/$foto");

		$this->base_model->delete('galeri', $id_galeri);
		redirect('galeri');
	}
}
