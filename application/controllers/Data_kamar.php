<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kamar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data_kamar');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/spp_inay/data_kamar/index/';
		$config['total_rows'] = $this->m_data_kamar->count_search_data();
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
			// $data_kamar = $this->m_data_kamar->get_search_data($config['per_page'], $config['start']);
		// } else {
		$data_kamar = $this->m_data_kamar->get_all_data($config['per_page'], $config['start']);
		// }

		$data = [
			'title' => 'Data Kamar',
			'isi' => 'data_kamar/index',
			'data_kamar' => $data_kamar,
			// 'data_kamar' => $this->m_data_kamar->get_all_data(),
			'start' => $this->uri->segment(3),
			'pagination' => $pagination_link,
			'jumlah_data' => $this->m_data_kamar->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Data kamar',
			'isi' => 'data_kamar/add',
			'data_kamar' => $this->m_data_kamar->get_kamar(),
		];

		return $this->load->view('master/index', $data);
	}

	public function add_save()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('data_kamar/add', $data);
		} else {
			$data = [
				'nama_kamar' => $this->input->post('nama'),
			];

			$this->m_data_kamar->save($data);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('data_kamar', $data);
		}
	}

	public function edit_save($id)
	{
		$data = [
			'nama_kamar' => $this->input->post('nama'),
		];

		$edit = $this->m_data_kamar->update($data, $id);


		$data = $this->session->set_flashdata('message', 'diedit');

		redirect('data_kamar');
	}

	public function hapus($id)
	{
		$this->m_data_kamar->delete($id);
		$data = $this->session->set_flashdata('message', 'dihapus');
		redirect('data_kamar', $data);
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data kamar ',
			'isi' => 'data_kamar/edit',
			'data' => $this->m_data_kamar->get_data($id),
		];
		// var_dump($data['data']->nama);
		// die;
		return $this->load->view('master/index', $data);
	}

	public function detail($id)
	{
		$data = [
			'title' => 'Detail kamar ',
			'isi' => 'data_kamar/detail',
			'data' => $this->m_data_kamar->get_data_by_id($id),
			'jumlah_anggota' => $this->m_data_kamar->get_jumlah_anggota_by_id($id),
			'nama_anggota' => $this->m_data_kamar->get_nama_anggota_by_id($id),
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
