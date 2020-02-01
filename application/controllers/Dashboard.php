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

			$this->load->view('v_dashboard',$konten);
	}


	public function logout()
		{
			$this->session->sess_destroy();
			redirect('admin/login');
		}

		

}
