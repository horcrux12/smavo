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

	}
		
		public function index()
		{
			$konten['css']			= '';
			$konten['konten'] 		= 'berita/view_berita';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data berita';
			$konten['data']			= $this->db->get('tb_berita');
			$konten['js']			= '';
			// $konten['data']			= $this->model_berita->tampil_berita(); //
			$this->load->view('v_dashboard',$konten);

		}


		public function tambah() // tambah data berita
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<!-- BEGIN PAGE LEVEL PLUGINS -->
		        <link href="'.base_url('assets/pluginss/bootstrap-wysihtml5/bootstrap-wysihtml5.css').'" rel="stylesheet" type="text/css" />
		        <link href="'.base_url().'assets/pluginss/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		        <link href="'.base_url().'assets/pluginss/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
		        <!-- END PAGE LEVEL PLUGINS -->';
			$konten['konten'] 		= 'berita/form_tambah_berita';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data berita';
			$konten['kode'] 		= $this->model_berita->kode();
			$konten['js']			= '
				<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
				<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
				<script src="'.base_url().'assets/js/autosize.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
					
				<!-- BEGIN PAGE LEVEL PLUGINS -->
		        <script src="'.base_url().'assets/pluginss/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
		        <script src="'.base_url().'assets/pluginss/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
		        <script src="'.base_url().'assets/pluginss/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
		        <script src="'.base_url().'assets/pluginss/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		        <script src="'.base_url().'assets/pluginss/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
		        <!-- END PAGE LEVEL PLUGINS -->
		        <!-- BEGIN PAGE LEVEL SCRIPTS -->
		        <script src="'.base_url().'assets/pluginss/components-editors.min.js" type="text/javascript"></script>
		        <script src="'.base_url().'assets/pluginss/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
				<!-- END PAGE LEVEL SCRIPTS -->
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
			 //tambah kode otomatis
			
			$this->load->view('v_dashboard',$konten);
		}


		public function simpan() // simpan data berita
		{
			//mengecek id terakhir pada tabel berita
			$this->db->select('MAX(id_berita) AS id_terakhir');
			$this->db->from('tb_berita');
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
			echo "<pre>";
			print_r($files); 
	      	echo "</pre>";
			echo "<pre>";  
			  print_r($count);
	      	echo "<br>";
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
	      	'id_berita' => $idRow_tempat1,

	      	'foto' => $tampil['filenames'][$i]
		  ];
		  echo "<pre>";
		  print_r($datagambar);
		  echo "<pre>";
	      // $this->db->insert('tb_galeri',$datayang);
	      // print_r($datayang['foto']);
	 
	  //     if ( ! $this->upload->do_upload('file_name'.$i)){

	  //       $this->session->set_flashdata('info_gagal','Foto Gagal Diupload atau foto melebihi 2500x2500 pixel. Silakan pilih foto yang lain');
	  //        redirect('berita/tambah'); 
	  //     } else {
			
			// $key = $this->input->post('kode');
			// $data['id_berita'] 			= $this->input->post('kode');
			// $data['id_kat_artikel'] 	= $this->input->post('kode_kat');
			// $data['penulis'] 			= $this->input->post('nama');
			// $data['deskripsi'] 			= $this->input->post('isi');
			// $data['foto'] 				= $this->upload->data('file_name');	
			
			// $this->load->model('model_berita');
			// $query = $this->model_berita->getdata($key);
			// if($query->num_rows()>0)

			// {

			// 	$this->model_berita->getupdate($key,$data);
			// 	$this->session->set_flashdata('info','Data berhasil di update');
			// }
			// else
			// {
			// 	$this->model_berita->getinsert($data);
			// 	$this->session->set_flashdata('info','Data berhasil di simpan');
			// }
			// redirect('berita');
		}
	}

// }




// 		public function ubah() // Mengubah data berita
// 		{
			
// 			$konten['konten'] 		= 'berita/form_ubah_berita';
// 			$konten['judul']		= 'Data Master';
// 			$konten['sub_judul'] 	= 'Ubah Data berita';
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_berita',$key);
// 			$query = $this->db->get('tb_berita');
// 			if($query->num_rows()>0)
// 			{

// 				foreach ($query->result() as $row )
// 					{
// 						$konten['kode']			= $row->id_berita;
// 						$konten['kode_kat']		= $row->id_kat_berita;
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

// 		public function detail() // Detail data berita
// 		{
			
// 			$konten['konten'] 		= 'berita/view_detail_berita';
// 			$konten['judul']		= 'Data Master';
// 			$konten['sub_judul'] 	= 'Detail berita';
// 			$konten['data']			= $this->model_berita->tampil_berita();
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_berita',$key);
// 			$query = $this->db->get('tb_berita');
// 			if($query->num_rows()>0)
// 			{

// 				foreach ($query->result() as $row )
// 					{
// 						$konten['kode']			= $row->id_berita;
// 						$konten['kode_kat']		= $row->id_kat_berita;
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
			
// 			$this->load->model('model_berita');
// 			$key = $this->uri->segment(3);
// 			$this->db->where('id_berita',$key);
// 			$query = $this->db->get('tb_berita');
		
// 			if($query->num_rows()>0)
// 				{

// 					$this->model_berita->getdelete($key);
// 					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
// 				}
// 				redirect('berita');



// } 
	}	