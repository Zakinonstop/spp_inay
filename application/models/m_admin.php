<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_Model
{

	// public function get_all_data($limit, $start)
	// {
	// 	// $this->db->group_by("username");
	// 	$this->db->order_by('username', 'ASC');
	// 	return $this->db->get('tb_admin', $limit, $start)->result();
	// }
	public function get_all_data($limit, $start)
	{
		// $this->db->group_by("username");
		$this->db->order_by('username', 'ASC');
		return $this->db->get('tb_admin', $limit, $start)->result();
	}

	// public function get_count_data()
	// {
	// 	$this->db->join('tb_admin', 'tb_admin.id_admin = tb_admin.id_admin');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_admin.id_kelas');
	// 	return $this->db->get('tb_admin')->num_rows();
	// }

	public function count_search_data()
	{
		// $keyword = $this->input->post('keyword');
		// $this->db->like('username', $keyword);
		return $this->db->get('tb_admin')->num_rows();
	}

	// public function get_search_data($limit, $start)
	// {
	// 	$keyword = $this->input->post('keyword');
	// 	$this->db->join('tb_admin', 'tb_admin.id_admin = tb_admin.id_admin');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_admin.id_kelas');
	// 	$this->db->like('nama', $keyword);
	// 	$this->db->or_like('alamat', $keyword);
	// 	$this->db->or_like('username', $keyword);
	// 	$this->db->or_like('nama_kelas', $keyword);
	// 	$this->db->order_by('username', 'ASC');
	// 	return $this->db->get('tb_admin', $limit, $start)->result();
	// }

	public function get_kamar()
	{
		return $this->db->get('tb_admin')->result();
	}
	// public function get_kelas()
	// {
	// 	return $this->db->get('tb_kelas')->result();
	// }

	public function save($data)
	{
		return $this->db->insert('tb_admin', $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->update('tb_admin', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->delete('tb_admin');
	}

	public function get_data($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->get('tb_admin')->row();
	}

	public function get_data_by_id($id)
	{
		return $this->db->get_where('tb_admin', ['id_admin' => $id])->row();
	}
}


// simpan lab
