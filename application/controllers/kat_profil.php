	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class kat_profil extends CI_Controller {

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
			$konten['konten'] 		= 'kat_profil/view_kat_profil';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Kategori Profil';
			$konten['data']			= $this->db->get('tb_kat_profil');
			$this->load->view('v_dashboard',$konten);

		}

		public function tambah() 
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_profil/form_tambah_kat_profil';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data Kategori Profil';
			$konten['kode'] = $this->model_kat_profil->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}

		public function ubah()
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_profil/ubah_kat_profil';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data Kategori Profil';
			$key = $this->uri->segment(3);
			$this->db->where('id_kat_profil',$key);
			$query = $this->db->get('tb_kat_profil');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						
						$konten['kode']			= $row->id_kat_profil;
						$konten['nama']			= $row->nama_kat_profil;
						
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
			$data['id_kat_profil'] 				= $this->input->post('kode');
			$data['nama_kat_profil'] 			= $this->input->post('nama');
			
			
			
			$this->load->model('model_kat_profil');
			$query = $this->model_kat_profil->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_kat_profil->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
				redirect('kat_profil');
			}
			else
			{
				$this->model_kat_profil->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
				redirect('kat_profil');
			}
			
		}

		public function delete()
		{
			
			$this->load->model('model_kat_profil');
			$key = $this->uri->segment(3);
			$this->db->where('id_kat_profil',$key);
			$query = $this->db->get('tb_kat_profil');
		
			if($query->num_rows()>0)
				{

					$this->model_kat_profil->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('kat_profil');
	}
	
}	