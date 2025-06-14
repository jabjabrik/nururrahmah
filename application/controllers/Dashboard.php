<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		authorize_user(['admin']);
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard/index', $data);
	}
}
