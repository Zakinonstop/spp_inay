<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data = [
			'title' => 'Laporan Keuangan',
			'isi' => 'laporan/index',
			// 'admin' => $admin,
			'kamar' => $this->m_laporan->get_all_data(),

			'jumlah_data' => $this->m_laporan->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}

	public function cetak($id)
	{
		$data = [
			'data_santri' => $this->m_laporan->get_data_santri($id),
			'data_januari' => $this->m_laporan->get_januari($id),
			'data_februari' => $this->m_laporan->get_februari($id),
			'data_maret' => $this->m_laporan->get_maret($id),
			'data_april' => $this->m_laporan->get_april($id),
			'data_mei' => $this->m_laporan->get_mei($id),
			'data_juni' => $this->m_laporan->get_juni($id),
			'data_juli' => $this->m_laporan->get_juli($id),
			'data_agustus' => $this->m_laporan->get_agustus($id),
			'data_september' => $this->m_laporan->get_september($id),
			'data_oktober' => $this->m_laporan->get_oktober($id),
			'data_november' => $this->m_laporan->get_november($id),
			'data_desember' => $this->m_laporan->get_desember($id),
			'data_kamar' => $this->m_laporan->get_kamar($id),

		];
		$nama_kamar = $this->m_laporan->get_kamar($id);

		$this->load->view('print_pdf/cetak_laporan', $data);
	}

	public function hilangflasdata()
	{
		$this->session->set_flashdata('message', '');
	}
}
