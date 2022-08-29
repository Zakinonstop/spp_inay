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
		$this->load->model('m_data_transaksi');
		if(isset($_SESSION['username'])) {
        
        }else{
            redirect('start');
        }
	}

	public function index()
	{
		$data = [
			'title' => 'Grafik Jurnal Umum',
			'isi' => 'grafik/index',
			'total_pemasukan' => $this->m_data_transaksi->total_pemasukan(),
			'jurnal_umum' => $this->m_jurnal_umum->get_all_data(),
			'jumlah_pemasukan' => $this->m_jurnal_umum->jumlah_pemasukan(),
			'jumlah_pengeluaran' => $this->m_jurnal_umum->jumlah_pengeluaran(),
			'jumlah_data' => $this->m_jurnal_umum->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}
}