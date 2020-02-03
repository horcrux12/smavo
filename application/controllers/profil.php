	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profil extends CI_Controller {

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
			$konten['konten'] 		= 'profil/view_profil';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data profil';
			$konten['data']			= $this->db->get('tb_profil');
			$konten['data']			= $this->model_profil->tampil_profil(); //
			$this->load->view('v_dashboard',$konten);

		}


		public function tambah() // tambah data profil
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/summernote-master/dist/summernote-lite.min.css" />
				';
			$konten['konten'] 		= 'profil/form_tambah_profil';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data profil';
			$konten['kode'] 		= $this->model_profil->kode(); //tambah kode otomatis
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
				</script>
				';
		$this->load->view('v_dashboard',$konten);
		}

		//Upload image Summernote
		function upload_image(){
			if(isset($_FILES["image"]["name"])){
				$config['upload_path'] = './assets/photo/profil/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('image')){
					$this->upload->display_errors();
					return FALSE;
				}else{
					$data = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/photo/profil/'.$data['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= TRUE;
					$config['quality']= '60%';
					$config['width']= 800;
					$config['height']= 800;
					$config['new_image']= './assets/photo/profil/'.$data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					echo base_url().'assets/photo/profil/'.$data['file_name'];
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

		public function simpan() // simpan data profil
		{
			
		  $config['upload_path'] 	= './assets/photo/profil/';
		  $config['allowed_types'] 	= 'gif|jpg|jpeg|png';
		//   $config['allowed_types'] 	= 'docx|pdf|xlxs';
	      $config['encrypt_name']	= FALSE;
	     
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	 	  $this->upload->do_upload('file_name');
	
			$doto=$this->model_dinamic->getWhere('tb_user','nama',$this->input->post('nama'))->result();
			$key = $this->input->post('kode');
			$data['id_info'] 			= $this->input->post('kode');
			$data['id_kat_profil'] 		= $this->input->post('kode_kat');
			$data['judul'] 				= $this->input->post('jdl');
			$data['id_user'] 			= $doto[0]->id_user;
			$data['deskripsi'] 			= $this->input->post('isi');
			$data['foto'] 				= $this->upload->data('file_name');
			
			$this->load->model('model_profil');
			$query = $this->model_profil->getdata($key);
			if($query->num_rows()>0)
			{
				$this->model_profil->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
			}
			else
			{
				// print_r($data);
				$this->model_profil->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
			}
			
			redirect('admin/profil/detail-profil/'.$data['id_kat_profil'].'');
		}
	
	


		public function ubah($id) // Mengubah data profil
		{
			$konten['css']			= '<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
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
			
			$konten['konten'] 		= 'profil/form_ubah_profil';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data Profil';
			$key = $id;
			$this->db->where('id_info',$key);
			$query = $this->db->get('tb_profil');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_info;
						$konten['kode_kat']		= $row->id_kat_profil;
						$konten['user']			= $row->id_user;
						$konten['jdl']			= $row->judul;
						$konten['isi']			= $row->deskripsi;
						$konten['file']			= $row->foto;
						// $konten['tanggal']		= $row->tgl_update;
						
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['kode_kat']		= "";
						$konten['user']			= "";
						$konten['jdl']			= "";
						$konten['isi']			= "";
						$konten['file']			= "";
						// $konten['tanggal']		= "";
						
						
			
			} 
				$this->load->view('v_dashboard',$konten);
}

			public function detail($id) // Detail data profil
					
			{
				$konten['css']	='';
				$konten['js']	='';
				$konten['kode'] = $this->model_profil->kode(); //tambah kode otomatis		
				$konten['konten'] 		= 'profil/view_detail_profil';
				$konten['judul']		= 'Data Master';
				$key = $id;
				$this->db->where('id_kat_profil',$key);
				$query = $this->db->get('tb_kat_profil')->result();
				$konten['sub_judul'] 	= $query[0]->nama_kat_profil;
				$konten['data']			= $this->model_profil->tampil_profile_where($key)->result();
				// print_r($konten['data'][0]->id_info);		
				$this->load->view('v_dashboard',$konten); 
				} 


		public function delete($id)
		{
			
			$this->load->model('model_profil');
			$key = $id;
			$this->db->where('id_info',$key);
			$query = $this->db->get('tb_profil');
			
		
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/photo/profil/'.$query[0]->foto);
					$this->model_profil->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/profil');
} 
	
	}	