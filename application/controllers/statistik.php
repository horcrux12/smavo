<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<scrip_addresst>;
    	  document.location='".base_url()."admin/login'</scrip_addresst>";
		}
		$this->load->library('user_agent');
	}


	public function index() {
			$konten['css']			= '
			<link rel="stylesheet" href="'.base_url().'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">';
			$konten['konten'] 		= 'statistik/view_statistik';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Statistik Pengunjung';
			$konten['js']			= '
			<script src="'.base_url().'assets/plugins/chart.js/Chart.min.js"></script>
			<script src="'.base_url().'assets/plugins/jquery/jquery.min.js"></script>
			<script src="'.base_url().'assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>';
			
			$konten['browser'] = $this->agent->browser();
			$konten['browser_version'] = $this->agent->version();
			$konten['os'] = $this->agent->platform();
			$konten['ip_address'] = $this->input->ip_address();

			$this->load->view('v_dashboard',$konten);	
			
	}

	// public function simpan(){

	// 		$ip_address      = $_SERVER['REMOTE_ADDR']; // Mendapatkan ip_address komputer user
	// 		$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
	// 		$waktu   = time(); //

	// 		$cekip_address = $this->db->query("SELECT * FROM tb_statistik WHERE ip_address='$ip_address' AND tanggal='$tanggal'");

	// 		if($query->num_rows($cekip_address)==0)

	// 		{

	// 			$this->db->query("INSERT INTO tb_statistik(ip_address, tanggal, hits, online) VALUES('$ip_address','$tanggal','1','$waktu')");
				
	// 		}
	// 		else
	// 		{
	// 			$this->db->query("UPDATE tb_statistik SET hits=hits+1, online='$waktu' WHERE ip_address='$ip_address' AND tanggal='$tanggal'");
	// 		}

	// }

	
}
