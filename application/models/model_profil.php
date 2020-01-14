	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_profil extends CI_model {

		public function getdata($key) // memanggil data profil

		{

			$this->db->where('id_info',$key);
			$hasil = $this->db->get('tb_profil');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data profil
		{

			$this->db->where('id_info',$key);
			$this->db->update('tb_profil',$data);
		}
		
		public function getinsert($data) // memasukkan data profil
		{
			$this->db->insert('tb_profil',$data);

		}

		public function getdelete($key) // menghapus data profil
		{
			$this->db->where('id_info',$key);
			$this->db->delete('tb_profil');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_profil.id_info,2) as id_info', FALSE);
		  $this->db->order_by('id_info','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_profil');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_info) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "PR".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }


		 public function tampil_profil() // 
		{

			$data	= " SELECT

						tb_profil.id_info,
						tb_kat_profil.nama_kat_profil,
						-- tb_user.nama_user,
						tb_profil.judul,
						tb_profil.deskripsi,
						tb_profil.foto,
						tb_profil.tgl_update
						

						FROM 
						tb_profil,tb_kat_profil,tb_user

						WHERE 

						tb_kat_profil.id_kat_profil=tb_profil.id_kat_profil";

			return $this->db->query($data);

	}
		
}
