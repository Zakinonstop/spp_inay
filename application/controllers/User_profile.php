<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_history_transaksi');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/spp_inay/history_transaksi/index/';
		$config['total_rows'] = $this->m_history_transaksi->count_search_data();
		$config['per_page'] = 10;
		$config['start'] = $this->uri->segment(3);
		// $config['use_page_numbers'] = true;
		$config["full_tag_open"] = ' <nav><ul class="pagination justify-content-end">';
		$config["full_tag_close"] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config["first_tag_open"] = '<li class="page-item">';
		$config["first_tag_close"] = '</li>';

		$config['last_link'] = 'Last';
		$config["last_tag_open"] = '<li class="page-item">';
		$config["last_tag_close"] = '</li>';

		$config['prev_link'] = '&laquo';
		$config["prev_tag_open"] = '<li class="page-item">';
		$config["prev_tag_close"] = '</li>';

		$config['next_link'] = '&raquo;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';

		$config["cur_tag_open"] = "<li class='page-item active'><a class='page-link' href='#'>";
		$config["cur_tag_close"] = "</a></li>";

		$config["num_tag_open"] = "<li class='page-item'>";
		$config["num_tag_close"] = "</li>";

		$config["attributes"] = array('class' => 'page-link');

		$config["num_links"] = 1;

		$this->pagination->initialize($config);

		$pagination_link = $this->pagination->create_links();

		$history_transaksi = $this->m_history_transaksi->get_search_data($config['per_page'], $config['start']);
		
		$data = [
			'title' => 'History transaksi',
			'isi' => 'history_transaksi/index',
			'history_transaksi' => $history_transaksi,
			// 'history_transaksi' => $this->m_history_transaksi->get_all_data(),
			'start' => $this->uri->segment(3),
			'pagination' => $pagination_link,
			'jumlah_data' => $this->m_history_transaksi->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}

	// public function add($id)
	// {
	// 	$data = [
	// 		'title' => 'Tambah Data Transaksi',
	// 		'isi' => 'history_transaksi/add',
	// 		'data_tr_santri' => $this->m_history_transaksi->get_tr_santri($id),
	// 		'data_tr_bulan' => $this->m_history_transaksi->get_tr_bulan(),
	// 	];

	// 	return $this->load->view('master/index', $data);
	// }

	public function add($id)
	{
		$data = [
			'title' => 'Tambah Data Transaksi',
			'isi' => 'history_transaksi/add',
			'data_tr_santri' => $this->m_history_transaksi->get_tr_santri($id),
			'data_tr_bulan' => $this->m_history_transaksi->get_tr_bulan(),
		];


		return $this->load->view('master/index', $data);
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data Transaksi',
			'isi' => 'history_transaksi/edit',
			'data_tr_santri' => $this->m_history_transaksi->get_tr_santri($id),
			'data_tr_bulan' => $this->m_history_transaksi->get_tr_bulan(),
		];


		return $this->load->view('master/index', $data);
	}

	public function add_save($id)
	{

		$this->form_validation->set_rules('jumlah_bayar', 'Jumlah_bayar', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('history_transaksi/add', $data);
		} else {
			$data = [
				'jumlah_bayar' => $this->input->post('jumlah_bayar'),
			];

			$this->m_history_transaksi->save($data, $id);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('history_transaksi', $data);
		}
	}
	public function edit_save($id)
	{
		$bayar = $this->input->post('sudah_bayar');

		$this->form_validation->set_rules('jumlah_bayar', 'Jumlah_bayar', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('history_transaksi/add', $data);
		} else {
			$data = [
				'jumlah_bayar' => $this->input->post('jumlah_bayar') + $bayar,
			];

			$this->m_history_transaksi->edit_save($data, $id);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('history_transaksi', $data);
		}
	}

	public function next($id)
	{
		$this->m_history_transaksi->next($id);
		$data = $this->session->set_flashdata('message', 'disimpan');
		redirect('history_transaksi', $data);
	}

	public function kembalian($id)
	{
		$this->m_history_transaksi->kembalian($id);
		$data = $this->session->set_flashdata('message', 'disimpan');
		redirect('history_transaksi', $data);
	}



	public function hapus($id)
	{
		$this->m_history_transaksi->delete($id);
		$data = $this->session->set_flashdata('message', 'dihapus');
		redirect('history_transaksi', $data);
	}



	public function detail($id)
	{
		$data = [
			'title' => 'Detail transaksi ',
			'isi' => 'history_transaksi/detail',
			'data' => $this->m_history_transaksi->get_data_by_id($id),
		];
		// var_dump($data['data']->nama);
		// die;
		return $this->load->view('master/index', $data);
	}

	public function hilangflasdata()
	{
		$this->session->set_flashdata('message', '');
	}
}
