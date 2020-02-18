<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Sambutan extends CI_Controller {
    
        public function index()
        {
            $page_content['page'] ='front/sambutan/v_sambutan';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/fasilitas/style_fas.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/scripts.js"></script>';
            $page_content['title'] ='Sambutan';

            $data = $this->model_dinamic->getWhere('tb_profil','id_info','PR13012020007')->result_array();
            $page_content['data'] = $data;

            $this->load->view('front/template/app',$page_content);
        }
    
    }
    
    /* End of file Struktur.php */
    
?>