<?php
/**
 * 
 */
class Coba1 extends CI_Controller
{
	
	public function index(){
		$konten['css']			= '';
		$konten['konten'] 		= 'coba1';
		$konten['judul']		= 'Data Master';
		$konten['sub_judul'] 	= 'Data berita';
		$konten['js']			= '
		<script src="'.base_url().'assets/pluginss/jquery-3.1.1.min.js" type="text/javascript"></script>
		<script src="'.base_url().'assets/pluginss/ckeditor/ckeditor.js" type="text/javascript"></script>
		<script src="'.base_url().'assets/pluginss/ckeditor/adapters/jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
			$("textarea.texteditor").ckeditor();
		</script>
		';
		// $konten['data']			= $this->db->get('tb_berita');
			// $konten['data']			= $this->model_berita->tampil_berita(); //
		$this->load->view('v_dashboard',$konten);
	}
}
?>