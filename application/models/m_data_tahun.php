<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_data_tahun extends CI_Model
{

	// public function get_all_data($limit, $start)
	// {
	// 	// $this->db->group_by("nama_tahun");
	// 	$this->db->order_by('nama_tahun', 'ASC');
	// 	return $this->db->get('tb_tahun', $limit, $start)->result();
	// }
	public function get_all_data()
	{
		// $this->db->group_by("nama_tahun");
		$this->db->order_by('nama_tahun', 'ASC');
		return $this->db->get('tb_tahun')->result();
	}

	// public function get_count_data()
	// {
	// 	$this->db->join('tb_tahun', 'tb_tahun.id_tahun = tb_tahun.id_tahun');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_tahun.id_kelas');
	// 	return $this->db->get('tb_tahun')->num_rows();
	// }

	public function count_search_data()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('nama_tahun', $keyword);
		return $this->db->get('tb_tahun')->num_rows();
	}

	// public function get_search_data($limit, $start)
	// {
	// 	$keyword = $this->input->post('keyword');
	// 	$this->db->join('tb_tahun', 'tb_tahun.id_tahun = tb_tahun.id_tahun');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_tahun.id_kelas');
	// 	$this->db->like('nama', $keyword);
	// 	$this->db->or_like('alamat', $keyword);
	// 	$this->db->or_like('nama_tahun', $keyword);
	// 	$this->db->or_like('nama_kelas', $keyword);
	// 	$this->db->order_by('nama_tahun', 'ASC');
	// 	return $this->db->get('tb_tahun', $limit, $start)->result();
	// }

	public function get_tahun()
	{
		return $this->db->get('tb_tahun')->result();
	}
	// public function get_kelas()
	// {
	// 	return $this->db->get('tb_kelas')->result();
	// }

	public function save($data)
	{
		return $this->db->insert('tb_tahun', $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_tahun', $id);
		return $this->db->update('tb_tahun', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_tahun', $id);
		return $this->db->delete('tb_tahun');
	}

	public function get_data($id)
	{
		$this->db->where('id_tahun', $id);
		return $this->db->get('tb_tahun')->row();
	}

	public function get_data_by_id($id)
	{
		return $this->db->get_where('tb_tahun', ['id_tahun' => $id])->row();
	}
}


// simpan lab
