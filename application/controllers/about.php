<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * 
     */
    class About extends CI_Controller
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
            $konten['css']		    = '<link rel="stylesheet" href="'.base_url().'assets/css/colorbox.min.css" />';
			$konten['konten'] 		= 'p_about/view_about';
			$konten['judul']		= 'Dashboard';
			$konten['sub_judul'] 	= 'Data about';
			$konten['data']			= $this->model_dinamic->getData('tb_about');
			$konten['js']			= '<script src="'.base_url().'assets/js/jquery.colorbox.min.js"></script>
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

			// $konten['data']	= $this->model_about->tampil_about()->result();
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
			$konten['konten'] 		= 'p_about/form_tambah_about';
			$konten['judul']		= 'Dashboard';
			$konten['sub_judul'] 	= 'Tambah Data About';

			$this->db->select('MAX(id) AS id_terakhir');
			$this->db->from('tb_about');
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
				<script src="'.base_url().'assets/js/inputtype.js"></script>';
			// $konten['data'] = $this->model_dinamic->getWhere ('tb_kat_artikel','id_kat_artikel',$id)->result();
			$this->load->view('v_dashboard',$konten);
		}

		public function simpan() // simpan data about
		{
			
			$key 					= $this->input->post('kode');
			$data['id'] 			= $key;
			$data['visi'] 			= $this->input->post('isi1');
			$data['misi'] 			= $this->input->post('isi2');
			$data['plan']			= $this->input->post('isi3');
			$data['deskripsi']		= $this->input->post('isi4');
			
			$query = $this->model_about->getdata($key);
				if($query->num_rows()>0)
				{
					
					$this->model_about->getupdate($key,$data);
					$this->session->set_flashdata('info','Data berhasil di update');
				}
				else
				{
					// print_r($data);
					$this->model_about->getinsert($data);
					$this->session->set_flashdata('info','Data berhasil di simpan');
				}
			redirect('admin/pengaturan/about');
			}
		

		public function delete($id)
		{
			$key = $id;
			$query = $this->model_dinamic->getWhere ('tb_about','id',$id);
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/photo/about/'.$query[0]->foto);
					$this->model_about->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/pengaturan/about');
		}

		public function ubah($id) // Mengubah data about
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
					autosize($('."'".'textarea[class*=autosize]'."'".'));
				});
				</script>
				';
			$konten['konten'] 		= 'p_about/form_ubah_about';
			$konten['judul']		= 'Dashboard';
			$konten['sub_judul'] 	= 'Ubah Data About';
			$key = $id;
			$query = $this->model_dinamic->getWhere('tb_about','id',$key);
			if($query->num_rows()>0)
			
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id;
						$konten['isi1']			= $row->visi;
						$konten['isi2']			= $row->misi;
						$konten['isi3']			= $row->plan;
						$konten['isi4']			= $row->deskripsi;
						
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['isi1']			= "";
						$konten['isi2']			= "";
						$konten['isi3']			= "";
						$konten['isi4']			= "";
				}

		$this->load->view('v_dashboard', $konten);
	}
    }
    
?>