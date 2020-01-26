<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<scrip_addresst>;
    	  document.location='".base_url()."admin/login'</script>";
		}
		$this->load->library('user_agent');
	}


	public function index() {
			$konten['css']			= '';
			$konten['konten'] 		= 'statistik/view_statistik';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Statistik Pengguna';
			$konten['js']			= '
			<script src="'.base_url().'assets/plugins/chart.js/Chart.min.js"></script>
			<script src="'.base_url().'assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.dataTables.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.dataTables.bootstrap.min.js"></script>
			<script src="'.base_url().'assets/js/dataTables.buttons.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.flash.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.html5.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.print.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.colVis.min.js"></script>
			<script src="'.base_url().'assets/js/dataTables.select.min.js"></script>
			<script src="'.base_url().'assets/plugins/sweetalert2/sweetalert2.min.js"></script>
			<script src="'.base_url().'assets/js/table.js"></script>';
			
			//ambil data ip pengguna
			$konten['browser'] = $this->agent->browser();
			$konten['browser_version'] = $this->agent->version();
			$konten['os'] = $this->agent->platform();
			$konten['ip_address'] = $this->input->ip_address();
			$konten['hostname'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			
			$konten['data']			= $this->db->get('tb_statistik');
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
