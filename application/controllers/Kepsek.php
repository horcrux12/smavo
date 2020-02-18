<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * 
     */
    class Kepsek extends CI_Controller
    {
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

        function index(){
            $konten['css']		    = '';
			$konten['konten'] 		= 'p_kemitraan/view_kemitraan';
			$konten['judul']		= 'Dashboard';
			$konten['sub_judul'] 	= 'Data Kemitraan';
			$konten['data']			= $this->model_dinamic->getData('tb_kemitraan');
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
			';

			// $konten['data']	= $this->model_berita->tampil_berita()->result();
			// print_r($konten['data']); 
			$this->load->view('v_dashboard',$konten);

		}
		
		function tambah (){
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/summernote-master/dist/summernote-lite.min.css" />
				';
			$konten['konten'] 		= 'p_kemitraan/form_tambah_kemitraan';
			$konten['judul']		= 'Dashboard';
			$konten['sub_judul'] 	= 'Tambah Data Kemitraan';

			$this->db->select('MAX(id) AS id_terakhir');
			$this->db->from('tb_kemitraan');
			$terakhir = $this->db->get()->row();
			$idRow=$terakhir->id_terakhir;
			$idRow_tempat=$idRow+1;
			$konten['kode'] 		= $idRow_tempat; //tambah kode otomatis
			$konten['js']			= '
				<script src="'.base_url().'assets/plugins/sweetalert2/sweetalert2.min.js"></script>
				<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
				<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
				<script src="'.base_url().'assets/js/autosize.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
				<script src="'.base_url().'assets/summernote-master/dist/summernote-lite.js"></script>
				<script src="'.base_url().'assets/js/inputtype.js"></script>
				';
			// $konten['data'] = $this->model_dinamic->getWhere ('tb_kat_artikel','id_kat_artikel',$id)->result();
			$this->load->view('v_dashboard',$konten);
		}

		public function simpan() // simpan data berita
		{
		  $config['upload_path'] 	= './assets/photo/kemitraan/';
		  $config['allowed_types'] 	= 'gif|jpg|jpeg|png';
		//   $config['allowed_types'] 	= 'docx|pdf|xlxs';
		  $config['encrypt_name']	= FALSE;
		  $config['overwrite']		= true;
	     
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
			
		//   print_r($this->upload->do_upload('file_name'));

	      if ( ! $this->upload->do_upload('file_name')){
	        $this->session->set_flashdata('info_gagal','Tidak ada foto yang dipilih');
		  } 
		  else {

			$key 						= $this->input->post('kode');
			$data['id'] 				= $key;
			$data['nama'] 				= $this->input->post('nama');
			$data['foto'] 				= $this->upload->data('file_name');
			$data['link_website']		= $this->input->post('link');
			
			$query = $this->model_kemitraan->getdata($key);
				if($query->num_rows()>0)
				{
					
					$this->model_kemitraan->getupdate($key,$data);
					$this->session->set_flashdata('info','Data berhasil di update');
					
				}
				else
				{
					// print_r($data);
					$this->model_kemitraan->getinsert($data);
					$this->session->set_flashdata('info','Data berhasil di simpan');
				}
				redirect('admin/pengaturan/kemitraan');
			}
		}

		public function delete($id)
		{
			$key = $id;
			$query = $this->model_dinamic->getWhere ('tb_kemitraan','id',$id);
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/photo/berita/'.$query[0]->foto);
					$this->model_kemitraan->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/pengaturan/kemitraan');
		}

		public function ubah($id) // Mengubah data berita
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/summernote-master/dist/summernote-lite.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets2/css/style.css" />
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
					}).validate({
						rules: "required",
						messages: "Please enter your firstname"
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
			$konten['konten'] 		= 'p_kemitraan/form_ubah_kemitraan';
			$konten['judul']		= 'Dashboard';
			$konten['sub_judul'] 	= 'Ubah Data Kemitraan';
			$key = $id;
			$query = $this->model_dinamic->getWhere('tb_kemitraan','id',$key);
			if($query->num_rows()>0)
			
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id;
						$konten['nama']			= $row->nama;
						$konten['foto']			= $row->foto;
						$konten['link']			= $row->link_website;
						
						
					}
				}
				else
				{
						$konten['kode']			= '';
						$konten['nama']			= '';
						$konten['foto']			= '';
						$konten['link']			= '';
				}

		$this->load->view('v_dashboard', $konten);
	}
    }
    
?>