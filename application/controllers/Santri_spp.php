<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "third_party/dompdf/autoload.php";

use Dompdf\Dompdf;

class Santri_spp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_santri_spp');
		$this->load->library('form_validation');
			if(isset($_SESSION['nama'])) {
        
        }else{
            redirect('start');
        }
	}

	public function index()
	{
		// $this->load->library('pagination');

		// $config['base_url'] = 'http://localhost/spp_inay/input_transaksi/index/';
		// $config['total_rows'] = $this->m_santri_spp->count_search_data();
		// $config['per_page'] = 10;
		// $config['start'] = $this->uri->segment(3);
		// // $config['use_page_numbers'] = true;
		// $config["full_tag_open"] = ' <nav><ul class="pagination justify-content-end">';
		// $config["full_tag_close"] = '</ul></nav>';

		// $config['first_link'] = 'First';
		// $config["first_tag_open"] = '<li class="page-item">';
		// $config["first_tag_close"] = '</li>';

		// $config['last_link'] = 'Last';
		// $config["last_tag_open"] = '<li class="page-item">';
		// $config["last_tag_close"] = '</li>';

		// $config['prev_link'] = '&laquo';
		// $config["prev_tag_open"] = '<li class="page-item">';
		// $config["prev_tag_close"] = '</li>';

		// $config['next_link'] = '&raquo;';
		// $config["next_tag_open"] = '<li>';
		// $config["next_tag_close"] = '</li>';

		// $config["cur_tag_open"] = "<li class='page-item active'><a class='page-link' href='#'>";
		// $config["cur_tag_close"] = "</a></li>";

		// $config["num_tag_open"] = "<li class='page-item'>";
		// $config["num_tag_close"] = "</li>";

		// $config["attributes"] = array('class' => 'page-link');

		// // $config["num_links"] = 1;

		// $this->pagination->initialize($config);

		// $pagination_link = $this->pagination->create_links();

		// if ($this->input->post('keyword')) {
		// 	$input_transaksi = $this->m_santri_spp->get_search_data($config['per_page'], $config['start']);
		// } else {
		// 	$input_transaksi = $this->m_santri_spp->get_all_data($config['per_page'], $config['start']);
		// }

		$keyword = $this->uri->segment(2);
		$input_transaksi = $this->m_santri_spp->get_all_data($keyword);
		$idnya_santri = $this->input->post('id_data_santri');
		// $input_transaksi = $this->m_santri_spp->get_search_data($keyword);

		// if ($this->input->post('keyword')) {
		// 	$input_transaksi = $this->m_santri_spp->get_search_data(12, 13);
		// 	// $input_transaksi = $this->m_santri_spp->get_search_data($config['per_page'], $config['start']);
		// } else {
		// 	$input_transaksi = $this->m_santri_spp->get_all_data();
		// 	// $input_transaksi = $this->m_santri_spp->get_all_data($config['per_page'], $config['start']);
		// }

		$data = [
			'title' => 'Data transaksi',
			'isi' => 'input_transaksi/index',
			// 'input_transaksi' => $input_transaksi,
			'input_transaksi' => $this->m_santri_spp->get_all_data($idnya_santri),
			'start' => 0,
			// 'start' => $this->uri->segment(3),
			// 'pagination' => $pagination_link,
			'jumlah_data' => $this->m_santri_spp->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}
	public function cek()
	{
		// $this->load->library('pagination');

		// $config['base_url'] = 'http://localhost/spp_inay/input_transaksi/index/';
		// $config['total_rows'] = $this->m_santri_spp->count_search_data();
		// $config['per_page'] = 10;
		// $config['start'] = $this->uri->segment(3);
		// // $config['use_page_numbers'] = true;
		// $config["full_tag_open"] = ' <nav><ul class="pagination justify-content-end">';
		// $config["full_tag_close"] = '</ul></nav>';

		// $config['first_link'] = 'First';
		// $config["first_tag_open"] = '<li class="page-item">';
		// $config["first_tag_close"] = '</li>';

		// $config['last_link'] = 'Last';
		// $config["last_tag_open"] = '<li class="page-item">';
		// $config["last_tag_close"] = '</li>';

		// $config['prev_link'] = '&laquo';
		// $config["prev_tag_open"] = '<li class="page-item">';
		// $config["prev_tag_close"] = '</li>';

		// $config['next_link'] = '&raquo;';
		// $config["next_tag_open"] = '<li>';
		// $config["next_tag_close"] = '</li>';

		// $config["cur_tag_open"] = "<li class='page-item active'><a class='page-link' href='#'>";
		// $config["cur_tag_close"] = "</a></li>";

		// $config["num_tag_open"] = "<li class='page-item'>";
		// $config["num_tag_close"] = "</li>";

		// $config["attributes"] = array('class' => 'page-link');

		// // $config["num_links"] = 1;

		// $this->pagination->initialize($config);

		// $pagination_link = $this->pagination->create_links();

		// if ($this->input->post('keyword')) {
		// 	$input_transaksi = $this->m_santri_spp->get_search_data($config['per_page'], $config['start']);
		// } else {
		// 	$input_transaksi = $this->m_santri_spp->get_all_data($config['per_page'], $config['start']);
		// }

		$keyword = 2;
		$input_transaksi = $this->m_santri_spp->get_all_data($keyword);
		// $input_transaksi = $this->m_santri_spp->get_search_data($keyword);

		// if ($this->input->post('keyword')) {
		// 	$input_transaksi = $this->m_santri_spp->get_search_data(12, 13);
		// 	// $input_transaksi = $this->m_santri_spp->get_search_data($config['per_page'], $config['start']);
		// } else {
		// 	$input_transaksi = $this->m_santri_spp->get_all_data();
		// 	// $input_transaksi = $this->m_santri_spp->get_all_data($config['per_page'], $config['start']);
		// }

		$data = [
			'title' => 'Data transaksi',
			'isi' => 'input_transaksi/index',
			'input_transaksi' => $input_transaksi,
			// 'input_transaksi' => $this->m_santri_spp->get_all_data($data2),
			'start' => 0,
			// 'start' => $this->uri->segment(3),
			// 'pagination' => $pagination_link,
			'jumlah_data' => $this->m_santri_spp->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}
	public function view($idnya_santri)
	{
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/spp_inay/input_transaksi/view/'.$idnya_santri.'/index/';
		$config['total_rows'] = $this->m_santri_spp->count_search_data($idnya_santri);
		$config['per_page'] = 12;
		$config['start'] = $this->uri->segment(5);
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

		// if ($this->input->post('keyword')) {
		// 	$input_transaksi = $this->m_santri_spp->get_search_data($config['per_page'], $config['start']);
		// } else {
			$input_transaksi = $this->m_santri_spp->get_all_data_pagination($config['per_page'], $config['start'], $idnya_santri);
		// }

		// $keyword = $this->uri->segment(2);
		// $input_transaksi = $this->m_santri_spp->get_all_data($keyword);
		// $input_transaksi = $this->m_santri_spp->get_search_data($keyword);

		// if ($this->input->post('keyword')) {
		// 	$input_transaksi = $this->m_santri_spp->get_search_data(12, 13);
		// 	// $input_transaksi = $this->m_santri_spp->get_search_data($config['per_page'], $config['start']);
		// } else {
		// 	$input_transaksi = $this->m_santri_spp->get_all_data();
		// 	// $input_transaksi = $this->m_santri_spp->get_all_data($config['per_page'], $config['start']);
		// }

		$data = [
			'title' => 'History Pembayaran SPP',
			'isi' => 'santri/spp/index',
			'input_transaksi' => $input_transaksi,
			// 'input_transaksi' => $this->m_santri_spp->get_all_data($idnya_santri),
			// 'start' => 0,
			'idnya_santri' => $idnya_santri,
			'start' => $this->uri->segment(5),
			'pagination' => $pagination_link,
			'jumlah_data' => $this->m_santri_spp->count_search_data($idnya_santri),
		];

		return $this->load->view('master_santri/index', $data);
	}

	// public function add($id)
	// {
	// 	$data = [
	// 		'title' => 'Tambah Data Transaksi',
	// 		'isi' => 'input_transaksi/add',
	// 		'data_tr_santri' => $this->m_santri_spp->get_tr_santri($id),
	// 		'data_tr_bulan' => $this->m_santri_spp->get_tr_bulan(),
	// 	];

	// 	return $this->load->view('master/index', $data);
	// }

	public function add($id)
	{
		$data = [
			'title' => 'Tambah Data Transaksi',
			'isi' => 'input_transaksi/add',
			'data_tr_santri' => $this->m_santri_spp->get_tr_santri($id),
			'data_tr_bulan' => $this->m_santri_spp->get_tr_bulan(),
		];


		return $this->load->view('master/index', $data);
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data Transaksi',
			'isi' => 'input_transaksi/edit',
			'data_tr_santri' => $this->m_santri_spp->get_tr_santri($id),
			'data_tr_bulan' => $this->m_santri_spp->get_tr_bulan(),
		];


		return $this->load->view('master/index', $data);
	}

	public function update($id)
	{
		$data = [
			'title' => 'Update Data Transaksi',
			'isi' => 'input_transaksi/update',
			'data_tr_santri' => $this->m_santri_spp->get_tr_santri($id),
			'data_tr_bulan' => $this->m_santri_spp->get_tr_bulan(),
		];


		return $this->load->view('master/index', $data);
	}

	public function add_save($id_data_santri)
	{

		$this->form_validation->set_rules('jumlah_bayar', 'Jumlah_bayar', 'required');
		$id = $this->input->post('id_transaksi');

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('input_transaksi/add', $data);
		} else {
			$data = [
				'jumlah_bayar' => $this->input->post('jumlah_bayar'),
				'created_by' => $this->session->userdata['username'],
			];
			$data2 = [
				'id_data_santri' => $this->input->post('id_data_santri'),
			];

			// $id_data_santri = $this->input->get('id_data_santri');
			$this->m_santri_spp->save($data, $id);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('input_transaksi/view/'.$id_data_santri, $data2);
		}
	}
	public function edit_save($id_data_santri)
	{
		$bayar = $this->input->post('sudah_bayar');
		$id = $this->input->post('id_transaksi');
		$this->form_validation->set_rules('jumlah_bayar', 'Jumlah_bayar', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('input_transaksi/add', $data);
		} else {
			$data = [
				// 'jumlah_bayar' => $this->input->post('jumlah_bayar') + $bayar,
				'jumlah_bayar' => $this->input->post('jumlah_bayar') ,
			];

			$this->m_santri_spp->edit_save($data, $id);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('input_transaksi/view/'. $id_data_santri, $data);
		}
	}

	public function update_save($id_data_santri)
	{
		$bayar = $this->input->post('sudah_bayar');
		$id = $this->input->post('id_transaksi');
		$this->form_validation->set_rules('jumlah_bayar', 'Jumlah_bayar', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('input_transaksi/add', $data);
		} else {
			$data = [
				'jumlah_bayar' => $this->input->post('jumlah_bayar') + $bayar,
				// 'jumlah_bayar' => $this->input->post('jumlah_bayar') ,
			];

			$this->m_santri_spp->update_save($data, $id);
			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('input_transaksi/view/'. $id_data_santri, $data);
		}
	}

	public function next($id)
	{
		$idnya_santri = $this->input->post('id_data_santri');
		$this->m_santri_spp->next($id);
		$data = $this->session->set_flashdata('message', 'disimpan');
		redirect('input_transaksi/view/'.$idnya_santri, $data);
	}

	public function kembalian($id)
	{
		$idnya_santri = $this->input->post('id_data_santri');
		$this->m_santri_spp->kembalian($id);
		$data = $this->session->set_flashdata('message', 'disimpan');
		redirect('input_transaksi/view/'.$idnya_santri, $data);
	}



	public function hapus($id)
	{
		$this->m_santri_spp->delete($id);
		$data = $this->session->set_flashdata('message', 'dihapus');
		redirect('input_transaksi', $data);
	}



	public function detail($id)
	{
		$data = [
			'title' => 'Detail transaksi ',
			'isi' => 'input_transaksi/detail',
			'data' => $this->m_santri_spp->get_data_by_id($id),
			'data_tr_santri' => $this->m_santri_spp->get_tr_santri($id),
			'data_tr_bulan' => $this->m_santri_spp->get_tr_bulan(),
		];
		// var_dump($data['data']->nama);
		// die;
		return $this->load->view('master/index', $data);
	}

	public function hilangflasdata()
	{
		$this->session->set_flashdata('message', '');
	}

	public function print_pdf()
	{
		$id_santri = 20;
		$id_kamar = 1;
		$data = [
			'data' => $this->m_santri_spp->get_all_data1($id_santri),
			'data_bulan' => $this->m_santri_spp->get_bulan(),
			'get_januari' => $this->m_santri_spp->get_januari(),
			'get_data_santri' => $this->m_santri_spp->get_data_santri($id_santri),
			'get_transaksi_bulan' => $this->m_santri_spp->get_transaksi_bulan($id_santri),
		];

        $html = $this->load->view('print_pdf/semua',$data, true);

		$pdf = new Dompdf();

		$pdf->setPaper('A4', 'landscape');
		
        $pdf->loadHtml($html);
        $pdf->render();
        $pdf->stream("Invoice_Pembayaran.pdf", array('Attachment' =>0));

	}

	public function print_per_santri($idnya_santri)
	{
		$id_kamar = 1;
		$data = [
			'data' => $this->m_santri_spp->get_all_data1($idnya_santri),
			'data_bulan' => $this->m_santri_spp->get_bulan(),
			'get_januari' => $this->m_santri_spp->get_januari(),
			'get_data_santri' => $this->m_santri_spp->get_data_santri($idnya_santri),
			'get_transaksi_bulan' => $this->m_santri_spp->get_transaksi_bulan($idnya_santri),
		];

		// $nama = 'Alip.pdf';

        $html = $this->load->view('print_pdf/per_santri',$data, true);

		$pdf = new Dompdf();

		$pdf->setPaper('B5', 'portrait');
		
        $pdf->loadHtml($html);
        $pdf->render();
        $pdf->stream("Invoice_Pembayaran.pdf", array('Attachment' =>0));

	}

	public function print_pdf_view()
	{
		$this->load->view('print_pdf/transaksi');
	}
}
