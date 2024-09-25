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

	

		if ($cek_login > 0) {

            $data = [
			'id' => $id,
			'nama' => $nama,
			'nis' => $nis,
			'status' => 'login',
		    ];
		
			$this->session->set_userdata($data);
			// echo 'ada';
			// echo $nama;
			redirect('dashboard_santri');
		}else {
		   
			$data2 = $this->session->set_flashdata('message', 'NIS atau password salah !');
			
			redirect('login_santri', $data2);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
