<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_data_tagihan extends CI_Model
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
        $this->db->join('tb_tahun as th', 'tb_data_tagihan.id_tahun = th.id_tahun');
        $this->db->join('tb_bulan', 'tb_data_tagihan.id_bulan = tb_bulan.id_bulan');
        $this->db->order_by('nama_tahun', 'ASC');
        $this->db->order_by('tb_bulan.id_bulan', 'ASC');
        return $this->db->get('tb_data_tagihan', $limit, $start)->result();
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
        // $this->db->like('nama_tahun', $keyword);
        return $this->db->get('tb_data_tagihan')->num_rows();
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

    public function get_tahun()
    {
        return $this->db->get('tb_tahun')->result();
    }
    public function get_bulan()
    {
        return $this->db->get('tb_bulan')->result();
    }

    public function save($data)
    {
        return $this->db->insert('tb_data_tagihan', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_data_tagihan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_data_tagihan');
    }

    public function get_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tb_data_tagihan')->row();
    }

    public function get_data_by_id($id)
    {
        $this->db->join('tb_tahun', 'tb_tahun.id_tahun = tb_data_tagihan.id_tahun');
        $this->db->join('tb_bulan', 'tb_bulan.id_bulan = tb_data_tagihan.id_bulan');
        return $this->db->get_where('tb_data_tagihan', ['id' => $id])->row();
    }
}


// simpan lab
