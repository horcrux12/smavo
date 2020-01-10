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
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />';
			$konten['js']			= '
			<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
			<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
			<script src="'.base_url().'assets/js/autosize.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
			
			<script>
			$("#id-input-file-1 , #id-input-file-2").ace_file_input({
				no_file:"No File ...",
				btn_choose:"Choose",
				btn_change:"Change",
				droppable:false,
				onchange:null,
				thumbnail:false //| true | large
				//whitelist:"gif|png|jpg|jpeg"
				//blacklist:"exe|php"
				//onchange:""
				//
			});

			$("#id-input-file-3").ace_file_input({
				style: "well",
				btn_choose: "Drop files here or click to choose",
				btn_change: null,
				no_icon: "ace-icon fa fa-cloud-upload",
				droppable: true,
				thumbnail: "small"//large | fit
				//,icon_remove:null//set null, to hide remove/reset button
				/**,before_change:function(files, dropped) {
					//Check an example below
					//or examples/file-upload.html
					return true;
				}*/
				/**,before_remove : function() {
					return true;
				}*/
				,
				preview_error : function(filename, error_code) {
					//name of the file that failed
					//error_code values
					//1 = "FILE_LOAD_FAILED",
					//2 = "IMAGE_LOAD_FAILED",
					//3 = "THUMBNAIL_FAILED"
					//alert(error_code);
				}
		
			}).on("change", function(){
				//console.log($(this).data("ace_input_files"));
				//console.log($(this).data("ace_input_method"));
			});
			</script>
			';
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
	      $config['max_size'] 		= 5000;
	      $config['max_width'] 		= 5000;
	      $config['max_height'] 	= 5000;
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
			$konten['css']			= '';
			$konten['js']			= '';
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