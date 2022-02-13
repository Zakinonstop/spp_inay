<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data = [
			'title' => 'Login',
			'isi' => 'login/index',
			// // 'login' => $login,
			// 'login' => $this->m_login->get_all_data(),
			// 'total_pemasukan' => $this->m_login->total_pemasukan(),
			// 'jumlah_pemasukan' => $this->m_login->jumlah_pemasukan(),
			// 'jumlah_pengeluaran' => $this->m_login->jumlah_pengeluaran(),
			// // 'total_pengeluaran' => $this->m_login->total_pengeluaran(),
			// 'start' => $this->uri->segment(3),
			// // 'pagination' => $pagination_link,
			// 'jumlah_data' => $this->m_login->count_search_data(),
		];

		return $this->load->view('login/index', $data);
	}

	public function login()
	{
		// cek inputan di database
		$cek_login = $this->m_login->cek_login();

		foreach ($cek_login->result() as $cl) {
			$username = $cl->username;
			$email = $cl->email;
		};

		$data = [
			'username' => $username,
			'email' => $email,
		];

		if ($cek_login->num_rows() > 0) {
			$this->session->set_userdata($data);
			redirect('dashboard');
		}else {
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session_destroy;
		redirect('');
	}
}
