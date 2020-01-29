	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kat_fasilitas extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<script>alert('Waktu Anda Telah Habis,Silakan Login Terlebih Dahulu');
    	  document.location='http://localhost/smavo/login'</script>";
	
		}

	}
		
		public function index()
		{
			$konten['css']			= '';
			$konten['js']			= '
			<script src="'.base_url().'assets/js/jquery.dataTables.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.dataTables.bootstrap.min.js"></script>
			<script src="'.base_url().'assets/js/dataTables.buttons.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.flash.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.html5.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.print.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.colVis.min.js"></script>
			<script src="'.base_url().'assets/js/dataTables.select.min.js"></script>
			<script src="'.base_url().'assets/plugins/sweetalert2/sweetalert2.min.js"></script>
			<script src="'.base_url().'assets/js/table.js"></script>';
			$konten['konten'] 		= 'kat_fasilitas/view_fasilitas';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data fasilitas';
			$konten['data']			= $this->db->get('tb_kat_fasilitas');
			$this->load->view('v_dashboard',$konten);

		}

		public function tambah() 
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
				<script>
				jQuery(function($){
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
			});
				</script>
				';
			$konten['konten'] 		= 'kat_fasilitas/form_tambah_kat_fasilitas';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data fasilitas';
			$konten['kode'] 		= $this->model_kat_fasilitas->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}

		public function ubah()
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
				<script>
				jQuery(function($){
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
			});
				</script>
				';
			$konten['konten'] 		= 'kat_fasilitas/ubah_kat_fasilitas';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data fasilitas';
			$key = $this->uri->segment(3);
			$this->db->where('id',$key);
			$query = $this->db->get('tb_kat_fasilitas');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						
						$konten['kode']			= $row->id;
						$konten['nama']			= $row->nama_fasilitas;
						$konten['isi']			= $row->deskripsi;
						// $konten['file_name']	= $row->foto;
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nama']			= "";
						$konten['isi']			= "";
						// $konten['file_name']    = "";
	
				}
			
			$this->load->view('v_dashboard',$konten);
		
			}

			//Upload image Summernote
		function upload_image(){
			if(isset($_FILES["image"]["name"])){
				$config['upload_path'] = './assets/photo/fasilitas/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('image')){
					$this->upload->display_errors();
					return FALSE;
				}else{
					$data = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/photo/fasilitas/'.$data['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= TRUE;
					$config['quality']= '60%';
					$config['width']= 800;
					$config['height']= 800;
					$config['new_image']= './assets/photo/fasilitas/'.$data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					echo base_url().'assets/photo/fasilitas/'.$data['file_name'];
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

		public function simpan()
		{
			// $config['upload_path'] 	= './assets/photo/fasilitas/';
			// $config['allowed_types'] 	= 'gif|jpg|jpeg|png';
			// $config['encrypt_name']	= FALSE;
		   
			// $this->load->library('upload', $config);
			// $this->upload->initialize($config);
			// $this->upload->do_upload('file_name');
	  
			$key = $this->input->post('kode');
			$data['id'] 				= $this->input->post('kode');
			$data['nama_fasilitas'] 			= $this->input->post('nama');
			$data['deskripsi'] 					= $this->input->post('isi');
			// $data['foto'] 						= $this->upload->data('file_name');
			
			
			$this->load->model('model_kat_fasilitas');
			$query = $this->model_kat_fasilitas->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_kat_fasilitas->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
				redirect('kat_fasilitas');
			}
			else
			{
				$this->model_kat_fasilitas->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
				redirect('kat_fasilitas');
			}
			
		}

		public function delete()
		{
			
			$this->load->model('model_kat_fasilitas');
			$key = $this->uri->segment(3);
			$this->db->where('id',$key);
			$query = $this->db->get('tb_kat_fasilitas');
		
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/photo/fasilitas/'.$query[0]->foto);
					$this->model_kat_fasilitas->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('kat_fasilitas');
	}


	public function Detail($id)
		{
			
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_fasilitas/view_detail_fasilitas';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail Data fasilitas';
			$key = $id;
			$konten['data']			= $this->model_dinamic->getWhere('tb_kat_fasilitas','id',$key);
			
			if($konten['data']->num_rows()>0)
			{

				foreach ($konten['data']->result() as $row )
					{
						
						$konten['kode']			= $row->id;
						$konten['nama']			= $row->nama_fasilitas;
						$konten['isi']			= $row->deskripsi;
						// $konten['file_name']	= $row->foto;
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nama']			= "";
						$konten['isi']			= "";
						// $konten['file_name']    = "";
	
				}
			
			$this->load->view('v_dashboard',$konten);
		
			}
	
}	