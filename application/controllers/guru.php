	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Guru extends CI_Controller {

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
			$konten['konten'] 		= 'guru/view_guru';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data guru';
			$konten['data']			= $this->db->get('tb_guru');
			// print_r($konten['data']);
			$this->load->view('v_dashboard',$konten);
		}


			public function tambah() // tambah data guru
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
					</script>';
				$konten['konten'] 		= 'guru/form_tambah_guru';
				$konten['judul']		= 'Data Master';
				$konten['sub_judul'] 	= 'Tambah Data guru';
				$konten['kode'] = $this->model_guru->kode(); //tambah kode otomatis		
				$this->load->view('v_dashboard',$konten);
			}


			public function simpan() // simpan data guru
			{
			$config['upload_path'] 	= './assets/photo/guru/';
			$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
			$config['encrypt_name']	= FALSE;
			$config['overwrite']		= true;
		
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
		
			if ( ! $this->upload->do_upload('file_name')){
				$this->session->set_flashdata('info_gagal','Foto Gagal Diupload,Silakan pilih foto yang lain');
				//  redirect('guru/tambah'); 
			} else {
				
				$key = $this->input->post('kode');
				$data['id_guru'] 					= $this->input->post('kode');
				$data['nip'] 						= $this->input->post('nip');
				$data['nama_lengkap'] 				= $this->input->post('nama');
				$data['tempat_lahir'] 				= $this->input->post('tempat');
				$data['tgl_lahir'] 					= $this->input->post('tanggal');
				$data['id_jabatan'] 				= $this->input->post('jbt');
				if (!$this->input->post('mapel')) {
					$data['id_mapel'] 				= null;
				}else {
					$data['id_mapel'] 					= $this->input->post('mapel');

				}
				$data['foto'] 						= $this->upload->data('file_name'); 

				$this->load->model('model_guru');
				$query = $this->model_guru->getdata($key);
				if($query->num_rows()>0)

				{

					$this->model_guru->getupdate($key,$data);
					$this->session->set_flashdata('info','Data berhasil di update');
				}
				else
				{
					$this->model_guru->getinsert($data);
					$this->session->set_flashdata('info','Data berhasil di simpan');
				}
				redirect('admin/guru');
			

			} 


		}

		public function ubah($id) // Mengubah data guru
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
				</script>';
			$konten['konten'] 		= 'guru/form_ubah_guru';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data guru';
			$key = $id;
			$this->db->where('id_guru',$key);
			$query = $this->db->get('tb_guru');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_guru;
						$konten['nip']			= $row->nip;
						$konten['nama']			= $row->nama_lengkap;
						$konten['tempat']		= $row->tempat_lahir;
						$konten['tanggal']		= $row->tgl_lahir;
						$konten['jbt']			= $row->id_jabatan;
						$konten['mapel']		= $row->id_mapel;
						$konten['file_name']	= $row->foto;
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nip']			= "";
						$konten['nama']			= "";
						$konten['tempat']		= "";
						$konten['tanggal']		= "";
						$konten['jbt']			= "";
						$konten['mapel']		= "";
						$konten['file_name']	= "";
						
			
			} 
				$this->load->view('v_dashboard',$konten);
}

		public function detail($id) // Detail data guru
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'guru/view_detail_guru';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail guru';
			$key = $id;
			$konten['data']			= $this->model_dinamic->getWhere('tb_guru','id_guru',$key);
			
			if($konten['data']->num_rows()>0)
			{

				foreach ($konten['data']->result() as $row )
					{
						$konten['kode']			= $row->id_guru;
						$konten['nip']			= $row->nip;
						$konten['nama']			= $row->nama_lengkap;
						$konten['tempat']		= $row->tempat_lahir;
						$konten['tanggal']		= $row->tgl_lahir;
						$konten['jbt']			= $row->id_jabatan;
						$konten['mapel']		= $row->id_mapel;
						$konten['file_name']	= $row->foto;				
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nip']			= "";
						$konten['nama']			= "";
						$konten['tempat']		= "";
						$konten['tanggal']		= "";
						$konten['jbt']			= "";
						$konten['mapel']		= "";
						$konten['file_name']	= "";
				}
			
				$jabatan= $this->model_dinamic->getWhere ('tb_jabatan','id_jabatan',$konten['jbt'])->result();
				foreach ($jabatan as $key) {
				$konten ['nama_jabatan'] = $key->nama_jabatan;

				$mapel = $this->model_dinamic->getWhere ('tb_mapel','id_mapel',$konten['mapel'])->result();
				foreach ($mapel as $key) {
				$konten ['nama_mapel'] = $key->nama_mapel;
			
				$this->load->view('v_dashboard',$konten);
		
			} 
		}
	}

		public function delete($id)
		{
			
			$key = $id;
			$query = $this->model_dinamic->getWhere ('tb_guru','id_guru',$id);
			$this->db->where('id_guru',$key);
			$query = $this->db->get('tb_guru');
		
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/photo/guru/'.$query[0]->foto);
					$this->model_guru->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/guru');
} 
	
	}	