<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Galeri extends CI_Controller {

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
            $konten['css']			= '
            <link rel="stylesheet" href="'.base_url().'assets/css/colorbox.min.css" />';
			$konten['konten'] 		= 'galeri/view_galeri';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Galeri';
			$konten['data']			= $this->db->get('tb_galeri');
            $konten['js']			= '
            <script src="'.base_url().'assets/js/jquery.colorbox.min.js"></script>';
        
			$konten['data']			= $this->model_berita->tampil_berita(); 
			$this->load->view('v_dashboard',$konten);

		}


		
}	