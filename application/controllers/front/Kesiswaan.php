<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kesiswaan extends CI_Controller {
    
        public function index()
        {
            $page_content['page'] ='';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/fasilitas/style_fas.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/scripts.js"></script>';
			$page_content['title'] ='';
			
            $this->load->view('front/template/app',$page_content);
        }

        public function kategori($id){
			
			$page_content['css'] = '
			<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
			<link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
			<link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">
			<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">';
			$page_content['js'] = '
			<script src="'.base_url().'assets2/js/main.js"></script>
			<script src="'.base_url().'assets2/js/scripts.js"></script>
			<script src="'.base_url().'assets2/js/main.js"></script>
            <script src="'.base_url().'assets2/js/scripts.js"></script>
            <script>
			$(function() {
			$('."'".'[data-toggle="tooltip"]'."'".').tooltip()
			})
            </script>';
			
			$search  = array(
				"%20",
				"%5E",
				"%60" );
			$replace = array(
				" ",
				"^",
				"`");
			$id = str_replace($search,$replace,$id);

			if ($id == "Tata Tertib" || $id == "Aturan Akademik") {
				$page_content['page'] = 'front/kesiswaan/v_kesiswaan';		
			}
			if ($id == "Organisasi" || $id == "Karya Cipta") {
				$page_content['page'] = 'front/kesiswaan/v_organisasi';
			}

			$page_content['title'] = $id;

			// load data organisasi
			$organisasi  = $this->model_dinamic->getData ('tb_organisasi');
			$page_content['data']['organisasi'] 		= $organisasi;
			
			$this->load->view('front/template/app',$page_content);

	}

}
    
    /* End of file Struktur.php */
    
?>