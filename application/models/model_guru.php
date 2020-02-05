	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_guru extends CI_model {

		public function getdata($key) // memanggil data guru

		{

			$this->db->where('id_guru',$key);
			$hasil = $this->db->get('tb_guru');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data guru
		{

			$this->db->where('id_guru',$key);
			$this->db->update('tb_guru',$data);
		}
		
		public function getinsert($data) // memasukkan data guru
		{
			$this->db->insert('tb_guru',$data);

		}

		public function getdelete($key) // menghapus data guru
		{
			$this->db->where('id_guru',$key);
			$this->db->delete('tb_guru');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_guru.id_guru,2) as id_guru', FALSE);
		  $this->db->order_by('id_guru','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_guru');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_guru) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  // $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "GR".$batas;  //format kode
			  return $kodetampil;  
		 }


	// 	 public function guru() // join tb_jabatan, tb_guru dan tb_mapel
	// 	{

	// 		$data	= " SELECT

	// 					tb_guru.id_guru,
	// 					tb_guru.nip,
	// 					tb_guru.nama_lengkap,
	// 					tb_guru.tempat_lahir,
	// 					tb_guru.tgl_lahir,
	// 					tb_jabatan.nama_jabatan,
	// 					tb_mapel.nama_mapel,
	// 					tb_guru.foto


	// 					FROM 
	// 					tb_guru,tb_jabatan,tb_mapel

	// 					WHERE 

	// 					tb_jabatan.id_jabatan=tb_guru.id_jabatan and 
	// 					tb_mapel.id_mapel=tb_guru.id_mapel";

	// 		return $this->db->query($data);

	// }

	public function tampil_guru() 
		{
			$this->db->select('
			tb_guru.*, tb_mapel.id_mapel AS id_mapel, tb_mapel.nama_mapel, tb_jabatan.id_jabatan AS jabatan, tb_jabatan.nama_jabatan
		');
		$this->db->from('tb_guru');
		// $this->db->order_by('id_guru','DESC');
		$this->db->join('tb_mapel','tb_guru.id_mapel = tb_mapel.id_mapel');
		$this->db->join('tb_jabatan','tb_guru.id_jabatan = tb_jabatan.id_jabatan');
		$query = $this->db->get();
		return $query;
		}
	
	public function GetDataWhere($where){
		$this->db->select('
			tb_guru.*, tb_mapel.id_mapel AS id_mapel, tb_mapel.nama_mapel, tb_jabatan.id_jabatan AS jabatan, tb_jabatan.nama_jabatan
		');
		$this->db->from('tb_guru');
		// $this->db->order_by('id_guru','DESC');
		$this->db->join('tb_mapel','tb_guru.id_mapel = tb_mapel.id_mapel');
		$this->db->join('tb_jabatan','tb_guru.id_jabatan = tb_jabatan.id_jabatan');
		$this->db->where('tb_guru.id_jabatan',$where);
		$query = $this->db->get();
		return $query;
	}
		
}
