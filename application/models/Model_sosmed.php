<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_sosmed extends CI_model {

		public function getdata($key) // memanggil data berita

		{

			$this->db->where('id',$key);
			$hasil = $this->db->get('tb_sosmed');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data berita
		{

			$this->db->where('id',$key);
			$this->db->update('tb_sosmed',$data);
		}
		
		public function getinsert($data) // memasukkan data berita
		{
			$this->db->insert('tb_sosmed',$data);

		}

		public function getdelete($key) // menghapus data berita
		{
			$this->db->where('id',$key);
			$this->db->delete('tb_sosmed');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_sosmed.id,2) as id_sosmed', FALSE);
		  $this->db->order_by('id_sosmed','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_sosmed');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_sosmed) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KM".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }


		 public function tampil_sosmed() 
		{
            $this->db->select('*');
            $this->db->from('tb_sosmed');
            $query = $this->db->get();
		    return $query;
        }
        
		public function tampil_kategori_sosmed($where){
			$this->db->select('
				tb_sosmed.*, tb_kat_artikel.id_kat_artikel AS id_kat_artikel, tb_kat_artikel.nama_kat_artikel, tb_user.id_user AS penulis, tb_user.nama
			');
			$this->db->from('tb_berita');
			$this->db->where('tb_berita.id_kat_artikel',$where);
			$this->db->join('tb_kat_artikel','tb_berita.id_kat_artikel = tb_kat_artikel.id_kat_artikel');
			$this->db->join('tb_user','tb_berita.penulis = tb_user.id_user');
			$query = $this->db->get();
			return $query;
		}
		
}