	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_user extends CI_model {

		public function getdata($key) // memanggil data user

		{

			$this->db->where('id_user',$key);
			$hasil = $this->db->get('tb_user');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data user
		{

			$this->db->where('id_user',$key);
			$this->db->update('tb_user',$data);
		}
		
		public function getinsert($data) // memasukkan data user
		{
			$this->db->insert('tb_user',$data);

		}

		public function getdelete($key) // menghapus data user
		{
			$this->db->where('id_user',$key);
			$this->db->delete('tb_user');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_user.id_user,2) as id_user', FALSE);
		  $this->db->order_by('id_user','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_user');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_user) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "USR".$batas;  //format kode
			  return $kodetampil;  
		 }

}
