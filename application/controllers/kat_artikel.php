	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kat_artikel extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
		echo "<script>;
		document.location='".base_url()."admin/login'</script>";
	
		}

	}
		
		public function index()
		{
			$konten['css']			= '';
			$konten['js']			= '
			<script src="'.base_url().'assets/js/jquery.dataTables.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.dataTables.bootstrap.min.js"></script>
			<script src="'.base_url().'assets/js/dataTables.buttons.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.flash.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.html5.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.print.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.colVis.min.js"></script>
			<script src="'.base_url().'assets/js/dataTables.select.min.js"></script>
			<script src="'.base_url().'assets/plugins/sweetalert2/sweetalert2.min.js"></script>
			<script src="'.base_url().'assets/js/table.js"></script>';
			$konten['konten'] 		= 'kat_artikel/view_kat_artikel';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Kategori Artikel';
			$konten['data']			= $this->db->get('tb_kat_artikel');
			$this->load->view('v_dashboard',$konten);

		}

		public function tambah() 
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_artikel/form_tambah_kat_artikel';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data Kategori Artikel';
			$konten['kode'] = $this->model_kat_artikel->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}

		public function ubah($id)
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_artikel/ubah_kat_artikel';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data Kategori Artikel';
			$key = $id;
			$query = $this->model_dinamic->getWhere ('tb_kat_artikel','id_kat_artikel',$id);
			$this->db->where('id_kat_artikel',$key);
			$query = $this->db->get('tb_kat_artikel');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						
						$konten['kode']			= $row->id_kat_artikel;
						$konten['nama']			= $row->nama_kat_artikel;
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nama']			= "";
	
				}
			
			$this->load->view('v_dashboard',$konten);
		
			}

		public function simpan()
		{
			
			$key = $this->input->post('kode');
			$data['id_kat_artikel'] 			= $this->input->post('kode');
			$data['nama_kat_artikel'] 			= $this->input->post('nama');
			
			
			
			$this->load->model('model_kat_artikel');
			$query = $this->model_kat_artikel->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_kat_artikel->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
				redirect('admin/kategori-artikel');
			}
			else
			{
				$this->model_kat_artikel->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
				redirect('admin/kategori-artikel');
			}
			
		}

		public function delete($id)
		{
			
			$this->load->model('model_kat_artikel');
			$key = $id;
			$query = $this->model_dinamic->getWhere ('tb_kat_artikel','id_kat_artikel',$id);
			$this->db->where('id_kat_artikel',$key);
			$query = $this->db->get('tb_kat_artikel');
		
			if($query->num_rows()>0)
				{

					$this->model_kat_artikel->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/kategori-artikel');
	}
	
}	