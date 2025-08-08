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

	public function pendaftaran()
	{
		$ppdb = $this->db->get('informasi')->row('ppdb');
		if ($ppdb == '0') redirect('profil');
		$data['title'] = 'Pendaftaran';
		$data["informasi"] = $this->informasi;
		$this->load->view('profil/pendaftaran', $data);
	}

	public function pendaftaran_insert()
	{
		$data = [
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nama_panggilan' => $this->input->post('nama_panggilan'),
			'nomor_induk_asal' => $this->input->post('nomor_induk_asal'),
			'nisn' => $this->input->post('nisn'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'anak_ke' => $this->input->post('anak_ke'),
			'status_anak' => $this->input->post('status_anak'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'nama_ra_tk_asal' => $this->input->post('nama_ra_tk_asal'),
			'alamat_ra_tk_asal' => $this->input->post('alamat_ra_tk_asal'),
			'nama_sd_mi_asal' => $this->input->post('nama_sd_mi_asal'),
			'alamat_sd_mi_asal' => $this->input->post('alamat_sd_mi_asal'),

			// Data orang tua
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'pendidikan_ortu' => $this->input->post('pendidikan_ortu'),
			'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
			'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),

			// Data wali
			'nama_ayah_wali' => $this->input->post('nama_ayah_wali'),
			'nama_ibu_wali' => $this->input->post('nama_ibu_wali'),
			'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'penghasilan_wali' => $this->input->post('penghasilan_wali'),

			'tahun_ajaran' => get_tahun_ajaran(),
			'status_diterima' => NULL,
			'tanggal_diterima' => NULL,
		];

		if ($_FILES['foto_3x4']['name']) {
			$data['foto_3x4'] = upload_file('foto_3x4');
		}

		if ($_FILES['akta_kelahiran']['name']) {
			$data['akta_kelahiran'] = upload_file('akta_kelahiran');
		}

		if ($_FILES['kartu_keluarga']['name']) {
			$data['kartu_keluarga'] = upload_file('kartu_keluarga');
		}
		if ($_FILES['ktp_ortu']['name']) {
			$data['ktp_ortu'] = upload_file('ktp_ortu');
		}



		$this->db->insert('siswa', $data);
		$this->session->set_flashdata('success', 'Pendaftaran berhasil!');
		redirect('profil/pendaftaran');
	}

	public function pengumuman()
	{
		$ppdb = $this->db->get('informasi')->row('ppdb');
		if ($ppdb == '0') redirect('profil');
		$data['title'] = 'Pengumuman';
		$data['pengumuman'] = $this->db->query("SELECT * FROM siswa WHERE status_diterima IS NOT NULL")->result();
		$data["informasi"] = $this->informasi;
		$this->load->view('profil/pengumuman', $data);
	}

	public function login()
	{
		$data['title'] = 'Login';
		$this->load->view('profil/login', $data);
	}
}
