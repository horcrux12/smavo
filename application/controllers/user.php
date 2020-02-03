	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user extends CI_Controller {

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
		</script>';
			$konten['konten'] 		= 'user/view_user';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data user';
			$konten['data']			= $this->db->get('tb_user');
			$this->load->view('v_dashboard',$konten);

		}


		public function tambah() // tambah data user
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />';
			$konten['js']			= '
			<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
			<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
			<script src="'.base_url().'assets/js/autosize.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
			
			<script>
				jQuery(function($) {
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
			$konten['konten'] 		= 'user/form_tambah_user';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data user';
			$konten['kode'] = $this->model_user->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}


		public function simpan() // simpan data user
		{
		  $config['upload_path'] 		= './assets/photo/user/';
	      $config['allowed_types'] 		= 'gif|jpg|jpeg|png';
		  $config['encrypt_name']		= FALSE;
		  $config['overwrite']			= true;
		
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	 
	      if ( ! $this->upload->do_upload('file_name')){
	        $this->session->set_flashdata('info_gagal','Foto Gagal Diupload');
	         redirect('user'); 
	      } else {
			
			$key = $this->input->post('kode');
			$data['id_user'] 					= $this->input->post('kode');
			$data['nama'] 						= $this->input->post('nama');
			$data['username'] 					= $this->input->post('user');
			$data['password'] 					= MD5($this->input->post('pass'));
			$data['hak_akses'] 					= $this->input->post('hak');
			$data['foto'] 						= $this->upload->data('file_name'); 
			
			
			$this->load->model('model_user');
			$query = $this->model_user->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_user->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
			}
			else
			{
				$this->model_user->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
			}
			redirect('admin/administrator');
		

		} 


	}

		public function ubah($id) // Mengubah data user
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />';
			$konten['js']			= '
			<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
			<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
			<script src="'.base_url().'assets/js/autosize.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
			
			<script>
				jQuery(function($) {
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
			$konten['konten'] 		= 'user/form_ubah_user';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data user';
			$key = $id;
			$this->db->where('id_user',$key);
			$query = $this->db->get('tb_user');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_user;
						$konten['nama']			= $row->nama;
						$konten['user']			= $row->username;
						$konten['pass']			= $row->password;
						$konten['hak']			= $row->hak_akses;
						$konten['file_name']	= $row->foto;
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nama']			= "";
						$konten['user']			= "";
						$konten['pass']			= "";
						$konten['hak']			= "";
						$konten['file_name']	= "";
						
			
			} 
				$this->load->view('v_dashboard',$konten);
}

		public function detail($id) // Detail data user
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'user/view_detail_user';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail user';
			
			$key = $id;
			$this->db->where('id_user',$key);
			$query = $this->db->get('tb_user');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_user;
						$konten['nama']			= $row->nama;
						$konten['user']			= $row->username;
						$konten['pass']			= $row->password;
						$konten['hak']			= $row->hak_akses;
						$konten['file_name']	= $row->foto;
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nama']			= "";
						$konten['user']			= "";
						$konten['pass']			= "";
						$konten['hak']			= "";
						$konten['file_name']	= "";
						
			
			} 
			
			$this->load->view('v_dashboard',$konten);
		
			} 


		public function delete($id)
		{
			
			$this->load->model('model_user');
			$key = $id;
			$this->db->where('id_user',$key);
			$query = $this->db->get('tb_user');
		
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/photo/user/'.$query[0]->foto);
					$this->model_user->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/administrator');

} 
	
	}	