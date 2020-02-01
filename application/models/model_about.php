<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_about extends CI_model {

		public function getdata($key) // memanggil data about

		{

			$this->db->where('id',$key);
			$hasil = $this->db->get('tb_about');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data about
		{

			$this->db->where('id',$key);
			$this->db->update('tb_about',$data);
		}
		
		public function getinsert($data) // memasukkan data about
		{
			$this->db->insert('tb_about',$data);

		}

		public function getdelete($key) // menghapus data about
		{
			$this->db->where('id',$key);
			$this->db->delete('tb_about');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_about.id,2) as id_about', FALSE);
		  $this->db->order_by('id_about','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_about');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_about) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KM".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }


		 public function tampil_about() 
		{
            $this->db->select('*');
            $this->db->from('tb_about');
            $query = $this->db->get();
		    return $query;
        }
        
		public function tampil_kategori_about($where){
			$this->db->select('
				tb_about.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
			');
			$this->db->from('tb_about');
			$this->db->where('tb_about.id_kat_artikel',$where);
			$this->db->join('tb_kat_artikel','tb_about.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user','tb_about.penulis = tb_user.id_user');
			$query = $this->db->get();
			return $query;
		}
		
}