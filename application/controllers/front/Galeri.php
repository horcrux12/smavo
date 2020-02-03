<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Galeri extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	public function index(){
		$page_content['page'] ='front/galeri/v_galeri';
		
		// CSS
		$page_content['css'] ='
		<link href="'.base_url().'assets2/css/style1.css" rel="stylesheet">
		<link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">
		<link rel="stylesheet" href="'.base_url().'assets2/css/helper.css">';
		
		// JavaScript
		$page_content['js'] ='
		<script src="'.base_url().'assets2/js/main.js"></script>
		<script src="'.base_url().'assets2/js/scripts.js"></script>
		<script src="'.base_url().'assets2/js/jquery.stellar.min.js"></script>
		<script type="text/javascript" src="'.base_url().'assets2/js/scrollIt.min.js"></script>
		';

		$page_content['title'] ='Galeri';

		$galeri = $this->model_galeri->GetData()->result();

		$page_content['data'] =$galeri;

		$this->load->view('front/template/app',$page_content);
	}
}
?>