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
		$data['title'] = "Galeri";
		$this->template->load('front/template/app','front/galeri/v_galeri',$data);
	}
}

?>