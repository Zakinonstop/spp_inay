<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/spp_inay/admin/index/';
		$config['total_rows'] = $this->m_admin->count_search_data();
		$config['per_page'] = 5;
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
			// $admin = $this->m_admin->get_search_data($config['per_page'], $config['start']);
		// } else {
			$admin = $this->m_admin->get_all_data($config['per_page'], $config['start']);
		// }

		$data = [
			'title' => 'Data Administrator',
			'isi' => 'admin/index',
			'admin' => $admin,
			// 'admin' => $this->m_admin->get_all_data(),
			'start' => $this->uri->segment(3),
			'pagination' => $pagination_link,
			'jumlah_data' => $this->m_admin->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Data kamar',
			'isi' => 'admin/add',
			'admin' => $this->m_admin->get_kamar(),
		];

		return $this->load->view('master/index', $data);
	}

	public function add_save()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('admin/add', $data);
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
			];

			$this->m_admin->save($data);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('admin', $data);
		}
	}

	public function edit_save($id)
	{
		$data = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
		];

		$this->m_admin->update($data, $id);


		$data = $this->session->set_flashdata('message', 'diedit');

		redirect('admin');
	}

	public function hapus($id)
	{
		$this->m_admin->delete($id);
		$data = $this->session->set_flashdata('message', 'dihapus');
		redirect('admin', $data);
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data Administrator ',
			'isi' => 'admin/edit',
			'data' => $this->m_admin->get_data($id),
		];
		// var_dump($data['data']->nama);
		// die;
		return $this->load->view('master/index', $data);
	}

	public function detail($id)
	{
		$data = [
			'title' => 'Detail Administrator ',
			'isi' => 'admin/detail',
			'data' => $this->m_admin->get_data_by_id($id),
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
