	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Fasilitas extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
	echo "<script>;
		document.location='".base_url()."admin/login'</script>";

	
		}

	}
		
		public function index()
		{
			$konten['css']			= '<link rel="stylesheet" href="'.base_url().'assets/css/colorbox.min.css" />';
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
			<script src="'.base_url().'assets/js/table.js"></script>
			<script src="'.base_url().'assets/js/jquery.colorbox.min.js"></script>
				<script type="text/javascript">
				jQuery(function($) {
					var $overflow = '."''".';
					var colorbox_params = {
						rel: "colorbox",
						reposition: true,
						scalePhotos: true,
						scrolling: false,
						previous: '."'".'<i class="ace-icon fa fa-arrow-left"></i>'."'".',
						next: '."'".'<i class="ace-icon fa fa-arrow-right"></i>'."'".',
						close: '."'".'&times;'."'".',
						current: '."'".'{current} of {total}'."'".',
						maxWidth: '."'".'100%'."'".',
						maxHeight: '."'".'100%'."'".',
						onOpen: function() {
							$overflow = document.body.style.overflow;
							document.body.style.overflow = '."'".'hidden'."'".';
						},
						onClosed: function() {
							document.body.style.overflow = $overflow;
						},
						onComplete: function() {
							$.colorbox.resize();
						}
					};
	
					$('."'".'.ace-thumbnails [data-rel="colorbox"]'."'".').colorbox(colorbox_params);
					$("#cboxLoadingGraphic").html("<i class='."'".'ace-icon fa fa-spinner orange fa-spin'."'".'></i>"); //let'."'".'s add a custom loading icon
	
	
					$(document).one('."'".'ajaxloadstart.page'."'".', function(e) {
						$('."'".'#colorbox, #cboxOverlay'."'".').remove();
					});
				})
			</script>
					
			<script>
				$(document).ready(function(){
					var ini = $("#nahini").text();
					if (ini = "Tidak Ada Data"){
						$('."'".'#btn-detail'."'".').removeAttr('."'".'href'."'".');
						$('."'".'#btn-ubah'."'".').removeAttr('."'".'href'."'".');
						$('."'".'#show-option1'."'".').removeAttr('."'".'href'."'".');
					}
				});
			</script> ';
			$konten['konten'] 		= 'fasilitas/view_fasilitas';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data fasilitas';
			$konten['data']			= $this->db->get('tb_fasilitas');
			$konten['data']			= $this->model_fasilitas->fasilitas_all();
			$this->load->view('v_dashboard',$konten);

		}

		public function tambah($id) 
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
			$konten['konten'] 		= 'fasilitas/form_tambah_fasilitas';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data fasilitas';
			$konten['kode'] 		= $this->model_fasilitas->kode(); //tambah kode otomatis
			$konten['data'] = $this->model_dinamic->getWhere ('tb_kat_fasilitas','id',$id)->result();
				

			$this->load->view('v_dashboard',$konten);
		}

		public function ubah($id)
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
			$konten['konten'] 		= 'fasilitas/ubah_fasilitas';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data fasilitas';
			$key = $id;
			$this->db->where('id',$key);
			$query = $this->db->get('tb_fasilitas');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						
						$konten['kode']			= $row->id;
						$konten['nama']			= $row->id_kat_fasilitas;
						// $konten['isi']			= $row->deskripsi;
						$konten['file_name']	= $row->foto;
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nama']			= "";
						// $konten['isi']			= "";
						$konten['file_name']    = "";
	
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
			$config['upload_path'] 	= './assets/photo/fasilitas/';
			$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
			$config['encrypt_name']	= FALSE;
		   
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('file_name');
	  
			$key = $this->input->post('kode');
			$data['id'] 				= $this->input->post('kode');
			$data['id_kat_fasilitas'] 			= $this->input->post('nama');
			// $data['deskripsi'] 					= $this->input->post('isi');
			$data['foto'] 						= $this->upload->data('file_name');
			
			
			$this->load->model('model_fasilitas');
			$query = $this->model_fasilitas->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_fasilitas->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
				redirect('admin/fasilitas');
			}
			else
			{
				$this->model_fasilitas->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
				redirect('admin/fasilitas');
			}
			
		}

		public function delete($id)
		{
			
			$this->load->model('model_fasilitas');
			$key = $id;
			$this->db->where('id',$key);
			$query = $this->db->get('tb_fasilitas');
		
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/photo/fasilitas/'.$query[0]->foto);
					$this->model_fasilitas->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/fasilitas');
	}


	public function Detail($id)
		{
			
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'fasilitas/view_detail_fasilitas';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail Data fasilitas';
			$konten['data']			= $this->model_fasilitas->fasilitas_all(); 
			$key = $id;
			$this->db->where('id',$key);
			$query = $this->db->get('tb_fasilitas');
		
			
			if($konten['data']->num_rows()>0)
			{

				foreach ($konten['data']->result() as $row )
					{
						
						$konten['kode']			= $row->id;
						$konten['nama']			= $row->id;
						$konten['file_name']	= $row->foto;
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nama']			= "";
						$konten['file_name']    = "";
	
				}
			
			$this->load->view('v_dashboard',$konten);
		
			}



			public function detail_kat_fasilitas($id){
				$konten['css']			= '<link rel="stylesheet" href="'.base_url().'assets/css/colorbox.min.css" />';
				$konten['konten'] 		= 'fasilitas/view_fasilitas_kategori';
				$konten['judul']		= 'Data fasilitas';
				
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
				<script src="'.base_url().'assets/js/table.js"></script>
				<script src="'.base_url().'assets/js/jquery.colorbox.min.js"></script>
				<script type="text/javascript">
				jQuery(function($) {
					var $overflow = '."''".';
					var colorbox_params = {
						rel: "colorbox",
						reposition: true,
						scalePhotos: true,
						scrolling: false,
						previous: '."'".'<i class="ace-icon fa fa-arrow-left"></i>'."'".',
						next: '."'".'<i class="ace-icon fa fa-arrow-right"></i>'."'".',
						close: '."'".'&times;'."'".',
						current: '."'".'{current} of {total}'."'".',
						maxWidth: '."'".'100%'."'".',
						maxHeight: '."'".'100%'."'".',
						onOpen: function() {
							$overflow = document.body.style.overflow;
							document.body.style.overflow = '."'".'hidden'."'".';
						},
						onClosed: function() {
							document.body.style.overflow = $overflow;
						},
						onComplete: function() {
							$.colorbox.resize();
						}
					};
	
					$('."'".'.ace-thumbnails [data-rel="colorbox"]'."'".').colorbox(colorbox_params);
					$("#cboxLoadingGraphic").html("<i class='."'".'ace-icon fa fa-spinner orange fa-spin'."'".'></i>"); //let'."'".'s add a custom loading icon
	
	
					$(document).one('."'".'ajaxloadstart.page'."'".', function(e) {
						$('."'".'#colorbox, #cboxOverlay'."'".').remove();
					});
				})
			</script>
					
			<script>
				$(document).ready(function(){
					var ini = $("#nahini").text();
					if (ini = "Tidak Ada Data"){
						$('."'".'#btn-detail'."'".').removeAttr('."'".'href'."'".');
						$('."'".'#btn-ubah'."'".').removeAttr('."'".'href'."'".');
						$('."'".'#show-option1'."'".').removeAttr('."'".'href'."'".');
					}
				});
			</script> ';
				
			$search  = array(
				"%20",
				"%5E",
				"%60" );
			$replace = array(
				" ",
				"^",
				"`");
				// $id = str_replace($search,$replace,$id);
				
				$data = $this->model_dinamic->getWhere ('tb_kat_fasilitas','nama_fasilitas',$id)->result();
	
				// $id = $data[0]->id;
	
				$konten['data']	= $this->model_fasilitas->tampil_kategori_fasilitas($id)->result();
	
				$subjudul = $this->model_dinamic->getWhere ('tb_kat_fasilitas','id',$id)->result();
				$konten['sub_judul'] 	= 'Data fasilitas - '.$subjudul[0]->nama_fasilitas.'';
				$konten['judul_tambah'] = $subjudul[0]->nama_fasilitas;
				$konten['kd_judul'] = $subjudul[0]->id;
				// print_r($konten['data']); 
				$this->load->view('v_dashboard',$konten);
		}

	
}	