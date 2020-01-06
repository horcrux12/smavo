	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_siswa extends CI_model {

		public function getdata($key) // memanggil data siswa

		{

			$this->db->where('id_artikel',$key);
			$hasil = $this->db->get('tb_siswa');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data siswa
		{

			$this->db->where('id_artikel',$key);
			$this->db->update('tb_siswa',$data);
		}
		
		public function getinsert($data) // memasukkan data siswa
		{
			$this->db->insert('tb_siswa',$data);

		}

		public function getdelete($key) // menghapus data siswa
		{
			$this->db->where('id_artikel',$key);
			$this->db->delete('tb_siswa');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_siswa.id_artikel,2) as id_artikel', FALSE);
		  $this->db->order_by('id_artikel','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_siswa');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_artikel) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "SW".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }


		 public function tampil_siswa() // join tb_jabatan, tb_siswa dan tb_mapel
		{

			$data	= " SELECT

						tb_siswa.id_artikel,
						

						FROM 
						tb_siswa,tb_kat_artikel

						WHERE 

						tb_kat_artikel.id_kat_artikel=tb_siswa.id_kat_artikel";

			return $this->db->query($data);

	}
		
}
