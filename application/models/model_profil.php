	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_profil extends CI_model {

		public function getdata($key) // memanggil data profil

		{

			$this->db->where('id_info',$key);
			$hasil = $this->db->get('tb_profil');
			return $hasil;
		}

		public function getupdate($key,$data) // mengupdate (mengubah) data profil
		{

			$this->db->where('id_info',$key);
			$this->db->update('tb_profil',$data);
		}
		
		public function getinsert($data) // memasukkan data profil
		{
			$this->db->insert('tb_profil',$data);

		}

		public function getdelete($key) // menghapus data profil
		{
			$this->db->where('id_info',$key);
			$this->db->delete('tb_profil');
		}


		public function kode(){
		  $this->db->select('RIGHT(tb_profil.id_info,2) as id_info', FALSE);
		  $this->db->order_by('id_info','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_profil');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id_info) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "PR".$tgl.$batas;  //format kode
			  return $kodetampil;  
		 }


	public function tampil_profil() // 
		{

		$this->db->select('tb_profil.*,tb_kat_profil.id_kat_profil as id_kat_profil, tb_kat_profil.nama_kat_profil, tb_user.id_user as id_user, tb_user.nama');
		$this->db->from('tb_profil');
		$this->db->join('tb_kat_profil','tb_kat_profil.id_kat_profil=tb_profil.id_kat_profil');
		$this->db->join('tb_user','tb_user.id_user=tb_profil.id_user');
		return $this->db->get();

	}

	public function tampil_profile_where($a){
		$this->db->select('tb_profil.*,tb_kat_profil.id_kat_profil as id_kat_profil, tb_kat_profil.nama_kat_profil, tb_user.id_user as id_user, tb_user.nama');
		$this->db->from('tb_profil');
		$this->db->join('tb_kat_profil','tb_kat_profil.id_kat_profil=tb_profil.id_kat_profil');
		$this->db->join('tb_user','tb_user.id_user=tb_profil.id_user');
		$this->db->where('tb_profil.id_kat_profil',$a);
		return $this->db->get();


	}
	
	public function count_karya($where){
		$this->db->select('*');
		$this->db->where('id_kat_siswa',$where);
		$query = $this->db->get('tb_siswa');
		return $query->num_rows();
	}

	public function karya_page($limit, $offset, $where){
		$this->db->select('*');
		$this->db->where('id_kat_siswa',$where);
		$query = $this->db->get('tb_siswa', $limit, $offset);
		return $query;
	}
}
