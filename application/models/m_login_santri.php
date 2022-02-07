<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_login_santri extends CI_Model
{

	// public function get_all_data($limit, $start)
	// {
	// 	// $this->db->group_by("nama_transaksi");
	// 	$this->db->order_by('nama_transaksi', 'ASC');
	// 	return $this->db->get('tb_jurnal_umum', $limit, $start)->result();
	// }
	public function cek_login()
	{
		$nis = $this->input->post('nis');
		$password = $this->input->post('password');

		$this->db->select('*');
		$this->db->where('nis', $nis);
		$this->db->where('password', $password);
		return $this->db->get('tb_data_santri')->num_rows();
	}
}


// simpan lab
