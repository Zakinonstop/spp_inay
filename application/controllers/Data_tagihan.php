<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_tagihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data_tagihan');
        $this->load->library('form_validation');
        if (isset($_SESSION['username'])) { } else {
            redirect('start');
        }
    }

    public function index()
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url('data_tagihan/index/');
        $config['total_rows'] = $this->m_data_tagihan->count_search_data();
        $config['per_page'] = 12;
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

        // if ($this->input->post('keyword')) {
        // $data_tagihan = $this->m_data_tagihan->get_search_data($config['per_page'], $config['start']);
        // } else {
        $data_tagihan = $this->m_data_tagihan->get_all_data($config['per_page'], $config['start']);
        // }

        $data = [
            'title' => 'Data Tagihan',
            'isi' => 'data_tagihan/index',
            'data_tagihan' => $data_tagihan,
            // 'data_tagihan' => $this->m_data_tagihan->get_all_data(),
            'start' => $this->uri->segment(3),
            'pagination' => $pagination_link,
            'jumlah_data' => $this->m_data_tagihan->count_search_data(),
        ];

        return $this->load->view('master/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data tagihan',
            'isi' => 'data_tagihan/add',
            // 'data_tagihan' => $this->m_data_tagihan->get_tagihan(),
            'data_tahun' => $this->m_data_tagihan->get_tahun(),
            'data_bulan' => $this->m_data_tagihan->get_bulan(),
        ];

        return $this->load->view('master/index', $data);
    }

    public function add_save()
    {

        $this->form_validation->set_rules('nominal', 'Nominal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = $this->session->set_flashdata('message', validation_errors());
            redirect('data_tagihan/add', $data);
        } else {
            $data = [
                'id_tahun' => $this->input->post('tahun'),
                'id_bulan' => $this->input->post('bulan'),
                'nominal' => $this->input->post('nominal'),
            ];

            $this->m_data_tagihan->save($data);

            $id = $this->db->query('SELECT id FROM `tb_data_tagihan` WHERE id IN (SELECT MAX(id) FROM `tb_data_tagihan`)')->row()->id;
            $id_data_santri = $this->db->query('SELECT id FROM `tb_data_santri` ')->result();

            foreach ($id_data_santri as $key) {
                $this->db->insert('tb_data_transaksi', ['id_data_tagihan' => $id, 'id_data_santri' => $key->id]);
            }
            $data = $this->session->set_flashdata('message', 'disimpan');
            redirect('data_tagihan', $data);
        }
    }

    public function edit_save($id)
    {
        $this->form_validation->set_rules('nominal', 'Tagihan Santri', 'required');
        $this->form_validation->set_rules('tagihan_ustadz', 'Tagihan Ustadz', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = $this->session->set_flashdata('message', validation_errors());
            redirect('data_tagihan/edit/' . $id, $data);
        } else {
            $data = [
                'nominal' => $this->input->post('nominal'),
                'tagihan_ustadz' => $this->input->post('tagihan_ustadz'),
                'id_tahun' => $this->input->post('tahun'),
                'id_bulan' => $this->input->post('bulan'),
            ];

            $edit = $this->m_data_tagihan->update($data, $id);
            $data = $this->session->set_flashdata('message', 'diedit');

            redirect('data_tagihan');
        }
    }

    public function hapus($id)
    {
        $this->m_data_tagihan->delete($id);
        $data = $this->session->set_flashdata('message', 'dihapus');

        $id_data_tagihan = $this->db->query('SELECT id_data_tagihan FROM `tb_data_transaksi` WHERE id_data_tagihan = "' . $id . '" ')->result();
        foreach ($id_data_tagihan as $key) {
            $this->db->where('id_data_tagihan', $key->id_data_tagihan);
            $this->db->delete('tb_data_transaksi');
        }
        redirect('data_tagihan', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data tagihan ',
            'isi' => 'data_tagihan/edit',
            'data' => $this->m_data_tagihan->get_data($id),
            'data_tahun' => $this->m_data_tagihan->get_tahun(),
            'data_bulan' => $this->m_data_tagihan->get_bulan(),
        ];
        // var_dump($data['data']->nama);
        // die;
        return $this->load->view('master/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Tagihan ',
            'isi' => 'data_tagihan/detail',
            'data' => $this->m_data_tagihan->get_data_by_id($id),
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
