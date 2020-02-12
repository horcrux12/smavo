<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Organisasi extends CI_Controller {
    
        public function index()
        {
           
            $page_content['page'] ='front/organisasi/v_organisasi';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">
            ';
            
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/main.js"></script>
            <script src="'.base_url().'assets2/js/scripts.js"></script>
            <script>
			$(function() {
			$('."'".'[data-toggle="tooltip"]'."'".').tooltip()
			})
            </script>';
        
            $page_content['title']       ='Organisasi';
            $page_content['sub_title']   ='';
            
            $organisasi  = $this->model_dinamic->getData ('tb_organisasi');
            $page_content['data']['organisasi'] 		= $organisasi;
            $this->load->view('front/template/app',$page_content);
        }


        public function Detail($id)
		{
			$key = $id;
			$page_content['org']			= $this->model_dinamic->getWhere('tb_organisasi','id_organisasi',$key);
			
			if($page_content['org']->num_rows()>0)
			{

				foreach ($page_content['org']->result() as $row )
					{
						
						$page_content['kode']			= $row->id_organisasi;
						$page_content['nama']			= $row->nama_organisasi;
						$page_content['isi']			= $row->deskripsi;
						$page_content['file_name']	    = $row->foto;
						$page_content['file_download']  = $row->file;
					}
				}
				else
				{
						$page_content['kode']			= "";
						$page_content['nama']			= "";
						$page_content['isi']			= "";
						$page_content['file_name']      = "";
						$page_content['file_download']    = "";
	
				}
			
                $this->load->view('front/template/app',$page_content);
			} 
    }
    
    /* End of file Struktur.php */
    
?>