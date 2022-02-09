<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_santri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_profil_santri');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/spp_inay/data_santri/index/';
		$config['total_rows'] = $this->m_profil_santri->count_search_data();
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

		if ($this->input->post('keyword')) {
			$data_santri = $this->m_profil_santri->get_search_data($config['per_page'], $config['start']);
		} else {
			$data_santri = $this->m_profil_santri->get_all_data($config['per_page'], $config['start']);
		}

		$data = [
			'title' => 'Data Santri',
			'isi' => 'data_santri/index',
			'data_santri' => $data_santri,
			'start' => $this->uri->segment(3),
			'pagination' => $pagination_link,
			'jumlah_data' => $this->m_profil_santri->count_search_data(),
		];

		return $this->load->view('master/index', $data);
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah Data Santri',
			'isi' => 'data_santri/add',
			'data_kamar' => $this->m_profil_santri->get_kamar(),
			'data_kelas' => $this->m_profil_santri->get_kelas(),
		];

		return $this->load->view('master/index', $data);
	}

	public function add_save()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required');
		// $this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$pass_awal = rand();
		$password = substr($pass_awal,0,5);

		$tahun = date('Y');
		$jenkel = $this->input->post('jenis_kelamin');
		$nis_tahun = substr($tahun, 2);
		// echo $nis_tahun;

		// echo '.';
		if ($jenkel == 'L') {
			// echo '01';
			$nis_jk = '01';
		}else {
			$nis_jk = '02';
			// echo '02';
		}
		// echo '.';
		//ce jumlah data
		$jumlah_data = $this->db->query('SELECT * FROM tb_data_santri')->num_rows();
		$nis_jumlah = $jumlah_data + 1;

		// echo $nis_jumlah;
		// echo '<br>';

		$num = $nis_jumlah;

		$format = '%1$04d ';
		$nis3 = sprintf($format, $num);

		$nis_akhir = $nis3;
		// echo $nis3;

		$nis_fix = $nis_tahun . '.' . $nis_jk . '.'. $nis_akhir ;
		// echo $nis_fix;



		// die();

		$foto = $_FILES['foto'];
		if ($foto = '') {
			
		}else {
			$config = [
				'upload_path' => './assets/foto',
				'allowed_types' => 'jpg|jpeg|png',
			];
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				// echo 'Gagal Upload Foto';
			}else {
				$foto = $this->upload->data('file_name');
			}
		}

		if ($this->form_validation->run() == FALSE) {
			$data = $this->session->set_flashdata('message', validation_errors());
			redirect('data_santri/add', $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'id_kamar' => $this->input->post('kamar'),
				'id_kelas' => $this->input->post('kelas'),
				'no_hp' => $this->input->post('no_hp'),
				'password' => $password,
				'nis' => $nis_fix,
				'tgl_masuk' => $this->input->post('tgl_masuk'),
				'foto' => $foto,
			];

			$this->m_profil_santri->save($data);

			$id = $this->db->query('SELECT id FROM `tb_data_santri` WHERE id IN (SELECT MAX(id) FROM `tb_data_santri`)')->row()->id;
			$id_tagihan = $this->db->query('SELECT id FROM `tb_data_tagihan` ')->result();

			foreach ($id_tagihan as $key) {
				$this->db->insert('tb_data_transaksi', ['id_data_santri' => $id, 'id_data_tagihan' => $key->id]);
			}

			$data = $this->session->set_flashdata('message', 'disimpan');
			redirect('data_santri', $data);
		}
	}

	public function edit_save($id)
	{
		$foto = $_FILES['foto'];
		if ($foto['name'] == '') {
			$foto = $this->input->post('foto_asli');
		}else {
			$config = [
				'upload_path' => './assets/foto',
				'allowed_types' => 'jpg|jpeg|png',
			];
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				// echo 'Gagal Upload Foto';
			}else {
				$foto = $this->upload->data('file_name');
			}
		}

		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'id_kamar' => $this->input->post('kamar'),
			'id_kelas' => $this->input->post('kelas'),
			'no_hp' => $this->input->post('no_hp'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'foto' => $foto,
		];

		$edit = $this->m_profil_santri->update($data, $id);


		$data = $this->session->set_flashdata('message', 'diedit');

		redirect('profil_santri/detail/'.$id);
	}

	public function hapus($id)
	{
		$this->m_profil_santri->delete($id);
		$data = $this->session->set_flashdata('message', 'dihapus');

		$id_data_santri = $this->db->query('SELECT id_data_santri FROM `tb_data_transaksi` WHERE id_data_santri = "' . $id . '" ')->result();
		foreach ($id_data_santri as $key) {
			$this->db->where('id_data_santri', $key->id_data_santri);
			$this->db->delete('tb_data_transaksi');
		}
		redirect('data_santri', $data);
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data Santri ',
			'isi' => 'santri/profil/edit',
			'data_kamar' => $this->m_profil_santri->get_kamar(),
			'data_kelas' => $this->m_profil_santri->get_kelas(),
			'data' => $this->m_profil_santri->get_data($id),
		];
		// var_dump($data['data']->nama);
		// die;
		return $this->load->view('master_santri/index', $data);
	}

	public function detail($id)
	{
		$data = [
			'title' => 'Detail Santri ',
			'isi' => 'santri/profil/detail',
			'data' => $this->m_profil_santri->get_data_by_id($id),
		];
		// var_dump($data['data']->nama);
		// die;
		return $this->load->view('master_santri/index', $data);
	}

	public function do_upload()
	{
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('data_santri/add', $error);
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());

					$this->load->view('data_santri/index', $data);
			}
	}

	public function hilangflasdata()
	{
		$this->session->set_flashdata('message', '');
	}

	public function send_wa($id)
	{
		$this->m_profil_santri->send_wa($id);
		// echo 'jos';
	}
}
