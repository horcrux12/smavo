	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Berita extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<script>;
    	  document.location='http://localhost/smavo/login'</script>";

	
		}
		$this->load->library('upload');
	}
		
		public function index()
		{
			$konten['css']			= '';
			$konten['konten'] 		= 'berita/view_berita';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data berita';
			$konten['data']			= $this->db->get('tb_berita');
			$konten['js']			= '';

			$konten['data']			= $this->model_berita->tampil_berita(); 
			$this->load->view('v_dashboard',$konten);

		}


		public function tambah() // tambah data berita
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/summernote-master/dist/summernote-lite.min.css" />
				';
			$konten['konten'] 		= 'berita/form_tambah_berita';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data berita';
			$konten['kode'] 		= $this->model_berita->kode(); //tambah kode otomatis
			$konten['js']			= '
				<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
				<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
				<script src="'.base_url().'assets/js/autosize.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
				<script src="'.base_url().'assets/summernote-master/dist/summernote-lite.js"></script>
				// <script src="'.base_url().'assets/summernote-master/dist/summernote-cleaner.js"></script>
				<script>
				$("#id-input-file-1 , #id-input-file-2").ace_file_input({
					no_file:"No File ...",
					btn_choose:"Choose",
					btn_change:"Change",
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:"gif|png|jpg|jpeg"
					//blacklist:"exe|php"
					//onchange:""
					//
				});

				$("#id-input-file-3").ace_file_input({
					style: "well",
					btn_choose: "Drop files here or click to choose",
					btn_change: null,
					no_icon: "ace-icon fa fa-cloud-upload",
					droppable: true,
					thumbnail: "small"//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = "FILE_LOAD_FAILED",
						//2 = "IMAGE_LOAD_FAILED",
						//3 = "THUMBNAIL_FAILED"
						//alert(error_code);
					}
			
				}).on("change", function(){
					//console.log($(this).data("ace_input_files"));
					//console.log($(this).data("ace_input_method"));
				});
				</script>
				';
			$this->load->view('v_dashboard',$konten);
		}

		//Upload image Summernote
		function upload_image(){
			if(isset($_FILES["image"]["name"])){
				$config['upload_path'] = './assets/photo/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('image')){
					$this->upload->display_errors();
					return FALSE;
				}else{
					$data = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/photo/'.$data['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= TRUE;
					$config['quality']= '60%';
					$config['width']= 800;
					$config['height']= 800;
					$config['new_image']= './assets/photo/'.$data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					echo base_url().'assets/photo/'.$data['file_name'];
				}
			}
		}
	
		//Delete image summernote
		function delete_image(){
			$src = $this->input->post('src');
			$file_name = str_replace(base_url(), '', $src);
			if(unlink($file_name)){
				echo 'File Delete Successfully';
			}
		}

		public function simpan() // simpan data berita
		{
			
		  $config['upload_path'] 	= './assets/photo/';
		  $config['allowed_types'] 	= 'gif|jpg|jpeg|png';
		//   $config['allowed_types'] 	= 'docx|pdf|xlxs';
	      $config['encrypt_name']	= FALSE;
	     
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	 
	      if ( ! $this->upload->do_upload('file_name')){
	        $this->session->set_flashdata('info_gagal','Foto Gagal Diupload atau foto melebihi 2500x2500 pixel. Silakan pilih foto yang lain');
	         redirect('berita/tambah'); 
	      } else {

			$key = $this->input->post('kode');
			$data['id_berita'] 			= $this->input->post('kode');
			$data['id_kat_artikel'] 	= $this->input->post('kode_kat');
			$data['judul'] 				= $this->input->post('judul');
			$data['penulis'] 			= $this->input->post('nama');
			$data['deskripsi'] 			= $this->input->post('isi');
			$data['foto'] 				= $this->upload->data('file_name');	
			
			$this->load->model('model_berita');
			$query = $this->model_berita->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_berita->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
			}
			else
			{
				// print_r($data);
				$this->model_berita->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
			}
			redirect('berita');
		}
	}

		public function ubah() // Mengubah data berita
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/summernote-master/dist/summernote-lite.min.css" />
				';
			$konten['js']			= '
				<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
				<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
				<script src="'.base_url().'assets/js/autosize.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
				<script src="'.base_url().'assets/summernote-master/dist/summernote-lite.js"></script>
				// <script src="'.base_url().'assets/summernote-master/dist/summernote-cleaner.js"></script>
				<script>
				$("#id-input-file-1 , #id-input-file-2").ace_file_input({
					no_file:"No File ...",
					btn_choose:"Choose",
					btn_change:"Change",
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:"gif|png|jpg|jpeg"
					//blacklist:"exe|php"
					//onchange:""
					//
				});

				$("#id-input-file-3").ace_file_input({
					style: "well",
					btn_choose: "Drop files here or click to choose",
					btn_change: null,
					no_icon: "ace-icon fa fa-cloud-upload",
					droppable: true,
					thumbnail: "small"//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = "FILE_LOAD_FAILED",
						//2 = "IMAGE_LOAD_FAILED",
						//3 = "THUMBNAIL_FAILED"
						//alert(error_code);
					}
			
				}).on("change", function(){
					//console.log($(this).data("ace_input_files"));
					//console.log($(this).data("ace_input_method"));
				});
				</script>
				';
			$konten['konten'] 		= 'berita/form_ubah_berita';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data berita';
			$key = $this->uri->segment(3);
			$this->db->where('id_berita',$key);
			$query = $this->db->get('tb_berita');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_berita;
						$konten['kode_kat']		= $row->id_kat_artikel;
						$konten['judul']		= $row->judul;
						$konten['user']			= $row->penulis;
						$konten['isi']			= $row->deskripsi;
						$konten['file']			= $row->foto;
						// $konten['tanggal']		= $row->tgl_update;
						
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['kode_kat']		= "";
						$konten['judul']		= "";
						$konten['user']			= "";
						$konten['isi']			= "";
						$konten['file']			= "";
						// $konten['tanggal']		= "";
						
						
			
			} 
				$this->load->view('v_dashboard',$konten);
}

		public function detail() // Detail data berita
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'berita/view_detail_berita';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail berita';
			$konten['data']			= $this->model_berita->tampil_berita();
			$key = $this->uri->segment(3);
			$this->db->where('id_berita',$key);
			$query = $this->db->get('tb_berita');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_berita;
						$konten['kode_kat']		= $row->id_kat_artikel;
						$konten['judul']		= $row->judul;
						$konten['user']			= $row->penulis;
						$konten['isi']			= $row->deskripsi;
						$konten['file']			= $row->foto;
				
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['kode_kat']		= "";
						$konten['judul']		= "";
						$konten['user']			= "";
						$konten['isi']			= "";
						$konten['file']			= "";
				}
			
			$this->load->view('v_dashboard',$konten);
		
			} 


		public function delete()
		{
			
			$this->load->model('model_berita');
			$key = $this->uri->segment(3);
			$this->db->where('id_berita',$key);
			$query = $this->db->get('tb_berita');
		
			if($query->num_rows()>0)
				{

					$this->model_berita->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('berita');



} 
	}	