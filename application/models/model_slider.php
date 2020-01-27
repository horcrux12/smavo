<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_slider extends CI_model {

		public function getdata($key) // memanggil data slider

		{

			$this->db->where('id',$key);
			$hasil = $this->db->get('tb_slider');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data slider
		{

			$this->db->where('id',$key);
			$this->db->update('tb_slider',$data);
		}
		
		public function getinsert($data) // memasukkan data slider
		{
			$this->db->insert('tb_slider',$data);

		}

		public function getdelete($key) // menghapus data slider
		{
			$this->db->where('id',$key);
			$this->db->delete('tb_slider');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_slider.id,2) as id_slider', FALSE);
		  $this->db->order_by('id_slider','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_slider');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_slider) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KM".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }


		 public function tampil_slider() 
		{
            $this->db->select('*');
            $this->db->from('tb_slider');
            $query = $this->db->get();
		    return $query;
        }
        
		public function tampil_kategori_slider($where){
			$this->db->select('
				tb_slider.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
			');
			$this->db->from('tb_slider');
			$this->db->where('tb_slider.id_kat_artikel',$where);
			$this->db->join('tb_kat_artikel','tb_slider.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user','tb_slider.penulis = tb_user.id_user');
			$query = $this->db->get();
			return $query;
		}
		
}