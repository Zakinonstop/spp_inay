<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Start extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		// $this->load->model('m_start');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data = [
			'title' => 'start',
			'isi' => 'start/index',
			
		];

		return $this->load->view('start/index', $data);
	}

	public function start()
	{
		// cek inputan 
		$data = [
			
			'username' => $this->input->post('username'),
			'status' => 'start',
		];

		// cek inputan di database
		$cek_start = $this->m_start->cek_start();

		if ($cek_start > 0) {
			$this->session->set_userdata($data);
			redirect('dashboard');
		}else {
			redirect('start');
		}
	}

	public function logout()
	{
		$this->session_destroy;
		redirect('start');
	}
}
