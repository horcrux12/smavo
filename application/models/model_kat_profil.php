
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_kat_profil extends CI_model {

		public function getdata($key) // memanggil data profil

		{

			$this->db->where('id_kat_profil',$key);
			$hasil = $this->db->get('tb_kat_profil');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data profil
		{

			$this->db->where('id_kat_profil',$key);
			$this->db->update('tb_kat_profil',$data);
		}
		
		public function getinsert($data) // memasukkan data profil
		{
			$this->db->insert('tb_kat_profil',$data);

		}

		public function getdelete($key) // menghapus data profil
		{
			$this->db->where('id_kat_profil',$key);
			$this->db->delete('tb_kat_profil');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_kat_profil.id_kat_profil,2) as id_kat_profil', FALSE);
		  $this->db->order_by('id_kat_profil','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_kat_profil');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_kat_profil) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KTP".$batas;  //format kode
			  return $kodetampil;  
		 }

		 public function tampil_profil() 
		 {
 
			 $data	= " SELECT
 
						 tb_profil.id_info,
						 tb_kat_profil.nama_kat_profil,
						 tb_profil.id_user,
						 tb_profil.judul,
						 tb_profil.deskripsi,
						 tb_profil.foto

 
					 
						 FROM 
						 tb_profil,tb_kat_profil
 
						 WHERE 
 
						 tb_kat_profil.id_kat_profil=tb_profil.id_kat_profil";
 
			 return $this->db->query($data);
 
	 }
		
}
