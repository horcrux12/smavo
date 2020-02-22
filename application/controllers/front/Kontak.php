<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kontak extends CI_Controller {
    
        public function index()
        {
            $kontak  = $this->model_dinamic->getData ('tb_profil');
            $page_content['data']['kontak'] 		= $kontak;

            $page_content['page'] ='front/kontak/v_kontak';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/fasilitas/style_fas.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/scripts.js"></script>';
            $page_content['title'] ='Kontak';

            $this->load->view('front/template/app',$page_content);
        }

        public function simpan()
		{
            
			$key = $this->input->post('kode');
			$data['id_kontak'] 				= $this->input->post('kode');
			$data['nama_pengirim'] 			= $this->input->post('pengirim');
			$data['email_pengirim'] 		= $this->input->post('email');
			$data['kategori_pesan'] 		= $this->input->post('kat');
			$data['judul_pesan'] 			= $this->input->post('jdl');
            $data['isi_pesan'] 				= $this->input->post('isi');
            
			{
				$this->model_pesan->getinsert($data);
                echo "<script>alert('Pesan Terkirim')</script>";  
            }

                // $this->load->view('front/template/app',$page_content); 
                redirect('kontak/kontak-kami'); 
		}
    

    public function lokasi()
        {
            
            $page_content['page'] ='front/kontak/v_lokasi';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/fasilitas/style_fas.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            
            $page_content['js'] ='
            <script src="'.base_url().'assets2/js/scripts.js"></script>';
            $page_content['title'] ='Lokasi';

            $this->load->view('front/template/app',$page_content);
        }
    
    /* End of file Struktur.php */
    }

?>