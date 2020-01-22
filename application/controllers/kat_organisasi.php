	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kat_organisasi extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<script>alert('Waktu Anda Telah Habis,Silakan Login Terlebih Dahulu');
    	  document.location='http://localhost/smavo/login'</script>";
	
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
			$konten['konten'] 		= 'kat_organisasi/view_kat_organisasi';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Organisasi';
			$konten['data']			= $this->db->get('tb_organisasi');
			$this->load->view('v_dashboard',$konten);

		}

		public function tambah() 
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_organisasi/form_tambah_kat_organisasi';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data Organisasi';
			$konten['kode'] 		= $this->model_kat_organisasi->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}

		public function ubah()
		{
			
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_organisasi/ubah_kat_organisasi';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data Organisasi';
			$key = $this->uri->segment(3);
			$this->db->where('id_organisasi',$key);
			$query = $this->db->get('tb_organisasi');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						
						$konten['kode']			= $row->id_organisasi;
						$konten['nama']			= $row->nama_organisasi;
						
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
			$data['id_organisasi'] 				= $this->input->post('kode');
			$data['nama_organisasi'] 			= $this->input->post('nama');
			
			
			
			$this->load->model('model_kat_organisasi');
			$query = $this->model_kat_organisasi->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_kat_organisasi->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
				redirect('kat_organisasi');
			}
			else
			{
				$this->model_kat_organisasi->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
				redirect('kat_organisasi');
			}
			
		}

		public function delete()
		{
			
			$this->load->model('model_kat_organisasi');
			$key = $this->uri->segment(3);
			$this->db->where('id_organisasi',$key);
			$query = $this->db->get('tb_organisasi');
		
			if($query->num_rows()>0)
				{

					$this->model_kat_organisasi->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('kat_organisasi');
	}
	
}	