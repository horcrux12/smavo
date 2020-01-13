<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Galeri extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('model_dinamic');
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<script>;
    	  document.location='http://localhost/admin/smavo/login'</script>";

	
		}


	}
		
		public function index()
		{
            $konten['css']			= '
            <link rel="stylesheet" href="'.base_url().'assets/css/colorbox.min.css" />';
			$konten['konten'] 		= 'galeri/view_galeri';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Galeri';
			$konten['data']			= $this->model_dinamic->getData('tb_galeri');
            $konten['js']			= '
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
        
			// $konten['data']			= $this->model_berita->tampil_berita(); 
			$this->load->view('v_dashboard',$konten);

		}


		
}	