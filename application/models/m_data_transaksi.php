<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_data_transaksi extends CI_Model
{

	// public function get_all_data($limit, $start)
	// {
	// 	// $this->db->group_by("nama_transaksi");
	// 	$this->db->order_by('nama_transaksi', 'ASC');
	// 	return $this->db->get('tb_data_transaksi', $limit, $start)->result();
	// }
	public function get_all_data()
	{
		// $this->db->group_by("nama_transaksi");
		$this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		$this->db->join('tb_bulan', 'tb_data_tagihan.id_bulan = tb_bulan.id_bulan');
		$this->db->order_by('id_data_santri', 'ASC');
		$this->db->order_by('tb_tahun.id_tahun', 'ASC');
		$this->db->order_by('tb_bulan.id_bulan', 'ASC');
		return $this->db->get('tb_data_transaksi')->result();
	}

	// public function get_count_data()
	// {
	// 	$this->db->join('tb_data_transaksi', 'tb_data_transaksi.id_transaksi = tb_data_transaksi.id_transaksi');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_transaksi.id_kelas');
	// 	return $this->db->get('tb_data_transaksi')->num_rows();
	// }

	public function count_search_data()
	{
		$keyword = $this->input->post('keyword');
		// $this->db->like('nama_transaksi', $keyword);
		return $this->db->get('tb_data_transaksi')->num_rows();
	}

	// public function get_search_data($limit, $start)
	// {
	// 	$keyword = $this->input->post('keyword');
	// 	$this->db->join('tb_data_transaksi', 'tb_data_transaksi.id_transaksi = tb_data_transaksi.id_transaksi');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_transaksi.id_kelas');
	// 	$this->db->like('nama', $keyword);
	// 	$this->db->or_like('alamat', $keyword);
	// 	$this->db->or_like('nama_transaksi', $keyword);
	// 	$this->db->or_like('nama_kelas', $keyword);
	// 	$this->db->order_by('nama_transaksi', 'ASC');
	// 	return $this->db->get('tb_data_transaksi', $limit, $start)->result();
	// }

	public function get_transaksi()
	{
		return $this->db->get('tb_data_transaksi')->result();
	}

	public function get_tr_santri($id)
	{
		$this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		$this->db->join('tb_bulan', 'tb_data_tagihan.id_bulan = tb_bulan.id_bulan');
		$this->db->order_by('id_data_santri', 'ASC');
		$this->db->order_by('tb_tahun.id_tahun', 'ASC');
		$this->db->order_by('tb_bulan.id_bulan', 'ASC');
		return $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row();
	}

	public function get_tr_bulan()
	{
		// $this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
		// $this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		// $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		// $this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		// $this->db->join('tb_bulan', 'tb_bulan.id_bulan = tb_bulan.id_bulan');
		// $this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		return $this->db->get('tb_bulan')->result();
	}
	// public function get_kelas()
	// {
	// 	return $this->db->get('tb_kelas')->result();
	// }

	public function kembalian($id)
	{
		$this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		$this->db->join('tb_bulan', 'tb_data_tagihan.id_bulan = tb_bulan.id_bulan');
		$this->db->order_by('id_data_santri', 'ASC');
		$this->db->order_by('tb_tahun.id_tahun', 'ASC');
		$this->db->order_by('tb_bulan.id_bulan', 'ASC');

		$this->db->select('jumlah_bayar, sisa, id_data_transaksi, id_data_tagihan, nominal');
		$query = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row();

		$jumlah_baru = $query->jumlah_bayar - $query->sisa;

		$data = [
			'jumlah_bayar' => $jumlah_baru,
			'sisa' => 0,
		];

		$this->db->where('id_data_transaksi', $id);
		return $this->db->update('tb_data_transaksi', $data);
	}
	public function next($id)
	{
		$cek_id = $id + 1;
		$this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		$this->db->join('tb_bulan', 'tb_data_tagihan.id_bulan = tb_bulan.id_bulan');
		$this->db->order_by('id_data_santri', 'ASC');
		$this->db->order_by('tb_tahun.id_tahun', 'ASC');
		$this->db->order_by('tb_bulan.id_bulan', 'ASC');

		$this->db->select('jumlah_bayar, sisa, id_data_transaksi, id_data_tagihan, nominal');
		$query = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row();
		$query2 = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $cek_id])->row();
		$id_tagihan = $query2->id_data_tagihan;
		$query3 = $this->db->get_where('tb_data_tagihan', ['id' => $id_tagihan])->row();
		// print_r($id_tagihan);
		// die();

		$jumlah_baru = $query->jumlah_bayar - $query->sisa;
		$sisa_baru = $query->sisa - $query3->nominal;
		// print_r($sisa_baru);
		// die();

		if ($sisa_baru >= 0) {
			$keterangan = '1'; //lunas
		} else {
			$keterangan = '0';
		}
		$data = [
			'jumlah_bayar' => $jumlah_baru,
			'sisa' => 0,
		];
		$data2 = [
			'jumlah_bayar' => $query->sisa,
			'sisa' => $sisa_baru,
			'keterangan' => $keterangan,
			'tanggal_bayar' => date("Y/m/d"),

		];
		$this->db->where('id_data_transaksi', $cek_id);
		$this->db->update('tb_data_transaksi', $data2);

		$this->db->where('id_data_transaksi', $id);
		return $this->db->update('tb_data_transaksi', $data);
	}

	public function save($data, $id)
	{
		$this->db->where('id_data_transaksi', $id);
		$this->db->update('tb_data_transaksi', $data);

		$this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		$this->db->join('tb_bulan', 'tb_data_tagihan.id_bulan = tb_bulan.id_bulan');
		$this->db->order_by('id_data_santri', 'ASC');
		$this->db->order_by('tb_tahun.id_tahun', 'ASC');
		$this->db->order_by('tb_bulan.id_bulan', 'ASC');

		$this->db->select('nominal,jumlah_bayar');
		$query = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row();
		$sisa = $query->jumlah_bayar - $query->nominal;
		if ($sisa >= 0) {
			$keterangan = '1'; //lunas
		} else {
			$keterangan = '0';
		}
		$data = [
			'sisa' => $sisa,
			'tanggal_bayar' => date("Y/m/d"),
			'keterangan' => $keterangan,
		];
		// print_r($sisa);
		// die();
		// $sisa = $data -

		$this->db->where('id_data_transaksi', $id);
		return $this->db->update('tb_data_transaksi', $data);
	}
	public function edit_save($data, $id)
	{

		$this->db->where('id_data_transaksi', $id);
		$this->db->update('tb_data_transaksi', $data);

		$this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		$this->db->join('tb_bulan', 'tb_data_tagihan.id_bulan = tb_bulan.id_bulan');
		$this->db->order_by('id_data_santri', 'ASC');
		$this->db->order_by('tb_tahun.id_tahun', 'ASC');
		$this->db->order_by('tb_bulan.id_bulan', 'ASC');

		$this->db->select('nominal,jumlah_bayar');
		$query = $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row();

		$jumlah_bayar_baru = $query->jumlah_bayar + $this->input->post('jumlah_bayar');

		$this->db->where('id_data_transaksi', $id);
		$this->db->update('tb_data_transaksi', $data);

		$sisa = $query->jumlah_bayar - $query->nominal;
		if ($sisa >= 0) {
			$keterangan = '1'; //lunas
		} else {
			$keterangan = '0';
		}
		$data = [
			'sisa' => $sisa,
			'tanggal_bayar' => date("Y/m/d"),
			'keterangan' => $keterangan,
		];
		// print_r($sisa);
		// die();
		// $sisa = $data -

		$this->db->where('id_data_transaksi', $id);
		return $this->db->update('tb_data_transaksi', $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_transaksi', $id);
		return $this->db->update('tb_data_transaksi', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tb_data_transaksi');
	}

	public function get_data($id)
	{
		$this->db->where('id_transaksi', $id);
		return $this->db->get('tb_data_transaksi')->row();
	}

	public function get_data_by_id($id)
	{
		return $this->db->get_where('tb_data_transaksi', ['id_transaksi' => $id])->row();
	}

	public function total_pemasukan()
	{
		$this->db->select_sum('jumlah_bayar');
		return $this->db->get('tb_data_transaksi')->row();
	}
}


// simpan lab
