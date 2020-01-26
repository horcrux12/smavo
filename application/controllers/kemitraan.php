<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * 
     */
    class Kemitraan extends CI_Controller
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
			$konten['konten'] 		= 'berita/view_berita';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data berita';
			$konten['data']			= $this->db->get('tb_berita');
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
			// <script>
			// 	function myFunction(id) {
				
			// 	Swal.fire({
			// 	title: '."'".'Are you sure?'."'".',
			// 	text: "You won'."'".'t be able to revert this!",
			// 	icon: '."'".'warning'."'".',
			// 	showCancelButton: true,
			// 	confirmButtonColor: '."'".'#3085d6'."'".',
			// 	cancelButtonColor: '."'".'#d33'."'".',
			// 	confirmButtonText: '."'".'Yes, delete it!'."'".',
				
			// 	}).then((result) => {
			// 	if (result.value) {
			// 		Swal.fire(
			// 		'."'".'Deleted!'."'".',
			// 		'."'".'Your file has been deleted.'."'".',
			// 		'."'".'success'."'".'
			// 		),
			// 		function(){
			// 			window.location = "'.base_url().'admin/berita/hapus-berita/"+id;	
			// 		}
			// 	}
			// 	})
			// }
			// 	</script>
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

			$konten['data']	= $this->model_berita->tampil_berita()->result();
			// print_r($konten['data']); 
			$this->load->view('v_dashboard',$konten);

        }
    }
    
?>