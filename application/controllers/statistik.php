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
		$this->load->helper('date');
		
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
			
			//ambil data dari db untuk ditampilkan
			$konten['data']			= $this->db->get('tb_statistik');
			
			
			
			$thn = date('Y');
			$thn = $thn - 5;
			for ($i=0; $i < 6; $i++) { 
				$tahun[$i] = $this->model_statistik->hitCountYear($thn);
				$year[$i]= strval($thn);
				$thn++;
			}
			foreach ($tahun as $key) {
				foreach ($key as $koy) {
					if ($koy->hits == null) {
						$hits[]= "0";
					}
					else {
						$hits[]= $koy->hits;
					}
					
				}
			}
			// print_r($year);
			$year = json_encode($year);
			$hits = json_encode($hits);
			$konten['hit'] = $hits;
			$konten['year'] = $year;

			// print_r($year);
			// $tahun = $this->model_statistik->hitCountYear('2015','2017');
			// $tahun = $this->model_statistik->hitCountYear('2016');


			$this->load->view('v_dashboard',$konten);	
			
	}

	
	
}
