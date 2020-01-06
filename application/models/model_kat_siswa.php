
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_kat_siswa extends CI_model {

		public function getdata($key) // memanggil data siswa

		{

			$this->db->where('id_kat_siswa',$key);
			$hasil = $this->db->get('tb_kat_siswa');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data siswa
		{

			$this->db->where('id_kat_siswa',$key);
			$this->db->update('tb_kat_siswa',$data);
		}
		
		public function getinsert($data) // memasukkan data siswa
		{
			$this->db->insert('tb_kat_siswa',$data);

		}

		public function getdelete($key) // menghapus data siswa
		{
			$this->db->where('id_kat_siswa',$key);
			$this->db->delete('tb_kat_siswa');
		}

		public function kode(){
		  $this->db->select('RIGHT(tb_kat_siswa.id_kat_siswa,2) as id_kat_siswa', FALSE);
		  $this->db->order_by('id_kat_siswa','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_kat_siswa');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_kat_siswa) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KTS".$batas;  //format kode
			  return $kodetampil;  
		 }		
}
