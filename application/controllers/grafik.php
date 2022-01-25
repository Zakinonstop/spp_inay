<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('m_history_transaksi');
		// $this->load->library('form_validation');
		$this->load->model('m_jurnal_umum');
	}

	public function index()
	{
		$data = [
			'title' => 'Grafik Jurnal Umum',
			'isi' => 'grafik/index',
			'jurnal_umum' => $this->m_jurnal_umum->get_all_data(),
			'jumlah_pemasukan' => $this->m_jurnal_umum->jumlah_pemasukan(),
			'jumlah_pengeluaran' => $this->m_jurnal_umum->jumlah_pengeluaran(),
			'jumlah_data' => $this->m_jurnal_umum->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}
}