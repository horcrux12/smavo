<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<script>;
    	  document.location='".base_url()."admin/login'</script>";
		}

	}


	public function index() {
			$konten['css']			= '';
			$konten['konten'] 		= 'v_konten';
			$konten['judul']		= 'Beranda';
			$konten['sub_judul'] 	= '';
			$konten['js']			= '
			<script src="'.base_url().'assets/plugins/chart.js/Chart.min.js"></script>
			<script src="'.base_url().'assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>';
			$this->load->view('v_dashboard',$konten);
	}


	public function logout()
		{
			$this->session->sess_destroy();
			redirect('admin/login');
		}

		

}
