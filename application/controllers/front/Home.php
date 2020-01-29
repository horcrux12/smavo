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
		$page_content['css'] = '
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
		<link href="'.base_url().'assets2/css/style_calendar.css" rel="stylesheet">
  		<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">

		  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
		  <link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">';
        $page_content['js'] = '';
       	$page_content['title'] = '';
		
		$berita 	= $this->model_berita->tampil_berita()->result();
		$kemitraan  = $this->model_dinamic->getData ('tb_kemitraan');
		$kategori_A	= $this->model_dinamic->getData('tb_kat_artikel');
		// $profil 	= $this->model_profil->tampil_profil()->result();
		$slider 	= $this->model_dinamic->getData ('tb_slider');
		$about 		= $this->model_dinamic->getData ('tb_about');
		$sambutan 	= $this->model_dinamic->getData ('tb_sambutan');
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
		
		$this->load->view('front/template/app',$page_content);
	}
	

}

?>