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
		$data ['title'] = "Berita";
		$this->template->load('front/template/app','front/blog/v_blog',$data);
	}

	public function akademik()
	{
		$data ['title'] = "Akademik";
		$this->template->load('front/template/app','front/blog/v_blog_det',$data);
	}
	public function nonakademik()
	{
		$data ['title'] = "Non-Akademik";
		$this->template->load('front/template/app','front/blog/v_blog_det',$data);
	}
	public function beasiswa()
	{
		$data ['title'] = "Beasiswa";
		$this->template->load('front/template/app','front/blog/v_blog_det',$data);
	}
	public function umum()
	{
		$data ['title'] = "Umum";
		$this->template->load('front/template/app','front/blog/v_blog_det',$data);
	}
}

?>