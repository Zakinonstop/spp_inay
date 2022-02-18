<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_tamu extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		// $this->load->model('m_data_transaksi');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data = [
			'title' => 'Dashboard',
			'isi' => 'tamu/dashboard_tamu/index',
			
		];

		$this->load->view('master_tamu/index', $data);
	}
}
