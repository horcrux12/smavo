	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user extends CI_Controller {

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
			$konten['js']			= '';
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
			$konten['konten'] 		= 'user/form_tambah_user';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data user';
			$konten['kode'] = $this->model_user->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}


		public function simpan() // simpan data user
		{
		  $config['upload_path'] 		= './assets/photo/';
	      $config['allowed_types'] 		= 'gif|jpg|jpeg|png';
	      $config['encrypt_name']		= FALSE;
	     
	 
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	 
	      if ( ! $this->upload->do_upload('file_name')){
	        $this->session->set_flashdata('info_gagal','Foto Gagal Diupload atau foto melebihi 2500x2500 pixel. Silakan pilih foto yang lain');
	         redirect('user/tambah'); 
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
			redirect('user');
		

		} 


	}

		public function ubah() // Mengubah data user
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
			$konten['konten'] 		= 'user/form_ubah_user';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data user';
			$key = $this->uri->segment(3);
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

		public function detail() // Detail data user
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'user/view_detail_user';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail user';
			
			$key = $this->uri->segment(3);
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


		public function delete()
		{
			
			$this->load->model('model_user');
			$key = $this->uri->segment(3);
			$this->db->where('id_user',$key);
			$query = $this->db->get('tb_user');
		
			if($query->num_rows()>0)
				{

					$this->model_user->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('user');

} 
	
	}	