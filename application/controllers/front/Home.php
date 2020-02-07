<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('user_agent');
	}
	
	public function index (){
		$page_content['page'] = 'front/v_home';
		// CSS
		$page_content['css'] = '
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
		<link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
		<link href="'.base_url().'assets2/css/style_calendar.css" rel="stylesheet">
		<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
		<link href="'.base_url().'assets2/css/plyr.css" rel="stylesheet">

		<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">';
		
		// JavaScript
		$page_content['js'] = '
		<script src="'.base_url().'assets2/contactform/contactform.js"></script>
		<script src="'.base_url().'assets2/js/main.js"></script>
		<script src="'.base_url().'assets2/js/iso.js"></script>
		<script src="'.base_url().'assets2/js/plyr.js"></script>

		<!-- JS for this page -->
		<script src="'.base_url().'assets2/js/scripts.js"></script>
		<script src="'.base_url().'assets2/js/animated.headline.js"></script>
		<script src="'.base_url().'assets2/js/jquery.counterup.min.js"></script>

		<!-- Scroll To -->

		<!-- Typed JS -->
		<script type="text/javascript" src="'.base_url().'assets2/lib/typed/typed.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>

		<script>
			$(function() {
			$('."'".'[data-toggle="tooltip"]'."'".').tooltip()
			})
		</script>

		<script type="text/javascript">
			var typed = new Typed('."'".'#typed1'."'".', {
			strings: ["SMAN 2 Cibinong", "Berakhlak Mulia", "Mandiri", "Berwawasan Lingkungan", "Unggul dalam IPTEKS"],
			loop: true,
			typeSpeed: 40,
			backSpeed: 60,
			startDelay: 1000,
			backDelay: 2000
			});
		</script>

		<script>
			$(function() {
			$('."'".'[data-toggle="tooltip"]'."'".').tooltip()
			})
		</script>

		<!-- Calendar -->
		<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
		<script src="'.base_url().'assets2/js/fullcalendar-init.js"></script>
		<script src="'.base_url().'assets2/js/main_player.js"></script>';
		$page_content['title'] = '';
		   
		//ambil data ip address pengguna
		$data['browser'] = $this->agent->browser();
		$data['browser_version'] = $this->agent->version();
		$data['os_name'] = $this->agent->platform();
		$data['ip_address'] = $this->input->ip_address();
		$data['hostname'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);

		$data_ini = $this->model_statistik->DataThisDay($data['ip_address'],date('Y-m-d'));
		
		if ($data_ini->num_rows()>0) {
			$data_ini = $data_ini->result();
			$data_update['id_statistik'] = $data_ini[0]->id_statistik;
			$data_update['hits'] = $data_ini[0]->hits + 1;
			$this->model_dinamic->update_data('id_statistik',$data_update['id_statistik'],$data_update,'tb_statistik');
		}
		else {
			$data['tanggal'] = date('Y-m-d');

			$this->model_dinamic->input_data($data,'tb_statistik');
		}
		
		$berita 	= $this->model_berita->tampil_berita()->result();
		$kemitraan  = $this->model_dinamic->getData ('tb_kemitraan');
		$kategori_A	= $this->model_dinamic->getData('tb_kat_artikel');
		// $profil 	= $this->model_profil->tampil_profil()->result();
		$slider 	= $this->model_dinamic->getData ('tb_slider');
		$about 		= $this->model_dinamic->getData ('tb_about');
		$sambutan 	= $this->model_dinamic->getData ('tb_sambutan');
		$kunjungan['now']  	= $this->model_statistik->hitCountThisDay(date('Y-m-d'));
		$kunjungan['month'] = $this->model_statistik->hitCountMount(date('m'),date('Y'));
		$kunjungan['year'] 	= $this->model_statistik->hitCountYear(date('Y'));
		$firstday = date('Y-m-d', strtotime("Monday -1 week")); //senin di tanggal ini
		$toweeks = date('Y-m-d', strtotime('+6 days', strtotime($firstday))); //minggu ditanggal ini
		$kunjungan['week']	= $this->model_statistik->hitCountThisWeeks($firstday,$toweeks);
		// foreach ($profil as $key) {
		// 	$about[$key->nama_kat_profil] = array('deskripsi' => $key->deskripsi );
		// } 
		$limit_berita = $this->model_dinamic->getDataLimit ('tb_berita',3,'tanggal');
		$page_content['data']['berita'] 		= $berita;
		$page_content['data']['berita_limit'] 	= $limit_berita;
		$page_content['data']['kemitraan'] 		= $kemitraan;
		// $page_content['data']['about'] 			= $about; 
		$page_content['data']['slider'] 		= $slider; 
		$page_content['data']['about'] 			= $about; 
		$page_content['data']['sambutan'] 		= $sambutan;
		$page_content['data']['kategori'] 		= $kategori_A;  
		$page_content['data']['kunjungan'] 		= $kunjungan;  
				
		// echo "<pre>";
		// print_r($kunjungan);
		// echo "</pre>";
		$this->load->view('front/template/app',$page_content);
	}
}

?>