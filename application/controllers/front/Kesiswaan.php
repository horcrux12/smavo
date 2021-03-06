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
			
			$key = $id;
			//berita terkini
			$berita_baru = $this->model_dinamic->getDataLimit ('tb_siswa',5,'tanggal_update');
			$kategori = $this->model_dinamic->getData ('tb_kat_siswa');
			
			$page_content['berita_baru'] = $berita_baru;
			$page_content['kategori'] = $kategori;
			
			
			$page_content['css'] = '
			<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
            <link href="'.base_url().'assets2/fasilitas/style_fas.css" rel="stylesheet">
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
				$doto = $this->model_dinamic->getWhere('tb_kat_siswa','nama_kat_siswa',$id)->result_array();
				$keys=$doto[0]['id_kat_siswa'];
				// print_r($key);
				$page_content['data'] = $this->model_dinamic->getWhere('tb_siswa','id_kat_siswa',$keys);
				// print_r($page_content['data']->result());

				
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
			}
			if ($id == "Organisasi") {
				$page_content['page'] = 'front/kesiswaan/v_organisasi';

				// load data organisasi
				$organisasi  = $this->model_dinamic->getData ('tb_organisasi');
				$page_content['data']['organisasi'] = $organisasi;
				// $ini = strip_tags($organisasi[4]->deskripsi, '<br><p>');
				// $inis = preg_replace('/ {2,}/', ' ', str_replace('&nbsp;', ' ', $ini));
				// print_r($ini);

			}
			if ($id == "Karya Cipta") {
				$page_content['page'] = 'front/kesiswaan/v_karya-cipta';

				$this->load->library('pagination');
				
				// load data kesiswaan
				$doto = $this->model_dinamic->getWhere('tb_kat_siswa','nama_kat_siswa',$id)->result_array();
				$keys=$doto[0]['id_kat_siswa'];
				// print_r($page_content['data']->result());

				$config['base_url'] = ''.base_url().'kesiswaan/kategori/'.$key;
				$total = $this->model_profil->count_karya($keys);

				// Config
				$config['total_rows'] = $total;
				$config['per_page'] = 3;

				$config['full_tag_open'] = '<div class="pagination pagination-2 justify-content-center">';
				$config['full_tag_close'] = '</div>';

				$config['first_link'] = 'First';
				$config['first_tag_open'] = '<a class="pageitem">';
				$config['first_tag_close'] = '</a>';

				$config['last_link'] = 'Last';
				$config['last_tag_open'] = '<a class="pageitem">';
				$config['last_tag_close'] = '</a>';

				$config['next_link'] = '&raquo';
				$config['prev_link'] = '&laquo';

				$config['cur_tag_open'] = '<a class="active">';
				$config['cur_tag_close'] = '</a>';

				// Initialize
				$this->pagination->initialize($config);

				$page_content['start'] = $this->uri->segment(4);

				// print_r($key);
				// $page_content['data'] = $this->model_dinamic->getWhere('tb_siswa','id_kat_siswa',$key);
				$data_karya = $this->model_profil->karya_page($config['per_page'],$page_content['start'],$keys);
				
				if($data_karya->num_rows()>0)
				{
					foreach ($data_karya->result() as $row )
						{
							$baris['kode']						= $row->id_artikel;
							$baris['kd_siswa']					= $row->id_kat_siswa;
							if (!$row->id_organisasi) {
								$baris['org'] = "Tidak ada organisasi";
							}else{
								$org = $this->model_dinamic->getWhere('tb_organisasi','id_organisasi',$row->id_organisasi)->result_array();
								$baris['org'] = $org[0]['nama_organisasi'];
							}
							$baris['jdl']						= $row->judul;
							$baris['kd_user']					= $row->id_user;
							$baris['isi']						= $row->deskripsi;
							$baris['file_name']					= $row->foto;
							$baris['file_download']				= $row->file;
							$baris['tanggal_update']			= $row->tanggal_update;

							$kategori = $this->model_dinamic->getWhere ('tb_kat_siswa','id_kat_siswa',$baris['kd_siswa'])->result();
							foreach ($kategori as $key) {
								$baris ['nama_kategori'] = $key->nama_kat_siswa;
								$user = $this->model_dinamic->getWhere ('tb_user','id_user',$baris['kd_user'])->result();
								foreach ($user as $key) {
									$baris ['nama_user'] = $key->nama;
								}		
							}

							$data[] = $baris;
						}
				}
				
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				$page_content['data'] = $data;
			}

			$page_content['title'] = $id;			

			// print_r($page_content['start']);

			$this->load->view('front/template/app',$page_content);
			

		}

		public function detail_karya($id)
		{
			//berita terkini
			$berita_baru = $this->model_dinamic->getDataLimit ('tb_siswa',5,'tanggal_update');
			$kategori = $this->model_dinamic->getData ('tb_kat_siswa');
			
			$page_content['berita_baru'] = $berita_baru;
			$page_content['kategori'] = $kategori;
			
			
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
				
				$page_content['page'] = 'front/kesiswaan/v_karya-cipta-detail';

				$page_content['data'] = $this->model_dinamic->getWhere('tb_siswa','id_artikel',$id);
				// print_r($page_content['data']->result());

				
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
							$page_content['title'] = 'Karya Cipta';
							$page_content['sub_title'] = $row->judul;
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
				

				$this->load->view('front/template/app',$page_content);
		}

		
	}
   /* End of file Struktur.php */
    
?>