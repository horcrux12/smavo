
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_kat_organisasi extends CI_model {

		public function getdata($key) // memanggil data organisasi

		{

			$this->db->where('id_organisasi',$key);
			$hasil = $this->db->get('tb_organisasi');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data organisasi
		{

			$this->db->where('id_organisasi',$key);
			$this->db->update('tb_organisasi',$data);
		}
		
		public function getinsert($data) // memasukkan data organisasi
		{
			$this->db->insert('tb_organisasi',$data);

		}

		public function getdelete($key) // menghapus data organisasi
		{
			$this->db->where('id_organisasi',$key);
			$this->db->delete('tb_organisasi');
		}

		public function kode(){
		  $this->db->select('RIGHT(tb_organisasi.id_organisasi,2) as id_organisasi', FALSE);
		  $this->db->order_by('id_organisasi','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_organisasi');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_organisasi) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "ORG".$batas;  //format kode
			  return $kodetampil;  
		 }		
}
