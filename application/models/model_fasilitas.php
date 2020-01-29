
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_fasilitas extends CI_model {

		public function getdata($key) // memanggil data fasilitas

		{

			$this->db->where('id',$key);
			$hasil = $this->db->get('tb_fasilitas');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data fasilitas
		{

			$this->db->where('id',$key);
			$this->db->update('tb_fasilitas',$data);
		}
		
		public function getinsert($data) // memasukkan data fasilitas
		{
			$this->db->insert('tb_fasilitas',$data);

		}

		public function getdelete($key) // menghapus data fasilitas
		{
			$this->db->where('id',$key);
			$this->db->delete('tb_fasilitas');
		}

		public function kode(){
		  $this->db->select('RIGHT(tb_fasilitas.id,2) as id', FALSE);
		  $this->db->order_by('id','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_fasilitas');  //cek dulu apakah ada sudah ada kode di tabel.    
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
		 
		 public function tampil_kategori_fasilitas($where){
			$this->db->select('
				tb_fasilitas.*, tb_kat_fasilitas.id AS id_fasilitas, tb_kat_fasilitas.nama_fasilitas');
			$this->db->from('tb_fasilitas');
			$this->db->where('tb_fasilitas.id_kat_fasilitas',$where);
			$this->db->join('tb_kat_fasilitas','tb_fasilitas.id_kat_fasilitas = tb_kat_fasilitas.id');
			$query = $this->db->get();
			return $query;
		}

		public function fasilitas_all() 
		{

			$data	= " SELECT

						tb_fasilitas.id,
						tb_kat_fasilitas.nama_fasilitas,
						tb_fasilitas.foto,
						tb_kat_fasilitas.deskripsi

						FROM 
						tb_fasilitas, tb_kat_fasilitas

						WHERE 

						tb_kat_fasilitas.id=tb_fasilitas.id_kat_fasilitas";

			return $this->db->query($data);

	}
		
}
