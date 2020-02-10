	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class siswa extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
	echo "<script>;
		document.location='".base_url()."admin/login'</script>";

	
		}

		$this->load->library('upload');
		$this->load->model('model_dinamic');
	}
		
		public function index()
		{
			$konten['css']		= '<link rel="stylesheet" href="'.base_url().'assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">';
			$konten['konten'] 		= 'siswa/view_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Artikel Siswa';
			$konten['data']			= $this->db->get('tb_siswa');
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

			$konten['data']	= $this->model_siswa->tampil_siswa()->result();
			
			
			// print_r($konten['data']); 
			$this->load->view('v_dashboard',$konten);
		}


		public function detail_kat_siswa($id){
				
				$konten['css']			= '';
				
				$search  = array(
					"%20",
					"%5E",
					"%60" );
				$replace = array(
					" ",
					"^",
					"`");
					$id = str_replace($search,$replace,$id);
				$konten ['js'] = ''; 
					
				if ($id == "Tata Tertib" || $id == "Aturan Akademik") {
					$konten['konten'] 		= 'siswa/view_details';
						
				}
				else {
					$konten['konten'] 		= 'siswa/view_siswa_kategori';
					$konten['js']			= ''.$konten['js'].'
				<script src="'.base_url().'assets/js/jquery.dataTables.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.dataTables.bootstrap.min.js"></script>
				<script src="'.base_url().'assets/js/dataTables.buttons.min.js"></script>
				<script src="'.base_url().'assets/js/buttons.flash.min.js"></script>
				<script src="'.base_url().'assets/js/buttons.html5.min.js"></script>
				<script src="'.base_url().'assets/js/buttons.print.min.js"></script>
				<script src="'.base_url().'assets/js/buttons.colVis.min.js"></script>
				<script src="'.base_url().'assets/js/dataTables.select.min.js"></script>
				<script src="'.base_url().'assets/js/table.js"></script>';
				}
			
				
				$konten['judul']		= 'Data Artikel Siswa';
				
				
				$data = $this->model_dinamic->getWhere ('tb_kat_siswa','nama_kat_siswa',$id)->result();
				$id = $data[0]->id_kat_siswa;
				$konten['data']	= $this->model_siswa->tampil_kategori_siswa($id)->result();
				$subjudul = $this->model_dinamic->getWhere ('tb_kat_siswa','id_kat_siswa',$id)->result();
				$konten['sub_judul'] 	= 'Data Artikel Siswa - '.$subjudul[0]->nama_kat_siswa.'';
				$konten['judul_tambah'] = $subjudul[0]->nama_kat_siswa;
				$konten['kd_judul'] = $subjudul[0]->id_kat_siswa;

				// print_r($konten['data']);
				$this->load->view('v_dashboard',$konten);
		}


		public function tambah($id) // tambah Data Artikel Siswa
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/summernote-master/dist/summernote-lite.min.css" />
				';
			$konten['konten'] 		= 'siswa/form_tambah_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data Artikel Siswa';
			$konten['kode'] 		= $this->model_siswa->kode(); //tambah kode otomatis
			$konten['js']			= '
				<script src="'.base_url().'assets/plugins/sweetalert2/sweetalert2.min.js"></script>
				<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
				<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
				<script src="'.base_url().'assets/js/autosize.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
				<script src="'.base_url().'assets/summernote-master/dist/summernote-lite.js"></script>
				<script src="'.base_url().'assets/js/inputtype.js"></script>';
			$konten['data'] = $this->model_dinamic->getWhere ('tb_kat_siswa','id_kat_siswa',$id)->result();
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



		public function simpan() // simpan Data Artikel Siswa
		{
			$config['upload_path'] 		= './assets/file/';
			$config['allowed_types'] 	= 'docx|pdf|xlsx|pptx|zip|rar';
			$config['encrypt_name']		= FALSE;
			$config['overwrite']		= true;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('file_download');

			$data['file'] 				= $this->upload->data('file_name');
			
			unset($config);

			$config['upload_path'] 		= './assets/photo/karya-cipta/';
			$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
			$config['encrypt_name']		= FALSE;
			$config['overwrite']		= true;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('file_name');
			if (!$this->upload->do_upload('file_name')) {
				$this->upload->display_errors();
				return FALSE;
			}
			else {
				$data['foto'] 				= $this->upload->data('file_name');
			$key = $this->input->post('kode');
			$data['id_artikel'] 		= $this->input->post('kode');
			$data['id_kat_siswa'] 		= $this->input->post('kd_siswa');
			if (! $this->input->post('org')) {
				$data['id_organisasi']	= null;
			}
			else{
				$data['id_organisasi'] =  $this->input->post('org');
			}
			$data['judul'] 				= $this->input->post('jdl');
			$data['id_user'] 			= $this->input->post('kd_user');
			$data['deskripsi'] 			= $this->input->post('isi');
			$data['foto'] 				= $this->upload->data('file_name');
			
			
			$this->load->model('model_siswa');
			$query = $this->model_siswa->getdata($key);
				if($query->num_rows()>0)
				{
					$this->model_siswa->getupdate($key,$data);
					$this->session->set_flashdata('info','Data berhasil di update');
				}
				else
				{
					// print_r($data);
					 $this->model_siswa->getinsert($data);
					// $this->model_dinamic->input_data($galeri,'tb_galeri');
					$this->session->set_flashdata('info','Data berhasil di simpan');
				}
			$doto = $this->model_dinamic->getWhere('tb_kat_siswa','id_kat_siswa',$this->input->post('kd_siswa'))->result();
			redirect('admin/siswa/kategori-siswa/'.$doto[0]->nama_kat_siswa.'','refresh');
			}
		}



		public function ambil_data_organisasi(){
			$data = $this->model_dinamic->getData('tb_organisasi');
			echo json_encode($data);
		}




		public function ubah($id) // Mengubah Data Artikel Siswa
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
			<script src="'.base_url().'assets2/contactform/contactform.js"></script>
			<script src="'.base_url().'assets/validation/dist/jquery.validate.js"></script>
			
			<script>
			jQuery(function($) {
				$( "#signupForm1" ).validate( {
					submitHandler: function () {
						alert( "submitted!" );
						$(form).submit();
					},
					rules: {
						firstname1: "required",
						lastname1: "required",
						username1: {
							required: true,
							minlength: 2
						},
						password1: {
							required: true,
							minlength: 5
						},
						confirm_password1: {
							required: true,
							minlength: 5,
							equalTo: "#password1"
						},
						email1: {
							required: true,
							email: true
						},
						agree1: "required"
					},
					messages: {
						firstname1: "Please enter your firstname",
						lastname1: "Please enter your lastname",
						username1: {
							required: "Please enter a username",
							minlength: "Your username must consist of at least 2 characters"
						},
						password1: {
							required: "Please provide a password",
							minlength: "Your password must be at least 5 characters long"
						},
						confirm_password1: {
							required: "Please provide a password",
							minlength: "Your password must be at least 5 characters long",
							equalTo: "Please enter the same password as above"
						},
						email1: "Please enter a valid email address",
						agree1: "Please accept our policy"
					},
					errorElement: "em",
					errorPlacement: function ( error, element ) {
						// Add the `help-block` class to the error element
						error.addClass( "help-block" );

						// Add `has-feedback` class to the parent div.form-group
						// in order to add icons to inputs
						element.parents( ".col-sm-5" ).addClass( "has-feedback" );

						if ( element.prop( "type" ) === "checkbox" ) {
							error.insertAfter( element.parent( "label" ) );
						} else {
							error.insertAfter( element );
						}

						// Add the span element, if doesnt exists, and apply the icon classes to it.
						if ( !element.next( "span" )[ 0 ] ) {
							$( "<span class='."'".'glyphicon glyphicon-remove form-control-feedback'."'".'></span>" ).insertAfter( element );
						}
					},
					success: function ( label, element ) {
						// Add the span element, if doesnt exists, and apply the icon classes to it.
						if ( !$( element ).next( "span" )[ 0 ] ) {
							$( "<span class='."'".'glyphicon glyphicon-ok form-control-feedback'."'".'></span>" ).insertAfter( $( element ) );
						}
					},
					highlight: function ( element, errorClass, validClass ) {
						$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
						$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
					},
					unhighlight: function ( element, errorClass, validClass ) {
						$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
						$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
					}
				} );
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
			$konten['konten'] 		= 'siswa/form_ubah_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data Artikel Siswa';
			$key = $id;
			$this->db->where('id_artikel',$key);
			$konten['data'] = $this->db->get('tb_siswa');
			if($konten['data']->num_rows()>0)
			
			{

				foreach ($konten['data']->result() as $row )
					{
						$konten['kode']						= $row->id_artikel;
						$konten['kd_siswa']					= $row->id_kat_siswa;
						$konten['org']						= $row->id_organisasi;
						$konten['jdl']						= $row->judul;
						$konten['kd_user']					= $row->id_user;
						$konten['isi']						= $row->deskripsi;
						$konten['file_name']				= $row->foto;
						$konten['file_download']			= $row->file;
						
						
					}
				}
				else
				{
						$konten['kode']					= "";
						$konten['kd_siswa']				= "";
						$konten['org']					= "";
						$konten['jdl']					= "";
						$konten['kd_user']				= "";
						$konten['isi']					= "";
						$konten['file_name']			= "";
						$konten['file_download']		= "";
			} 
			
			$this->load->view('v_dashboard',$konten);
}

		public function detail($id) // Detail Data Artikel Siswa
		{

			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'siswa/view_detail_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail Artikel Siswa';
			$key = $id;
			$konten['data']			= $this->model_dinamic->getWhere('tb_siswa','id_artikel',$key);
			
			
			if($konten['data']->num_rows()>0)
			{

				foreach ($konten['data']->result() as $row )
					{
						$konten['kode']						= $row->id_artikel;
						$konten['kd_siswa']					= $row->id_kat_siswa;
						if (!$row->id_organisasi) {
							$konten['org'] = "Tidak ada organisasi";
						}else{
							$org = $this->model_dinamic->getWhere('tb_organisasi','id_organisasi',$row->id_organisasi)->result_array();
							$konten['org'] = $org[0]['nama_organisasi'];
						}
						$konten['jdl']						= $row->judul;
						$konten['kd_user']					= $row->id_user;
						$konten['isi']						= $row->deskripsi;
						$konten['file_name']				= $row->foto;
						$konten['file_download']			= $row->file;

						
						
					}
				}
				else
				{
						$konten['kode']					= "";
						$konten['kd_siswa']				= "";
						$konten['org']					= "";
						$konten['jdl']					= "";
						$konten['kd_user']				= "";
						$konten['isi']					= "";
						$konten['file_name']			= "";
						$konten['file_download']		= "";
			} 
			
			$kategori = $this->model_dinamic->getWhere ('tb_kat_siswa','id_kat_siswa',$konten['kd_siswa'])->result();
			foreach ($kategori as $key) {
				$konten ['nama_kategori'] = $key->nama_kat_siswa;
			}
			// print_r($konten['kode_kat']);
			$this->load->view('v_dashboard',$konten);
		
			} 


		public function delete($id)
		{
			
			$this->load->model('model_siswa');
			$this->load->model('model_dinamic');
			$key = $id;
			$query = $this->model_dinamic->getWhere ('tb_siswa','id_artikel',$id);
			$this->db->where('id_artikel',$key);
			$query = $this->db->get('tb_siswa');
			// print_r($query);
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/file/'.$query[0]->file);
					unlink('./assets/photo/karya-cipta/'.$query[0]->foto);
					$this->model_siswa->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/siswa');
	}
}
?>	


