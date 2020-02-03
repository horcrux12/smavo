	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pesan extends CI_Controller {

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
			$konten['konten'] 		= 'pesan/view_pesan';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Kategori Pesan';
			$konten['data']			= $this->db->get('tb_kontak');
			$this->load->view('v_dashboard',$konten);

		}

		public function tambah() 
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'pesan/form_tambah_pesan';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data Kategori pesan';
			// $konten['kode'] 		= $this->model_pesan->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}

		public function ubah($id)
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'pesan/ubah_pesan';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data Kategori Pesan';
			$key = $id;
			$this->db->where('id_kontak',$key);
			$query = $this->db->get('tb_kontak');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						
						$konten['kode']			= $row->id_kontak;
						$konten['pengirim']		= $row->nama_pengirim;
						$konten['email']		= $row->email_pengirim;
						$konten['kat']			= $row->kategori_pesan;
						$konten['jdl']			= $row->judul_pesan;
						$konten['isi']			= $row->isi_pesan;
						
					}
				}
				else
				{
					$konten['kode']			= '';
					$konten['pengirim']		= '';
					$konten['email']		= '';
					$konten['kat']			= '';
					$konten['jdl']			= '';
					$konten['isi']			= '';
					
	
				}
			
			$this->load->view('v_dashboard',$konten);
		
			}

		public function simpan()
		{
			
			// $key = $this->input->post('kode');
			// $data['id_kontak'] 				= $this->input->post('kode');
			$data['nama_pengirim'] 			= $this->input->post('pengirim');
			$data['email_pengirim'] 		= $this->input->post('email');
			$data['kategori_pesan'] 		= $this->input->post('kat');
			$data['judul_pesan'] 			= $this->input->post('jdl');
			$data['isi_pesan'] 				= $this->input->post('isi');
			
			
			
			{
				$this->model_pesan->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
				redirect('admin/pesan');
			}
			
		}

		public function delete($id)
		{
			
			$this->load->model('model_pesan');
			$key = $id;
			$this->db->where('id_kontak',$key);
			$query = $this->db->get('tb_kontak');
		
			if($query->num_rows()>0)
				{

					$this->model_pesan->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('pesan');
	}


	public function detail($id) // Detail data pesan
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'pesan/view_detail_pesan';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail pesan';
			// $konten['data']			= $this->model_pesan->pesan(); /// me-load function tampil pesan hasil join table
			$key = $id;
			$this->db->where('id_kontak',$key);
			$query = $this->db->get('tb_kontak');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_kontak;
						$konten['pengirim']		= $row->nama_pengirim;
						$konten['email']		= $row->email_pengirim;
						$konten['kat']			= $row->kategori_pesan;
						$konten['jdl']			= $row->judul_pesan;
						$konten['isi']			= $row->isi_pesan;
						
					}
				}
				else
				{
					$konten['kode']			= '';
					$konten['pengirim']		= '';
					$konten['email']		= '';
					$konten['kat']			= '';
					$konten['jdl']			= '';
					$konten['isi']			= '';
				}
			
			$this->load->view('v_dashboard',$konten);
		
			} 

	
}	