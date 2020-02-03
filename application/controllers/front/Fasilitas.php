<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Fasilitas extends CI_Controller {

        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('user_agent');
        }
    
        public function index()
        {
            $page_content['page'] ='front/fasilitas/v_fasilitas';
            $page_content['css'] ='<link href="'.base_url().'assets2/css/style1.css" rel="stylesheet">';
            $page_content['js'] ='<script src="'.base_url().'assets2/js/main.js"></script>';
            $page_content['title'] ='';

            $this->load->view('front/template/app',$page_content);
            
        }
    
    }    
?>