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
            $page_content['css'] ='
            <link href="'.base_url().'assets2/fasilitas/style_fas.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/scripts.js"></script>';
            $page_content['title'] ='Fasilitas';

            $data = $this->model_dinamic->getData ('tb_kat_fasilitas');
            // $fotos = $this->model_dinamic->getDataWhere ('tb_fasilitas','id_kat_fasilitas','FSL001');

            foreach ($data as $key) {
                $fotos[$key->id] = $this->model_dinamic->getDataWhere('tb_fasilitas','id_kat_fasilitas',$key->id);
                // echo count($fotos[$key->id]),"<br>"; 
            }

            $page_content['kategori'] = $data;
            $page_content['foto'] = $fotos;

            // echo "<pre>";
            // print_r($fotos);
            // echo "</pre>";
            

            $this->load->view('front/template/app',$page_content);
            
        }
        public function detail(){
            $page_content['page'] ='front/fasilitas/v_detail_fasilitas';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/css/style1.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/main.js"></script>
            <script src="'.base_url().'assets2/js/scripts.js"></script>
            ';
            $page_content['title'] ='';
            $this->load->view('front/template/app',$page_content);
        }
    
    }    
?>