<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurnal_umum extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jurnal_umum');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/spp_inay/jurnal_umum/index/';
		$config['total_rows'] = $this->m_jurnal_umum->count_search_data();
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

		// $config["num_links"] = 1;

		$this->pagination->initialize($config);

		$pagination_link = $this->pagination->create_links();

		// if ($this->input->post('keyword')) {
			$jurnal_umum = $this->m_jurnal_umum->get_search_data($config['per_page'], $config['start']);
		// } else {
			// $jurnal_umum = $this->m_jurnal_umum->get_all_data($config['per_page'], $config['start']);
		// }

		$data = [
			'title' => 'Jurnal Umum',
			'isi' => 'jurnal_umum/index',
			'jurnal_umum' => $jurnal_umum,
			// 'jurnal_umum' => $this->m_jurnal_umum->get_all_data(),
			'jumlah_pemasukan' => $this->m_jurnal_umum->jumlah_pemasukan(),
			'start' => $this->uri->segment(3),
			'pagination' => $pagination_link,
			'jumlah_data' => $this->m_jurnal_umum->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}

	// public function add($id)
	// {
	// 	$data = [
	// 		'title' => 'Tambah Jurnal Umum',
	// 		'isi' => 'jurnal_umum/add',
	// 		'data_jurnal_umum' => $this->m_jurnal_umum->get_tr_santri($id),
	// 		'data_tr_bulan' => $this->m_jurnal_umum->get_tr_bulan(),
	// 	];

	// 	return $this->load->view('master/index', $data);
	// }

	public function add()
	{
		$data = [
			'title' => 'Tambah Jurnal Umum',
			'isi' => 'jurnal_umum/add',
			// 'data_jurnal_umum' => $this->m_jurnal_umum->get_tr_santri($id),
			// 'data_tr_bulan' => $this->m_jurnal_umum->get_tr_bulan(),
		];


		return $this->load->view('master/index', $data);
	}

	public function add_pengeluaran()
	{
		$data = [
			'title' => 'Tambah Jurnal Umum',
			'isi' => 'jurnal_umum/add_pengeluaran',
			// 'data_jurnal_umum' => $this->m_jurnal_umum->get_tr_santri($id),
			// 'data_tr_bulan' => $this->m_jurnal_umum->get_tr_bulan(),
		];


		return $this->load->view('master/index', $data);
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Jurnal Umum',
			'isi' => 'jurnal_umum/edit',
			'data_jurnal_umum' => $this->m_jurnal_umum->get_jurnal_umum($id),
			// 'data_tr_bulan' => $this->m_jurnal_umum->get_tr_bulan(),
		];


		return $this->load->view('master/index', $data);
	}

	public function add_save()
	{

		$this->form_validation->set_rules('pemasukan', 'Nominal Pemasukan', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('tgl_jurnal', 'Tanggal', 'required');
		// $pemasukan = $this->input->post('pemasukan');
		
		// $saldo_terakhir =$this->m_jurnal_umum->get_last_saldo();
		// $saldo_sekarang = $saldo_terakhir + $pemasukan ;

		// echo $saldo_terakhir;
		// die();

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('jurnal_umum/add', $data);
		} else {
			$data = [
				'pemasukan' => $this->input->post('pemasukan'),
				'keterangan' => $this->input->post('keterangan'),
				'tgl_jurnal' => $this->input->post('tgl_jurnal'),
				// 'saldo' => $saldo_sekarang,
				'created_by' => $this->session->userdata['username'],
			];

			$this->m_jurnal_umum->save($data);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('jurnal_umum', $data);
		}
	}
	
	public function add_save_pengeluaran()
	{

		$this->form_validation->set_rules('pemasukan', 'Nominal Pemasukan', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('tgl_jurnal', 'Tanggal', 'required');
		// $saldo_terakhir =$this->m_jurnal_umum->get_last_saldo();
		// $pengeluaran = $this->input->post('pengeluaran');
		// $saldo_sekarang = $saldo_terakhir - $pengeluaran ;

		// echo $saldo_terakhir;
		// die();

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('jurnal_umum/add_pengeluaran', $data);
		} else {
			$data = [
				'pengeluaran' => $this->input->post('pengeluaran'),
				'keterangan' => $this->input->post('keterangan'),
				'tgl_jurnal' => $this->input->post('tgl_jurnal'),
				// 'saldo' => $saldo_sekarang,
				'created_by' => $this->session->userdata['username'],
			];

			$this->m_jurnal_umum->save($data);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('jurnal_umum', $data);
		}
	}

	public function edit_save($id)
	{
		$this->form_validation->set_rules('pemasukan', 'Nominal Pemasukan', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('tgl_jurnal', 'Tanggal', 'required');
		// ambil max_id sebelum akhir
		// max_id akhir
		// $count_saldo = $this->db->query('SELECT id_jurnal_umum FROM tb_jurnal_umum')->num_rows();
		// echo $count_saldo;
		// die();
		// $saldo_sebelum_akhir = $this->m_jurnal_umum->saldo_sebelum_akhir();
		// echo $saldo_sebelum_akhir;
		// die();
		// $pemasukan = $this->input->post('pemasukan');
		// $pengeluaran = $this->input->post('pengeluaran');
		// if ($pemasukan) {
		// 	$saldo = $saldo_sebelum_akhir + $pemasukan;
		// }else {
		// 	$saldo = $saldo_sebelum_akhir - $pengeluaran;
			
		// };

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('jurnal_umum/edit/'.$id, $data);
		} else {
			$data = [
				'pemasukan' => $this->input->post('pemasukan'),
				'pengeluaran' => $this->input->post('pengeluaran'),
				'keterangan' => $this->input->post('keterangan'),
				'tgl_jurnal' => $this->input->post('tgl_jurnal'),
				// 'saldo' => $saldo,
			];

			$this->m_jurnal_umum->edit_save($data, $id);
			$data = $this->session->set_flashdata('message', 'diedit');
			redirect('jurnal_umum', $data);
		}
	}

	public function next($id)
	{
		$this->m_jurnal_umum->next($id);
		$data = $this->session->set_flashdata('message', 'disimpan');
		redirect('jurnal_umum', $data);
	}

	public function kembalian($id)
	{
		$this->m_jurnal_umum->kembalian($id);
		$data = $this->session->set_flashdata('message', 'disimpan');
		redirect('jurnal_umum', $data);
	}



	public function hapus($id)
	{
		$this->m_jurnal_umum->delete($id);
		$data = $this->session->set_flashdata('message', 'dihapus');
		redirect('jurnal_umum', $data);
	}



	public function detail($id)
	{
		$data = [
			'title' => 'Detail transaksi ',
			'isi' => 'jurnal_umum/detail',
			'data' => $this->m_jurnal_umum->get_data_by_id($id),
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
