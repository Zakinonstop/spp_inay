<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_start extends CI_Model
{

	// public function get_all_data($limit, $start)
	// {
	// 	// $this->db->group_by("nama_transaksi");
	// 	$this->db->order_by('nama_transaksi', 'ASC');
	// 	return $this->db->get('tb_jurnal_umum', $limit, $start)->result();
	// }
	public function cek_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('tb_admin')->num_rows();
	}
}


// simpan lab
