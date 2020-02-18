<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_kepsek extends CI_model {

		public function getdata($key) // memanggil data berita

		{

			$this->db->where('id',$key);
			$hasil = $this->db->get('tb_kepsek');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data berita
		{

			$this->db->where('id',$key);
			$this->db->update('tb_kepsek',$data);
		}
		
		public function getinsert($data) // memasukkan data berita
		{
			$this->db->insert('tb_kepsek',$data);

		}

		public function getdelete($key) // menghapus data berita
		{
			$this->db->where('id',$key);
			$this->db->delete('tb_kepsek');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_kepsek.id,2) as id_kepsek', FALSE);
		  $this->db->order_by('id_kepsek','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_kepsek');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_kepsek) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KM".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }


		 public function tampil_kepsek() 
		{
            $this->db->select('*');
            $this->db->from('tb_kepsek');
            $query = $this->db->get();
		    return $query;
        }
        
		public function tampil_kategori_kepsek($where){
			$this->db->select('
				tb_kepsek.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
			');
			$this->db->from('tb_berita');
			$this->db->where('tb_berita.id_kat_artikel',$where);
			$this->db->join('tb_kat_artikel','tb_berita.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user','tb_berita.penulis = tb_user.id_user');
			$query = $this->db->get();
			return $query;
		}
		
}