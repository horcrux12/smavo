<?php
/**
 * 
 */
class Coba extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
	}
	
	public function index (){
		$page_content['page'] = 'coba';
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
		
		
        $this->load->view('front/template/app',$page_content);
        }
}
?>