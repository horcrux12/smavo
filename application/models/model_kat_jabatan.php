
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_kat_jabatan extends CI_model {

		public function getdata($key) // memanggil data jabatan

		{

			$this->db->where('id_jabatan',$key);
			$hasil = $this->db->get('tb_jabatan');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data jabatan
		{

			$this->db->where('id_jabatan',$key);
			$this->db->update('tb_jabatan',$data);
		}
		
		public function getinsert($data) // memasukkan data jabatan
		{
			$this->db->insert('tb_jabatan',$data);

		}

		public function getdelete($key) // menghapus data jabatan
		{
			$this->db->where('id_jabatan',$key);
			$this->db->delete('tb_jabatan');
		}

		public function kode(){
		  $this->db->select('RIGHT(tb_jabatan.id_jabatan,2) as id_jabatan', FALSE);
		  $this->db->order_by('id_jabatan','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_jabatan');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_jabatan) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "JBT".$batas;  //format kode
			  return $kodetampil;  
		 }		
}
