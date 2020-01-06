	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class siswa extends CI_Controller {

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
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'siswa/view_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data siswa';
			$konten['data']			= $this->db->get('tb_siswa');
			// $konten['data']			= $this->model_siswa->tampil_siswa(); //
			$this->load->view('v_dashboard',$konten);

		}


		public function tambah() // tambah data siswa
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'siswa/form_tambah_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data siswa';
			$konten['kode'] = $this->model_siswa->kode(); //tambah kode otomatis
			
			$this->load->view('v_dashboard',$konten);
		}


		public function simpan() // simpan data siswa
		{
			//mengecek id terakhir pada tabel siswa
			$this->db->select('MAX(id_artikel) AS id_terakhir');
			$this->db->from('tb_siswa');
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
	      // print_r($files);
	      for ($i=0; $i < $count-1 ; $i++) { 

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
	      	'id_artikel' => $idRow_tempat1,

	      	'foto' => $tampil['filenames'][$i]
	      ];

	      $this->db->insert('tb_galeri',$datayang);
	      // print_r($datayang['foto']);
	 
	  //     if ( ! $this->upload->do_upload('file_name'.$i)){

	  //       $this->session->set_flashdata('info_gagal','Foto Gagal Diupload atau foto melebihi 2500x2500 pixel. Silakan pilih foto yang lain');
	  //        redirect('siswa/tambah'); 
	  //     } else {
			
			// $key = $this->input->post('kode');
			// $data['id_artikel'] 			= $this->input->post('kode');
			// $data['id_kat_artikel'] 	= $this->input->post('kode_kat');
			// $data['penulis'] 			= $this->input->post('nama');
			// $data['deskripsi'] 			= $this->input->post('isi');
			// $data['foto'] 				= $this->upload->data('file_name');	
			
			// $this->load->model('model_siswa');
			// $query = $this->model_siswa->getdata($key);
			// if($query->num_rows()>0)

			// {

			// 	$this->model_siswa->getupdate($key,$data);
			// 	$this->session->set_flashdata('info','Data berhasil di update');
			// }
			// else
			// {
			// 	$this->model_siswa->getinsert($data);
			// 	$this->session->set_flashdata('info','Data berhasil di simpan');
			// }
			// redirect('siswa');
		}
	}

// }




// 		public function ubah() // Mengubah data siswa
// 		{
			
// 			$konten['konten'] 		= 'siswa/form_ubah_siswa';
// 			$konten['judul']		= 'Data Master';
// 			$konten['sub_judul'] 	= 'Ubah Data siswa';
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_artikel',$key);
// 			$query = $this->db->get('tb_siswa');
// 			if($query->num_rows()>0)
// 			{

// 				foreach ($query->result() as $row )
// 					{
// 						$konten['kode']			= $row->id_artikel;
// 						$konten['kode_kat']		= $row->id_kat_siswa;
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

// 		public function detail() // Detail data siswa
// 		{
			
// 			$konten['konten'] 		= 'siswa/view_detail_siswa';
// 			$konten['judul']		= 'Data Master';
// 			$konten['sub_judul'] 	= 'Detail siswa';
// 			$konten['data']			= $this->model_siswa->tampil_siswa();
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_artikel',$key);
// 			$query = $this->db->get('tb_siswa');
// 			if($query->num_rows()>0)
// 			{

// 				foreach ($query->result() as $row )
// 					{
// 						$konten['kode']			= $row->id_artikel;
// 						$konten['kode_kat']		= $row->id_kat_siswa;
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
			
// 			$this->load->model('model_siswa');
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_artikel',$key);
// 			$query = $this->db->get('tb_siswa');
		
// 			if($query->num_rows()>0)
// 				{

// 					$this->model_siswa->getdelete($key);
// 					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
// 				}
// 				redirect('siswa');



// } 
	
	}	