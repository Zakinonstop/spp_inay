<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_santri extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login_santri');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data = [
			'title' => 'Login',
			'isi' => 'login_santri/index',
			
		];

		return $this->load->view('login_santri/index', $data);
	}

	public function login()
	{
		redirect('dashboard_santri');
		// cek inputan 
		// $data = [
			
		// 	'nis' => $this->input->post('nis'),
		// 	'status' => 'login',
		// ];

		// // cek inputan di database
		// $cek_login = $this->m_login_santri->cek_login();

		// if ($cek_login > 0) {
		// 	$this->session->set_userdata($data);
		// 	redirect('dashboard_santri');
		// }else {
		// 	redirect('login_santri');
		// }
	}

	public function logout()
	{
		$this->session_destroy;
		redirect('login');
	}
}
