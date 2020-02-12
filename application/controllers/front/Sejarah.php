<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Sejarah extends CI_Controller {
    
        public function index()
        {
            $page_content['page'] ='front/sejarah/v_sejarah';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/fasilitas/style_fas.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/scripts.js"></script>';
            $page_content['title'] ='Sejarah';

            $this->load->view('front/template/app',$page_content);
        }
    
    }
    
    /* End of file Struktur.php */
    
?>