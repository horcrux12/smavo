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
		$id = str_replace($search,$replace,$id);
       	$page_content['title'] = $id;
		$this->load->view('front/template/app',$page_content);
	}

	public function detail()
	{
			$page_content['page'] ='front/blog/v_berita';
			$page_content['css'] ='<link href="'.base_url().'assets2/css/style1.css" rel="stylesheet">
								   <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
								   <link href="'.base_url().'assets2/css/custom.css" rel="stylesheet">
								   <link href="'.base_url().'assets2/css/plugins.css" rel="stylesheet">
								   <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';

			$page_content['js'] ='<script src="'.base_url().'assets2/js/main.js"></script>
								  <script src="'.base_url().'assets2/js/scripts.js"></script>';
            $page_content['title'] ='Umum';

            $this->load->view('front/template/app',$page_content);
            
	}
}

?>