<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<script>;
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
			
			//ambil data ip address pengguna
			$data['browser'] = $this->agent->browser();
			$data['browser_version'] = $this->agent->version();
			$data['os_name'] = $this->agent->platform();
			$data['ip_address'] = $this->input->ip_address();
			$data['hostname'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);

			//simpan data ip address user ke db
			$this->model_dinamic->input_data($data,'tb_statistik');
			// print_r($data);

			//ambil data dari db untuk ditampilkan
			$konten['data']			= $this->db->get('tb_statistik');
			$this->load->view('v_dashboard',$konten);	
			
	}

	
	
}
