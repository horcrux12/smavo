	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_pesan extends CI_model {

		public function getdata($key) // memanggil data pesan

		{

			$this->db->where('id_kontak',$key);
			$hasil = $this->db->get('tb_kontak');
			
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data pesan
		{

			$this->db->where('id_kontak',$key);
			$this->db->update('tb_kontak',$data);
		}
		
		public function getinsert($data) // memasukkan data pesan
		{
			$this->db->insert('tb_kontak',$data);

		}

		public function getdelete($key) // menghapus data pesan
		{
			$this->db->where('id_kontak',$key);
			$this->db->delete('tb_kontak');
		}

}
