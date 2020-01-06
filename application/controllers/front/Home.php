<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Home extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	
	public function index (){
		
		$this->template->load('front/template/app','front/v_home');
	}
	

}

?>