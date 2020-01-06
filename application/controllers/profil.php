	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profil extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<script>;
    	  document.location='http://localhost/smavo/login'</script>";

	
		}

	}
		
		public function index()
		{
			$konten['konten'] 		= 'profil/view_profil';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data profil';
			$konten['data']			= $this->db->get('tb_profil');
			// $konten['data']			= $this->model_profil->tampil_profil(); //
			$this->load->view('v_dashboard',$konten);

		}


		public function tambah() // tambah data profil
		{
			
			$konten['konten'] 		= 'profil/form_tambah_profil';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data profil';
			$konten['kode'] = $this->model_profil->kode(); //tambah kode otomatis
			
			$this->load->view('v_dashboard',$konten);
		}


		public function simpan() // simpan data profil
		{
			//mengecek id terakhir pada tabel profil
			$this->db->select('MAX(id_profil) AS id_terakhir');
			$this->db->from('tb_profil');
			$query_terakhir = $this->db->get();
			$terakhir = $query_terakhir->row();
			$idRow=$terakhir->id_terakhir;
			$idRow_tempat=$idRow+1;

			//mengecek id terakhir pada tabel galery
			$this->db->select('MAX(id_galeri) AS id_terakhir');
			$this->db->from('tb_galeri');
			$query_terakhir1 = $this->db->get();
			$terakhir1 = $query_terakhir1->row();
			$idRow1=$terakhir1->id_terakhir;
			$idRow_tempat1=$idRow1+1;


      	$count = count($_FILES['file_name']['tmp_name']);
      		$files = $_FILES['file_name'];
    			$config=array(
    					'upload_path' => './assets/photo/',
    					'allowed_types' => 'gif|jpg|jpeg|png'		
    				);
	      print_r($files);
	      for ($i=0; $i < $count ; $i++) { 

	      	$_FILES['file']['name'] 		= $files['name'][$i];
	      	$_FILES['file']['type'] 		= $files['type'][$i];
	      	$_FILES['file']['tmp_name'] 	= $files['tmp_name'][$i];
	      	$_FILES['file']['error'] 		= $files['error'][$i];
	      	$_FILES['file']['size'] 		= $files['size'][$i];

	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	      $this->upload->do_upload('file');
	      $datagambar = $this->upload->data();
	      $tampil['filenames'][] = $datagambar['file_name'];
	      $datayang = [
	      	'id_profil' => $idRow_tempat,
	      	'foto' => $tampil['filenames'][$i]
	      ];
	      print_r($datayang['foto']);
	 
	  //     if ( ! $this->upload->do_upload('file_name'.$i)){

	  //       $this->session->set_flashdata('info_gagal','Foto Gagal Diupload atau foto melebihi 2500x2500 pixel. Silakan pilih foto yang lain');
	  //        redirect('profil/tambah'); 
	  //     } else {
			
			// $key = $this->input->post('kode');
			// $data['id_profil'] 			= $this->input->post('kode');
			// $data['id_kat_artikel'] 	= $this->input->post('kode_kat');
			// $data['penulis'] 			= $this->input->post('nama');
			// $data['deskripsi'] 			= $this->input->post('isi');
			// $data['foto'] 				= $this->upload->data('file_name');	
			
			// $this->load->model('model_profil');
			// $query = $this->model_profil->getdata($key);
			// if($query->num_rows()>0)

			// {

			// 	$this->model_profil->getupdate($key,$data);
			// 	$this->session->set_flashdata('info','Data berhasil di update');
			// }
			// else
			// {
			// 	$this->model_profil->getinsert($data);
			// 	$this->session->set_flashdata('info','Data berhasil di simpan');
			// }
			// redirect('profil');
		}
	}

// }




// 		public function ubah() // Mengubah data profil
// 		{
			
// 			$konten['konten'] 		= 'profil/form_ubah_profil';
// 			$konten['judul']		= 'Data Master';
// 			$konten['sub_judul'] 	= 'Ubah Data profil';
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_profil',$key);
// 			$query = $this->db->get('tb_profil');
// 			if($query->num_rows()>0)
// 			{

// 				foreach ($query->result() as $row )
// 					{
// 						$konten['kode']			= $row->id_profil;
// 						$konten['kode_kat']		= $row->id_kat_profil;
// 						$konten['user']			= $row->penulis;
// 						$konten['isi']			= $row->deskripsi;
// 						$konten['file']			= $row->foto;
// 						// $konten['tanggal']		= $row->tgl_update;
						
						
// 					}
// 				}
// 				else
// 				{
// 						$konten['kode']			= "";
// 						$konten['kode_kat']		= "";
// 						$konten['user']			= "";
// 						$konten['isi']			= "";
// 						$konten['file']			= "";
// 						// $konten['tanggal']		= "";
						
						
			
// 			} 
// 				$this->load->view('v_dashboard',$konten);
// }

// 		public function detail() // Detail data profil
// 		{
			
// 			$konten['konten'] 		= 'profil/view_detail_profil';
// 			$konten['judul']		= 'Data Master';
// 			$konten['sub_judul'] 	= 'Detail profil';
// 			$konten['data']			= $this->model_profil->tampil_profil();
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_profil',$key);
// 			$query = $this->db->get('tb_profil');
// 			if($query->num_rows()>0)
// 			{

// 				foreach ($query->result() as $row )
// 					{
// 						$konten['kode']			= $row->id_profil;
// 						$konten['kode_kat']		= $row->id_kat_profil;
// 						$konten['user']			= $row->penulis;
// 						$konten['isi']			= $row->deskripsi;
// 						$konten['file']			= $row->foto;
// 						// $konten['tanggal']		= $row->tgl_update;
						
						
						
// 					}
// 				}
// 				else
// 				{
// 						$konten['kode']			= "";
// 						$konten['kode_kat']		= "";
// 						$konten['user']			= "";
// 						$konten['isi']			= "";
// 						$konten['file']			= "";
// 						// $konten['tanggal']		= "";
// 				}
			
// 			$this->load->view('v_dashboard',$konten);
		
// 			} 


// 		public function delete()
// 		{
			
// 			$this->load->model('model_profil');
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_profil',$key);
// 			$query = $this->db->get('tb_profil');
		
// 			if($query->num_rows()>0)
// 				{

// 					$this->model_profil->getdelete($key);
// 					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
// 				}
// 				redirect('profil');



// } 
	
	}	