	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kat_mapel extends CI_Controller {

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
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_mapel/view_kat_mapel';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data Kategori Mapel';
			$konten['data']			= $this->db->get('tb_mapel');
			$this->load->view('v_dashboard',$konten);

		}

		public function tambah() 
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_mapel/form_tambah_kat_mapel';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data Kategori Mapel';
			$konten['kode'] 		= $this->model_kat_mapel->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}

		public function ubah()
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'kat_mapel/ubah_kat_mapel';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data Kategori Mapel';
			$key = $this->uri->segment(3);
			$this->db->where('id_mapel',$key);
			$query = $this->db->get('tb_mapel');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						
						$konten['kode']			= $row->id_mapel;
						$konten['nama']			= $row->nama_mapel;
						
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
			$data['id_mapel'] 				= $this->input->post('kode');
			$data['nama_mapel'] 			= $this->input->post('nama');
			
			
			
			$this->load->model('model_kat_mapel');
			$query = $this->model_kat_mapel->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_kat_mapel->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
				redirect('kat_mapel');
			}
			else
			{
				$this->model_kat_mapel->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
				redirect('kat_mapel');
			}
			
		}

		public function delete()
		{
			
			$this->load->model('model_kat_mapel');
			$key = $this->uri->segment(3);
			$this->db->where('id_mapel',$key);
			$query = $this->db->get('tb_mapel');
		
			if($query->num_rows()>0)
				{

					$this->model_kat_mapel->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('kat_mapel');
	}
	
}	