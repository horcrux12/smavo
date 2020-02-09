<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Blog extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function index (){
		$page_content['page'] = 'front/blog/v_blog';
		$page_content['css'] = '
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
		<link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">
		<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">';
		$page_content['js'] = '
		<script src="'.base_url().'assets2/js/main.js"></script>
		<script src="'.base_url().'assets2/js/scripts.js"></script>';
       	$page_content['title'] = 'berita';
		$this->load->view('front/template/app',$page_content);
	}

	public function kategori($id)
	{
		$page_content['page'] = 'front/blog/v_blog_kat';
		$page_content['css'] = '
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
		<link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">
		<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">';
		$page_content['js'] = '
		<script src="'.base_url().'assets2/js/main.js"></script>
		<script src="'.base_url().'assets2/js/scripts.js"></script>';
		$search  = array(
			"%20",
			"%5E",
			"%60" );
		$replace = array(
			" ",
			"^",
			"`");
		$id = str_replace($search,$replace,$id);
       	$page_content['title'] = $id;
		$this->load->view('front/template/app',$page_content);
	}

	public function detail()
	{
			$page_content['page'] ='front/blog/v_berita';
			$page_content['css'] ='<link href="'.base_url().'assets2/css/style1.css" rel="stylesheet">
								   <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
								   <link href="'.base_url().'assets2/css/custom.css" rel="stylesheet">
								   <link href="'.base_url().'assets2/css/plugins.css" rel="stylesheet">
								   <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';

			$page_content['js'] ='<script src="'.base_url().'assets2/js/main.js"></script>
								  <script src="'.base_url().'assets2/js/scripts.js"></script>';
            $page_content['title'] ='Umum';

            $this->load->view('front/template/app',$page_content);
            
	}
}

?>