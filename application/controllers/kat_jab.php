	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kat_jab extends CI_Controller {

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
			$konten['konten'] 		= 'kat_jabatan/view_kat_jabatan';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Kategori Jabatan';
			$konten['data']			= $this->db->get('tb_jabatan');
			$this->load->view('v_dashboard',$konten);

		}

		public function tambah() 
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_jabatan/form_tambah_kat_jabatan';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data Kategori Jabatan';
			$konten['kode'] 		= $this->model_kat_jabatan->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}

		public function ubah($id)
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_jabatan/ubah_kat_jabatan';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data Kategori Jabatan';
			$key = $id;
			$query = $this->model_dinamic->getWhere ('tb_jabatan','id_jabatan',$id);
			$this->db->where('id_jabatan',$key);
			$query = $this->db->get('tb_jabatan');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						
						$konten['kode']			= $row->id_jabatan;
						$konten['nama']			= $row->nama_jabatan;
						
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
			$data['id_jabatan'] 			= $this->input->post('kode');
			$data['nama_jabatan'] 			= $this->input->post('nama');
			
			
			
			$this->load->model('model_kat_jabatan');
			$query = $this->model_kat_jabatan->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_kat_jabatan->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
				redirect('admin/kategori-jabatan');
			}
			else
			{
				$this->model_kat_jabatan->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
				redirect('admin/kategori-jabatan');
			}
			
		}

		public function delete($id)
		{
			
			$this->load->model('model_kat_jabatan');
			$key = $id;
			$query = $this->model_dinamic->getWhere ('tb_jabatan','id_jabatan',$id);
			$this->db->where('id_jabatan',$key);
			$query = $this->db->get('tb_jabatan');
		
			if($query->num_rows()>0)
				{

					$this->model_kat_jabatan->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/kategori-jabatan');
	}
	
}	