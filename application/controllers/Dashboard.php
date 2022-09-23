<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data_transaksi');
        $this->load->library('form_validation');

        if (isset($_SESSION['username'])) { } else {
            redirect('start');
        }
    }

    public function index()
    {

        $data = [
            'title' => 'Dashboard',
            'isi' => 'dashboard/index',
            // 'data_transaksi' => $data_transaksi,
            'data_transaksi' => $this->m_data_transaksi->get_all_data(),
            'total_pemasukan' => $this->m_data_transaksi->total_pemasukan(),
            'jumlah_pemasukan' => $this->m_data_transaksi->jumlah_pemasukan(),
            'jumlah_pengeluaran' => $this->m_data_transaksi->jumlah_pengeluaran(),
            // 'total_pengeluaran' => $this->m_data_transaksi->total_pengeluaran(),
            'start' => $this->uri->segment(3),
            // 'pagination' => $pagination_link,
            'jumlah_data' => $this->m_data_transaksi->count_search_data(),
        ];

        if ($this->session->userdata['username']) {
            return $this->load->view('master/index', $data);
        } else {
            redirect('login');
        }
    }
}
