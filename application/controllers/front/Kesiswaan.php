<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kesiswaan extends CI_Controller {
    
        public function index()
        {
            $page_content['page'] ='';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/fasilitas/style_fas.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/scripts.js"></script>';
			$page_content['title'] ='';
			
            $this->load->view('front/template/app',$page_content);
        }

        public function kategori($id){
			
			$page_content['css'] = '
			<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
			<link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
			<link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">
			<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">';
			
			$page_content['js'] = '
			<script src="'.base_url().'assets2/js/main.js"></script>
			<script src="'.base_url().'assets2/js/scripts.js"></script>
			<script src="'.base_url().'assets2/js/main.js"></script>
            <script src="'.base_url().'assets2/js/scripts.js"></script>
            <script>
			$(function() {
			$('."'".'[data-toggle="tooltip"]'."'".').tooltip()
			})
            </script>';
			
			$search  = array(
				"%20",
				"%5E",
				"%60" );
			$replace = array(
				" ",
				"^",
				"`");
			$id = str_replace($search,$replace,$id);


			if ($id == "Tata Tertib" || $id == "Aturan Akademik") {	
				
				$page_content['page'] = 'front/kesiswaan/v_kesiswaan';
				
				// load data kesiswaan
				$key=$id;
				$page_content['data'] = $this->model_dinamic->getWhere('tb_siswa','id_artikel',$key);
				

					if($page_content['data']->num_rows()>0)
				{

					foreach ($page_content['data']->result() as $row )
						{
							$page_content['kode']						= $row->id_artikel;
							$page_content['kd_siswa']					= $row->id_kat_siswa;
							if (!$row->id_organisasi) {
								$page_content['org'] = "Tidak ada organisasi";
							}else{
								$org = $this->model_dinamic->getWhere('tb_organisasi','id_organisasi',$row->id_organisasi)->result_array();
								$page_content['org'] = $org[0]['nama_organisasi'];
							}
							$page_content['jdl']						= $row->judul;
							$page_content['kd_user']					= $row->id_user;
							$page_content['isi']						= $row->deskripsi;
							$page_content['file_name']					= $row->foto;
							$page_content['file_download']				= $row->file;
							}
						}
							else
							{
									$page_content['kode']					= "";
									$page_content['kd_siswa']				= "";
									$page_content['org']					= "";
									$page_content['jdl']					= "";
									$page_content['kd_user']				= "";
									$page_content['isi']					= "";
									$page_content['file_name']				= "";
									$page_content['file_download']			= "";
						} 
							$kategori = $this->model_dinamic->getWhere ('tb_kat_siswa','id_kat_siswa',$page_content['kd_siswa'])->result();
							foreach ($kategori as $key) {
							$page_content ['nama_kategori'] = $key->nama_kat_siswa;

							$user = $this->model_dinamic->getWhere ('tb_user','id_user',$page_content['kd_user'])->result();
							foreach ($user as $key) {
							$page_content ['nama_user'] = $key->nama;
						}		
				}

			if ($id == "Organisasi") {
				$page_content['page'] = 'front/kesiswaan/v_organisasi';

				// load data organisasi
				$organisasi  = $this->model_dinamic->getData ('tb_organisasi');
				$page_content['data']['organisasi'] = $organisasi;

			}
			if ($id == "Karya Cipta") {
				$page_content['page'] = 'front/kesiswaan/v_kesiswaan';
			}

			$page_content['title'] = $id;

			$this->load->view('front/template/app',$page_content);

		}
	}
 }   /* End of file Struktur.php */
    
?>