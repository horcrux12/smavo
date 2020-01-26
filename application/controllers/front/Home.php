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
		
		$berita = $this->model_dinamic->getData ('tb_berita');
		$profil = $this->model_profil->tampil_profil()->result();
		foreach ($profil as $key) {
			$about[$key->nama_kat_profil] = array('deskripsi' => $key->deskripsi );
		}
		$limit_berita = $this->model_dinamic->getDataLimit ('tb_berita',3,'tanggal');
		$page_content['data']['berita'] = $berita;
		$page_content['data']['berita_limit'] = $limit_berita;
		$page_content['data']['about'] = $about; 
		
		$this->load->view('front/template/app',$page_content);
	}
	

}

?>