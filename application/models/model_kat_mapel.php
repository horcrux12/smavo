
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_kat_mapel extends CI_model {

		public function getdata($key) // memanggil data mapel

		{

			$this->db->where('id_mapel',$key);
			$hasil = $this->db->get('tb_mapel');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data mapel
		{

			$this->db->where('id_mapel',$key);
			$this->db->update('tb_mapel',$data);
		}
		
		public function getinsert($data) // memasukkan data mapel
		{
			$this->db->insert('tb_mapel',$data);

		}

		public function getdelete($key) // menghapus data mapel
		{
			$this->db->where('id_mapel',$key);
			$this->db->delete('tb_mapel');
		}

		public function kode(){
		  $this->db->select('RIGHT(tb_mapel.id_mapel,2) as id_mapel', FALSE);
		  $this->db->order_by('id_mapel','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_mapel');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_mapel) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "MP".$batas;  //format kode
			  return $kodetampil;  
		 }		
}
