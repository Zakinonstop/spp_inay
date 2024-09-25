<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_tahun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data_tahun');
        $this->load->library('form_validation');
        if (isset($_SESSION['username'])) { } else {
            redirect('start');
        }
    }

    public function index()
    {
        // $this->load->library('pagination');

        // $config['base_url'] = base_url('data_tahun/index/');
        // $config['total_rows'] = $this->m_data_tahun->count_search_data();
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
        // 	$data_tahun = $this->m_data_tahun->get_search_data($config['per_page'], $config['start']);
        // } else {
        // 	$data_tahun = $this->m_data_tahun->get_all_data($config['per_page'], $config['start']);
        // }

        $data = [
            'title' => 'Data Tahun',
            'isi' => 'data_tahun/index',
            // 'data_tahun' => $data_tahun,
            'data_tahun' => $this->m_data_tahun->get_all_data(),
            'start' => $this->uri->segment(3),
            // 'pagination' => $pagination_link,
            'jumlah_data' => $this->m_data_tahun->count_search_data(),
        ];

        return $this->load->view('master/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data tahun',
            'isi' => 'data_tahun/add',
            'data_tahun' => $this->m_data_tahun->get_tahun(),
        ];

        return $this->load->view('master/index', $data);
    }

    public function add_save()
    {

        $this->form_validation->set_rules('nama', 'Nama Tahun', 'required');
        $this->form_validation->set_rules('nominal', 'Tagihan Santri', 'required');
        $this->form_validation->set_rules('nominal_ustadz', 'Tagihan Ustadz', 'required');
        // $this->form_validation->set_rules('nominal_tagihan', 'Nominal Tagihan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = $this->session->set_flashdata('message', validation_errors());
            redirect('data_tahun/add', $data);
        } else {
            $data = [
                'nama_tahun' => $this->input->post('nama'),
                'nominal_tagihan' => $this->input->post('nominal'),
                'nominal_ustadz' => $this->input->post('nominal_ustadz'),
            ];
            // $nominal = $this->input->post('nominal');

            $this->m_data_tahun->save($data);

            $id_tahun = $this->db->query('SELECT * FROM `tb_tahun` WHERE id_tahun IN (SELECT MAX(id_tahun) FROM `tb_tahun`)')->row();
            $id_bulan_t = $this->db->query('SELECT id_bulan FROM `tb_bulan` ')->result();


            foreach ($id_bulan_t as $bul) {
                $this->db->insert('tb_data_tagihan', ['id_tahun' => $id_tahun->id_tahun, 'id_bulan' => $bul->id_bulan, 'nominal' => $id_tahun->nominal_tagihan, 'tagihan_ustadz' => $id_tahun->nominal_ustadz]);
            }

            //ambil id_santri
            $id_data_santri = $this->db->query('SELECT id FROM `tb_data_santri` ')->result();
            $id_data_tagihan = $this->db->query('SELECT id FROM `tb_data_tagihan` WHERE id NOT IN (SELECT id_data_tagihan FROM `tb_data_transaksi`) ')->result();

            foreach ($id_data_santri as $ds) {
                foreach ($id_data_tagihan as $dt) {
                    $this->db->insert('tb_data_transaksi', ['id_data_santri' => $ds->id, 'id_data_tagihan' => $dt->id]);
                }
                // kodingan insert
            }
            // kondisi ketika dua duanya ada maka update
            // ketika tdk ada maka insert
            $data = $this->session->set_flashdata('message', 'disimpan');
            redirect('data_tahun', $data);
        }
    }

    public function edit_save($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Tahun', 'required');
        $this->form_validation->set_rules('nominal', 'Nominal Tagihan', 'required');
        $this->form_validation->set_rules('nominal_ustadz', 'Tagihan Ustadz', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = $this->session->set_flashdata('message', validation_errors());
            redirect('data_tahun/edit/' . $id, $data);
        } else {
            $data = [
                'nama_tahun' => $this->input->post('nama'),
                'nominal_tagihan' => $this->input->post('nominal'),
                'nominal_ustadz' => $this->input->post('nominal_ustadz'),
            ];

            $edit = $this->m_data_tahun->update($data, $id);
            $data = $this->session->set_flashdata('message', 'diedit');
            redirect('data_tahun');
        }
    }

    public function hapus($id)
    {
        $this->m_data_tahun->delete($id);
        $data = $this->session->set_flashdata('message', 'dihapus');
        redirect('data_tahun', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data tahun ',
            'isi' => 'data_tahun/edit',
            'data' => $this->m_data_tahun->get_data($id),
        ];
        // var_dump($data['data']->nama);
        // die;
        return $this->load->view('master/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail tahun ',
            'isi' => 'data_tahun/detail',
            'data' => $this->m_data_tahun->get_data_by_id($id),
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
