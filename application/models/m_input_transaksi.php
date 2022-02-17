<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_input_transaksi extends CI_Model
{

	public function get_all_data1($idnya_santri)
	{
		// $this->db->group_by("nama_transaksi");
		$this->db->select('*');
		$this->db->join('tb_data_santri', 'tb_data_santri.id = tb_data_transaksi.id_data_santri');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		$this->db->join('tb_bulan', 'tb_data_tagihan.id_bulan = tb_bulan.id_bulan');
		$this->db->order_by('id_data_santri', 'ASC');
		$this->db->order_by('tb_tahun.id_tahun', 'ASC');
		$this->db->order_by('tb_bulan.id_bulan', 'ASC');
		// $query = $this->db->get_where('tb_data_transaksi', array('id_data_santri' => 2), 12, 1);
		return $this->db->get_where('tb_data_transaksi', ['id_data_santri' => $idnya_santri])->result();
		// return $this->db->get('tb_data_transaksi')->result();
	}

	public function get_transaksi_bulan($id_santri)
	{
		$this->db->select('*');
		return $this->db->get_where('tb_data_transaksi', ['id_data_santri' => $id_santri])->result();
	}

	public function get_januari()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '1'])->result();
	}

	public function get_februari()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '2'])->result();
	}
	
	public function get_maret()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '3'])->result();
	}

	public function get_april()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '4'])->result();
	}

	public function get_mei()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '5'])->result();
	}

	public function get_juni()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '6'])->result();
	}

	public function get_juli()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '7'])->result();
	}

	public function get_agustus()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '8'])->result();
	}

	public function get_september()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '9'])->result();
	}

	public function get_oktober()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '10'])->result();
	}

	public function get_november()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '11'])->result();
	}

	public function get_desember()
	{
		$this->db->select('tanggal_bayar');
		$this->db->join('tb_data_tagihan', 'tb_data_tagihan.id = tb_data_transaksi.id_data_tagihan');
		$this->db->join('tb_tahun', 'tb_data_tagihan.id_tahun = tb_tahun.id_tahun');
		return $this->db->get_where('tb_data_transaksi', ['id_bulan' => '12'])->result();
	}

	public function get_data_santri()
	{
		$this->db->select('*');
		// $this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		// $this->db->order_by('id_data_santri', 'ASC');
		return $this->db->get('tb_data_santri')->result();
	}

	public function get_bulan()
	{
		$this->db->select('*');
		return $this->db->get('tb_bulan')->result();
	}
	
	public function get_all_data($idnya_santri)
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
		// $query = $this->db->get_where('tb_data_transaksi', array('id_data_santri' => 2), 12, 1);
		return $this->db->get_where('tb_data_transaksi', array('id_data_santri' => $idnya_santri))->result();
		// return $this->db->get('tb_data_transaksi')->result();
	}

	public function get_all_data_pagination($limit, $start, $idnya_santri)
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
		// $query = $this->db->get_where('tb_data_transaksi', array('id_data_santri' => 2), 12, 1);
		return $this->db->get_where('tb_data_transaksi', array('id_data_santri' => $idnya_santri), $limit, $start)->result();
		// return $this->db->get('tb_data_transaksi')->result();
	}

	public function count_search_data($idnya_santri)
	{
		// $keyword = $this->input->post('keyword');
		// $this->db->like('nama_transaksi', $keyword);
		// return $this->db->get('tb_data_transaksi')->num_rows();
		return $this->db->get_where('tb_data_transaksi', array('id_data_santri' => $idnya_santri))->num_rows();
		// return $this->db->get('tb_data_transaksi')->num_rows();
	}

	public function get_search_data($keyword)
	{
		// $keyword = $this->input->post('keyword');
		$this->db->join('tb_data_transaksi', 'tb_data_transaksi.id_transaksi = tb_data_transaksi.id_transaksi');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_transaksi.id_kelas');
		$this->db->like('nama', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('nama_transaksi', $keyword);
		$this->db->or_like('nama_kelas', $keyword);
		$this->db->order_by('nama_transaksi', 'ASC');
		return $this->db->get('tb_data_transaksi')->result();
	}

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

		$jumlah_baru = $query->jumlah_bayar - $query->sisa;
		$sisa_baru = $query->sisa - $query3->nominal;

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
			'tanggal_bayar' => date("Y-m-d H:i:s"),

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
		date_default_timezone_set('ASIA/JAKARTA');
		$data = [
			'sisa' => $sisa,
			'tanggal_bayar' => date("Y-m-d H:i:s"),
			'keterangan' => $keterangan,
		];

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
		date_default_timezone_set('ASIA/JAKARTA');
		$data = [
			'sisa' => $sisa,
			'tanggal_bayar' => date("Y/m/d"),
			'keterangan' => $keterangan,
			'tanggal_bayar' => date("Y-m-d H:i:s"),
			'created_by' => $this->session->userdata['username'],
		];
		// print_r($sisa);
		// die();
		// $sisa = $data -

		$this->db->where('id_data_transaksi', $id);
		return $this->db->update('tb_data_transaksi', $data);
	}

	public function update_save($data, $id)
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
		
		date_default_timezone_set('ASIA/JAKARTA');
		$data = [
			'sisa' => $sisa,
			'tanggal_bayar' => date("Y-m-d H:i:s"),
			'keterangan' => $keterangan,
			'created_by' => $this->session->userdata['username'],
		];

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
		return $this->db->get_where('tb_data_transaksi', ['id_data_transaksi' => $id])->row();
	}

	public function set_lunas($id_data_transaksi)
	{
		$data = [
			'jumlah_bayar' => '0',
			'sisa' => '0',
			'tanggal_bayar' => date("Y-m-d H:i:s"),
			'keterangan' => '1',
			'created_by' => $this->session->userdata['username'],
		];

		$this->db->where('id_data_transaksi', $id_data_transaksi);
		return $this->db->update('tb_data_transaksi', $data);
	}

	
	public function get_data_santri_by_id($id_data_santri)
	{
		$this->db->select('*');
		return $this->db->get_where('tb_data_santri',['id' => $id_data_santri])->row();
	}

	public function reminder($id_data_transaksi, $id_data_santri)
	{


		$data = $this->get_data_santri_by_id($id_data_santri);
		$data_transaksi = $this->m_input_transaksi->get_tr_santri($id_data_transaksi);

		$no_hp = $data->no_hp;
		$bulan = $data_transaksi->nama_bulan;
		$nominal = $data_transaksi->nominal;

		if(substr(trim($no_hp), 0, 1)=='0'){
			$hp = '62'.substr(trim($no_hp), 1);
		}else {
			$hp = $no_hp;
		}
		// echo $hp;
		// die();

		$nama = $data->nama;
		$enter = '%0A';
		$text = 'Assalamualaikum kang '. $nama .''.$enter.$enter.'Kami dari bendahara ingin memberitahukan bahwa sudah waktunya membayar syahriah bulan '.$bulan.' ini sebesar '.$nominal.$enter.$enter.'Untuk datanya bisa diakses di https://www.sppinay.com/'.$enter.$enter.'Terimakasih'.$enter.'Ttd'.$enter.$enter.'*Bendahara*';
		
		$url = prep_url('https://api.whatsapp.com/send?phone='.$hp.'&text='.$text);
		redirect($url);
	}
}


// simpan lab
