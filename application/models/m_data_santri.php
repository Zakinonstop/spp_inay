<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_data_santri extends CI_Model
{

	public function get_all_data($limit, $start)
	{
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		// $this->db->group_by("nama_kamar");
		$this->db->order_by('nama_kamar', 'ASC');
		return $this->db->get('tb_data_santri', $limit, $start)->result();
	}

	public function get_count_data()
	{
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		return $this->db->get('tb_data_santri')->num_rows();
	}

	public function count_search_data()
	{
		$keyword = $this->input->post('keyword');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->like('nama', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('nama_kamar', $keyword);
		$this->db->or_like('nama_kelas', $keyword);
		return $this->db->get('tb_data_santri')->num_rows();
	}

	public function get_search_data($limit, $start)
	{
		$keyword = $this->input->post('keyword');
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->like('nama', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('nama_kamar', $keyword);
		$this->db->or_like('nama_kelas', $keyword);
		$this->db->order_by('nama_kamar', 'ASC');
		return $this->db->get('tb_data_santri', $limit, $start)->result();
	}

	public function get_kamar()
	{
		return $this->db->get('tb_kamar')->result();
	}
	public function get_kelas()
	{
		return $this->db->get('tb_kelas')->result();
	}

	public function save($data)
	{
		return $this->db->insert('tb_data_santri', $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_data_santri', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tb_data_santri');
	}

	public function get_data($id)
	{
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		$this->db->where('id', $id);
		return $this->db->get('tb_data_santri')->row();
	}

	public function get_data_by_id($id)
	{
		$this->db->join('tb_kamar', 'tb_kamar.id_kamar = tb_data_santri.id_kamar');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_data_santri.id_kelas');
		return $this->db->get_where('tb_data_santri', ['id' => $id])->row();
	}

	public function send_wa($id)
	{
		$data = $this->get_data_by_id($id);
		$no_hp = $data->no_hp;
		$nis = $data->nis;
		$password = $data->password;
		// echo $no_hp;
		if(substr(trim($no_hp), 0, 1)=='0'){
			$hp = '62'.substr(trim($no_hp), 1);
		}else {
			$hp = $no_hp;
		}
		// echo '<br>';
		// echo $hp;
		// die();
		$nama = $data->nama;
		$enter = '%0A';
		$text = 'Assalamualaikum kang '. $nama .''.$enter.$enter.'Kami dari bendahara ingin memberitahukan bahwa akan diadakan *Sistem Pembayaran SPP Berbasis Website*'.$enter.$enter.'Maka dari itu silakan kang '.$nama.' bisa login ke link berikut www.sppinay.com dengan memasukkan :'.$enter.'NIS : '.$nis.$enter.'Password : '.$password.$enter.$enter.'Mohon jaga baik-baik NIS dan Password tersebut.'.$enter.$enter.'Terimakasih'.$enter.'Ttd'.$enter.$enter.'*Bendahara*';

		$url = prep_url('https://api.whatsapp.com/send?phone='.$hp.'&text='.$text);
		redirect($url);
	}
}
