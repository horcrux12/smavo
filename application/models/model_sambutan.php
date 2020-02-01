<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_sambutan extends CI_model {

		public function getdata($key) // memanggil data sambutan

		{

			$this->db->where('id',$key);
			$hasil = $this->db->get('tb_sambutan');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data sambutan
		{

			$this->db->where('id',$key);
			$this->db->update('tb_sambutan',$data);
		}
		
		public function getinsert($data) // memasukkan data sambutan
		{
			$this->db->insert('tb_sambutan',$data);

		}

		public function getdelete($key) // menghapus data sambutan
		{
			$this->db->where('id',$key);
			$this->db->delete('tb_sambutan');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_sambutan.id,2) as id_sambutan', FALSE);
		  $this->db->order_by('id_sambutan','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_sambutan');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_sambutan) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "KM".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }


		 
        
		public function tampil_sambutan() 
		{

			$data	= " SELECT

						tb_sambutan.id_guru,
						tb_guru.id_guru,
						tb_guru.nama_lengkap,
						tb_jabatan.id_jabatan,
						tb_jabatan.nama_jabatan,
						tb_sambutan.sambutan,
						tb_sambutan.foto


						FROM 
						tb_guru,tb_jabatan,tb_sambutan

						WHERE 

						tb_jabatan.id_jabatan=tb_sambutan.id_jabatan and 
						tb_guru.id_guru=tb_sambutan.id_guru and tb_jabatan.id_jabatan='JBT001'";

			return $this->db->query($data);

	}
}