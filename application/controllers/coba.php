<?php
/**
 * 
 */
class Coba extends CI_Controller
{
	
	public function index(){
		$konten['css']			= '
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="'.base_url('assets/pluginss/bootstrap-wysihtml5/bootstrap-wysihtml5.css').'" rel="stylesheet" type="text/css" />
        <link href="'.base_url().'assets/pluginss/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="'.base_url().'assets/pluginss/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->';
		$konten['konten'] 		= 'coba';
		$konten['judul']		= 'Data Master';
		$konten['sub_judul'] 	= 'Data berita';
		$konten['js']			= '
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="'.base_url().'assets/pluginss/jquery.min.js" type="text/javascript"></script>
        <script src="'.base_url().'assets/pluginss/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="'.base_url().'assets/pluginss/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="'.base_url().'assets/pluginss/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="'.base_url().'assets/pluginss/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="'.base_url().'assets/pluginss/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="'.base_url().'assets/pluginss/components-editors.min.js" type="text/javascript"></script>
        <script src="'.base_url().'assets/pluginss/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->';
		// $konten['data']			= $this->db->get('tb_berita');
			// $konten['data']			= $this->model_berita->tampil_berita(); //
		$this->load->view('v_dashboard',$konten);
	}
}
?>