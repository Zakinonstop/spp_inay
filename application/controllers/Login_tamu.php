<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_tamu extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login_santri');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$data = [
			'title' => 'Login',
			'isi' => 'login_tamu/index',
			
		];
		
		redirect('dashboard_tamu');
		// return $this->load->view('login_tamu/index', $data);
	}

	public function login()
	{
		// redirect('dashboard_santri');
		// cek inputan 
		// $data = [
			
		// 	'nis' => $this->input->post('nis'),
		// 	'status' => 'login',
		// ];

		// cek inputan di database
		$cek_login = $this->m_login_santri->cek_login()->num_rows();
		$session_santri = $this->m_login_santri->cek_login()->result();
		foreach ($session_santri as $key => $ses) {
			$id = $ses->id;
			$nama = $ses->nama;
			$nis = $ses->nis;
		}

		$data = [
			'id' => $id,
			'nama' => $nama,
			'nis' => $nis,
			'status' => 'login',
		];

		if ($cek_login > 0) {

			$this->session->set_userdata($data);
			// echo 'ada';
			// echo $nama;
			redirect('dashboard_santri');
		}else {
			redirect('login_santri');
		}
	}

	public function logout()
	{
	    $this->session->sess_destroy();
		// $this->session_destroy;
		redirect('');
	}
}
