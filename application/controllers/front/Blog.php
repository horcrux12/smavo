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
		$page_content['page'] = 'front/blog/v_blog';
		$page_content['css'] = '
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
		<link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">
		<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">';
		$page_content['js'] = '
		<script src="'.base_url().'assets2/js/main.js"></script>
		<script src="'.base_url().'assets2/js/scripts.js"></script>';
		$page_content['title'] = 'berita';
		   
		// Data
		$berita_baru = $this->model_dinamic->getDataLimit ('tb_berita',5,'tanggal');
		$kategori = $this->model_dinamic->getData ('tb_kat_artikel');
		// $berita = $this->model_berita->tampil_berita()->result();
		
		// Load library
		$this->load->library('pagination');

		$total = $this->model_berita->total_berita();
		// Config
		$config['base_url'] = ''.base_url().'berita';
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

		$page_content['start'] = $this->uri->segment(2);
		$page_content['berita_baru'] = $berita_baru;
		$page_content['kategori'] = $kategori;

		$page_content['berita'] = $this->model_berita->tampil_berita_page($config['per_page'], $page_content['start']);

		// $kate = $this->model_dinamic->getWhereArray('tb_organisasi','id_organisasi',$berita->id_organisasi);
		// echo $kate[0]['nama_organisasi'];
		// print_r($page_content['berita']);

		$this->load->view('front/template/app',$page_content);
	}

	public function kategori($id)
	{
		$page_content['page'] = 'front/blog/v_blog_kat';
		$page_content['css'] = '
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
		<link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="'.base_url().'assets2/styleslider.css">
		<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">';
		$page_content['js'] = '
		<script src="'.base_url().'assets2/js/main.js"></script>
		<script src="'.base_url().'assets2/js/scripts.js"></script>';
		$search  = array(
			"%20",
			"%5E",
			"%60" );
		$replace = array(
			" ",
			"^",
			"`");

		$config['base_url'] = ''.base_url().'berita/kategori/'.$id;
		$id = str_replace($search,$replace,$id);

		$kay = $this->model_dinamic->getWhere('tb_kat_artikel','nama_kat_artikel',$id)->result_array();
		$key = $kay[0]['id_kat_artikel'];

		// Load library

		$total = $this->model_berita->total_kategori_berita($key);
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
		
		$berita = $this->model_berita->tampil_kategori_berita_page($key,$config['per_page'], $page_content['start'])->result_array();
		for ($i=0; $i < count($berita); $i++) { 
			if (!$berita[$i]['id_organisasi']) {
				$berita[$i]['nama_organisasi'] = null;
			}else{
				$organisasi = $this->model_dinamic->getWhere('tb_organisasi','id_organisasi',$berita[$i]['id_organisasi'])->result_array();
				$berita[$i]['nama_organisasi'] = $organisasi[0]['nama_organisasi'];
			}
		}
		// echo "<pre>";
		// print_r($page_content['start']);
		// echo "</pre>";

		// Data
		$berita_baru = $this->model_dinamic->getDataLimit ('tb_berita',5,'tanggal');
		$kategori = $this->model_dinamic->getData ('tb_kat_artikel');

		$page_content['berita_baru'] = $berita_baru;
		$page_content['kategori'] = $kategori;
		$page_content['berita'] = $berita;
       	$page_content['title'] = $id;
		$this->load->view('front/template/app',$page_content);
	}

	public function detail($id)
	{
			$page_content['page'] ='front/blog/v_blog_detail';
			$page_content['css'] = '
			<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
			<link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
			<link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">
			<link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">';

			$page_content['js'] ='
			<script src="'.base_url().'assets2/js/main.js"></script>
			<script src="'.base_url().'assets2/js/scripts.js"></script>';

			$isi = $this->model_dinamic->getWhere('tb_berita','id_berita',$id)->result_array();
			$title_kategori = $this->model_dinamic->getWhere('tb_kat_artikel','id_kat_artikel',$isi[0]['id_kat_artikel'])->result_array(); 
			$sub_titles = explode(" ",$isi[0]['judul']);
			$berita_baru = $this->model_dinamic->getDataLimit ('tb_berita',5,'tanggal');
			$kategori = $this->model_dinamic->getData ('tb_kat_artikel');
			$sub_title = "";
			if (count($sub_titles) > 5 ){
				for ($i=0; $i < 5 ; $i++) { 
					$sub_title .= " ".$sub_titles[$i];
				}
			}else{
				$sub_title = $isi[0]['judul'];
			}

			// Isi Berita

			if (!$isi[0]['id_organisasi']) {
				$isi[0]['nama_organisasi'] = null;
			}else{
				$ini = $this->model_dinamic->getWhere('tb_organisasi','id_organisasi',$isi[0]['id_organisasi'])->result_array();
				$isi[0]['nama_organisasi'] = $ini[0]['nama_organisasi'];
			}
			$isi[0]['nama_kat_artikel'] = $title_kategori[0]['nama_kat_artikel'];
			
			$nama = $this->model_dinamic->getWhere('tb_user','id_user',$isi[0]['penulis'])->result_array(); 
			$isi[0]['nama_penulis'] = $nama[0]['nama'];

			$page_content['isi_berita'] = $isi;
			$page_content['sub_title'] = $sub_title;
			$page_content['title'] =$title_kategori[0]['nama_kat_artikel'];
			
			$page_content['berita_baru'] = $berita_baru;
			$page_content['kategori'] = $kategori;

            $this->load->view('front/template/app',$page_content);
            // print_r(count($sub_titles));
	}
}

?>