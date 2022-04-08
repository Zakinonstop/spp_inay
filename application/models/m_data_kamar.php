<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_data_kamar extends CI_Model
{

	public function get_all_data($limit, $start)
	{
		// $this->db->group_by("nama_kamar");
		$this->db->order_by('id_kamar', 'ASC');
		return $this->db->get('tb_kamar', $limit, $start)->result();
	}

	public function count_search_data()
	{
		// $keyword = $this->input->post('keyword');
		// $this->db->like('nama_kamar', $keyword);
		return $this->db->get('tb_kamar')->num_rows();
	}

	public function get_kamar()
	{
		return $this->db->get('tb_kamar')->result();
	}
	

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

	public function get_jumlah_anggota_by_id($id)
	{
		return $this->db->get_where('tb_data_santri', ['id_kamar' => $id])->num_rows();
	}

	public function get_nama_anggota_by_id($id)
	{
		$this->db->select('nama','id');
		return $this->db->get_where('tb_data_santri', ['id_kamar' => $id])->result();
	}
}


// simpan lab
