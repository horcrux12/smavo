	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Guru extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
		
		public function index()
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'guru/view_guru';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data guru';
			$konten['data']			= $this->db->get('tb_guru');
			$konten['data']			= $this->model_guru->guru(); /// me-load function tampil guru hasil join table
			$this->load->view('v_dashboard',$konten);

		}


		public function tambah() // tambah data guru
		{
			
			$konten['konten'] 		= 'guru/form_tambah_guru';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data guru';
			$konten['kode'] = $this->model_guru->kode(); //tambah kode otomatis		
			$this->load->view('v_dashboard',$konten);
		}


		public function simpan() // simpan data guru
		{
		  $config['upload_path'] 	= './assets/photo/';
	      $config['allowed_types'] 	= 'gif|jpg|jpeg|png';
	      $config['max_size'] 		= 2500;
	      $config['max_width'] 		= 2500;
	      $config['max_height'] 	= 2500;
	      $config['encrypt_name']	= FALSE;
	     
	 
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	 
	      if ( ! $this->upload->do_upload('file_name')){
	        $this->session->set_flashdata('info_gagal','Foto Gagal Diupload atau foto melebihi 2500x2500 pixel. Silakan pilih foto yang lain');
	         redirect('guru/tambah'); 
	      } else {
			
			$key = $this->input->post('kode');
			$data['id_guru'] 					= $this->input->post('kode');
			$data['nip'] 						= $this->input->post('nip');
			$data['nama_lengkap'] 				= $this->input->post('nama');
			$data['tempat_lahir'] 				= $this->input->post('tempat');
			$data['tgl_lahir'] 					= $this->input->post('tanggal');
			$data['id_jabatan'] 				= $this->input->post('jbt');
			$data['id_mapel'] 					= $this->input->post('mapel');
			$data['foto'] 						= $this->upload->data('file_name'); 
			
			
			$this->load->model('model_guru');
			$query = $this->model_guru->getdata($key);
			if($query->num_rows()>0)

			{

				$this->model_guru->getupdate($key,$data);
				$this->session->set_flashdata('info','Data berhasil di update');
			}
			else
			{
				$this->model_guru->getinsert($data);
				$this->session->set_flashdata('info','Data berhasil di simpan');
			}
			redirect('guru');
		

		} 


	}

		public function ubah() // Mengubah data guru
		{
			
			$konten['konten'] 		= 'guru/form_ubah_guru';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data guru';
			$key = $this->uri->segment(3);
			$this->db->where('id_guru',$key);
			$query = $this->db->get('tb_guru');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_guru;
						$konten['nip']			= $row->nip;
						$konten['nama']			= $row->nama_lengkap;
						$konten['tempat']		= $row->tempat_lahir;
						$konten['tanggal']		= $row->tgl_lahir;
						$konten['jbt']			= $row->id_jabatan;
						$konten['mapel']		= $row->id_mapel;
						$konten['file_name']	= $row->foto;
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nip']			= "";
						$konten['nama']			= "";
						$konten['tempat']		= "";
						$konten['tanggal']		= "";
						$konten['jbt']			= "";
						$konten['mapel']		= "";
						$konten['file_name']	= "";
						
			
			} 
				$this->load->view('v_dashboard',$konten);
}

		public function detail() // Detail data guru
		{
			
			$konten['konten'] 		= 'guru/view_detail_guru';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail guru';
			$konten['data']			= $this->model_guru->guru(); /// me-load function tampil guru hasil join table
			$key = $this->uri->segment(3);
			$this->db->where('id_guru',$key);
			$query = $this->db->get('tb_guru');
			if($query->num_rows()>0)
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_guru;
						$konten['nip']			= $row->nip;
						$konten['nama']			= $row->nama_lengkap;
						$konten['tempat']		= $row->tempat_lahir;
						$konten['tanggal']		= $row->tgl_lahir;
						$konten['jbt']			= $row->id_jabatan;
						$konten['mapel']		= $row->id_mapel;
						$konten['file_name']	= $row->foto;				
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['nip']			= "";
						$konten['nama']			= "";
						$konten['tempat']		= "";
						$konten['tanggal']		= "";
						$konten['jbt']			= "";
						$konten['mapel']		= "";
						$konten['file_name']	= "";
				}
			
			$this->load->view('v_dashboard',$konten);
		
			} 


		public function delete()
		{
			
			$this->load->model('model_guru');
			$key = $this->uri->segment(3);
			$this->db->where('id_guru',$key);
			$query = $this->db->get('tb_guru');
		
			if($query->num_rows()>0)
				{

					$this->model_guru->getdelete($key);
					$this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('guru');

} 
	
	}	