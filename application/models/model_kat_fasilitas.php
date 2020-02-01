
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_kat_fasilitas extends CI_model {

		public function getdata($key) // memanggil data fasilitas

		{

			$this->db->where('id',$key);
			$hasil = $this->db->get('tb_kat_fasilitas');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data fasilitas
		{

			$this->db->where('id',$key);
			$this->db->update('tb_kat_fasilitas',$data);
		}
		
		public function getinsert($data) // memasukkan data fasilitas
		{
			$this->db->insert('tb_kat_fasilitas',$data);

		}

		public function getdelete($key) // menghapus data fasilitas
		{
			$this->db->where('id',$key);
			$this->db->delete('tb_kat_fasilitas');
		}

		public function kode(){
		  $this->db->select('RIGHT(tb_kat_fasilitas.id,2) as id', FALSE);
		  $this->db->order_by('id','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_kat_fasilitas');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "FSL".$batas;  //format kode
			  return $kodetampil;  
		 }		
}
