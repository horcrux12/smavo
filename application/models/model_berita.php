	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Model_berita extends CI_model
	{

		public function getdata($key) // memanggil data berita

		{

			$this->db->where('id_berita', $key);
			$hasil = $this->db->get('tb_berita');
			return $hasil;
		}

		public function getupdate($key, $data) // mengupdate (mengubah) data berita
		{

			$this->db->where('id_berita', $key);
			$this->db->update('tb_berita', $data);
		}

		public function getinsert($data) // memasukkan data berita
		{
			$this->db->insert('tb_berita', $data);
		}

		public function getdelete($key) // menghapus data berita
		{
			$this->db->where('id_berita', $key);
			$this->db->delete('tb_berita');
		}


		public function kode()
		{
			$this->db->select('RIGHT(tb_berita.id_berita,2) as id_berita', FALSE);
			$this->db->order_by('id_berita', 'DESC');
			$this->db->limit(1);
			$query = $this->db->get('tb_berita');  //cek dulu apakah ada sudah ada kode di tabel.    
			if ($query->num_rows() <> 0) {
				//cek kode jika telah tersedia    
				$data = $query->row();
				$kode = intval($data->id_berita) + 1;
			} else {
				$kode = 1;  //cek jika kode belum terdapat pada table
			}
			$tgl = date('dmY');
			$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodetampil = "BR" . $tgl . $batas;  //format kode
			return $kodetampil;
		}


		public function tampil_berita()
		{
			$this->db->select('
			tb_berita.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
		');
			$this->db->from('tb_berita');
			$this->db->order_by('tanggal', 'DESC');
			// $this->db->where('tb_berita.id_kat_artikel',$where);
			$this->db->join('tb_kat_artikel', 'tb_berita.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user', 'tb_berita.penulis = tb_user.id_user');
			$query = $this->db->get();
			return $query;
		}

		public function tampil_kategori_berita($where)
		{
			$this->db->select('
				tb_berita.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
			');
			$this->db->from('tb_berita');
			$this->db->order_by('tanggal', 'DESC');
			$this->db->where('tb_berita.id_kat_artikel', $where);
			$this->db->join('tb_kat_artikel', 'tb_berita.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user', 'tb_berita.penulis = tb_user.id_user');
			$query = $this->db->get();
			return $query;
		}

		public function tampil_berita_page($limit, $offset)
		{
			$this->db->select('
				tb_berita.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
			');
			$this->db->order_by('tanggal', 'DESC');
			// $this->db->where('tb_berita.id_kat_artikel',$where);
			$this->db->join('tb_kat_artikel', 'tb_berita.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user', 'tb_berita.penulis = tb_user.id_user');
			$query = $this->db->get('tb_berita', $limit, $offset)->result();
			return $query;
		}
		public function total_berita(){
			return $this->db->get('tb_berita')->num_rows();
		}

		public function tampil_kategori_berita_page($where,$limit,$offset)
		{
			$this->db->select('
				tb_berita.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
			');
			$this->db->order_by('tanggal', 'DESC');
			$this->db->where('tb_berita.id_kat_artikel', $where);
			$this->db->join('tb_kat_artikel', 'tb_berita.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user', 'tb_berita.penulis = tb_user.id_user');
			$query = $this->db->get('tb_berita', $limit, $offset);
			return $query;
		}

		public function total_kategori_berita($where)
		{
			$this->db->select('
				tb_berita.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
			');
			$this->db->from('tb_berita');
			$this->db->order_by('tanggal', 'DESC');
			$this->db->where('tb_berita.id_kat_artikel', $where);
			$this->db->join('tb_kat_artikel', 'tb_berita.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user', 'tb_berita.penulis = tb_user.id_user');
			$query = $this->db->get();
			return $query->num_rows();
		}
	}
