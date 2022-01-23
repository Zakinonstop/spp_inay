<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('m_history_transaksi');
		// $this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('grafik');
	}
}