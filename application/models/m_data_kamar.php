<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_data_kamar extends CI_Model
{

	// public function get_all_data($limit, $start)
	// {
	// 	// $this->db->group_by("nama_kamar");
	// 	$this->db->order_by('nama_kamar', 'ASC');
	// 	return $this->db->get('tb_kamar', $limit, $start)->result();
	// }
	public function get_all_data($limit, $start)
	{
		// $this->db->group_by("nama_kamar");
		$this->db->order_by('nama_kamar', 'ASC');
		return $this->db->get('tb_kamar', $limit, $start)->result();
	}

	// public function get_count_data()
	// {
	// 	$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_kamar.id_kamar');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_kamar.id_kelas');
	// 	return $this->db->get('tb_kamar')->num_rows();
	// }

	public function count_search_data()
	{
		// $keyword = $this->input->post('keyword');
		// $this->db->like('nama_kamar', $keyword);
		return $this->db->get('tb_kamar')->num_rows();
	}

	// public function get_search_data($limit, $start)
	// {
	// 	$keyword = $this->input->post('keyword');
	// 	$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_kamar.id_kamar');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_kamar.id_kelas');
	// 	$this->db->like('nama', $keyword);
	// 	$this->db->or_like('alamat', $keyword);
	// 	$this->db->or_like('nama_kamar', $keyword);
	// 	$this->db->or_like('nama_kelas', $keyword);
	// 	$this->db->order_by('nama_kamar', 'ASC');
	// 	return $this->db->get('tb_kamar', $limit, $start)->result();
	// }

	public function get_kamar()
	{
		return $this->db->get('tb_kamar')->result();
	}
	// public function get_kelas()
	// {
	// 	return $this->db->get('tb_kelas')->result();
	// }

	public function save($data)
	{
		return $this->db->insert('tb_kamar', $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_kamar', $id);
		return $this->db->update('tb_kamar', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_kamar', $id);
		return $this->db->delete('tb_kamar');
	}

	public function get_data($id)
	{
		$this->db->where('id_kamar', $id);
		return $this->db->get('tb_kamar')->row();
	}

	public function get_data_by_id($id)
	{
		return $this->db->get_where('tb_kamar', ['id_kamar' => $id])->row();
	}
}


// simpan lab
