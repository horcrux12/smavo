
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_kat_artikel extends CI_model {

		public function getdata($key) // memanggil data artikel

		{

			$this->db->where('id_kat_artikel',$key);
			$hasil = $this->db->get('tb_kat_artikel');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data artikel
		{

			$this->db->where('id_kat_artikel',$key);
			$this->db->update('tb_kat_artikel',$data);
		}
		
		public function getinsert($data) // memasukkan data artikel
		{
			$this->db->insert('tb_kat_artikel',$data);

		}

		public function getdelete($key) // menghapus data artikel
		{
			$this->db->where('id_kat_artikel',$key);
			$this->db->delete('tb_kat_artikel');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_kat_artikel.id_kat_artikel,2) as id_kat_artikel', FALSE);
		  $this->db->order_by('id_kat_artikel','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_kat_artikel');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_kat_artikel) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KTA".$batas;  //format kode
			  return $kodetampil;  
		 }
		
}
