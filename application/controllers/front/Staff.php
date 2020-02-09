<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Staff extends CI_Controller {
    
        public function index()
        {
            $page_content['page'] ='front/guru/v_guru';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/css/style.css" rel="stylesheet">
            <link href="'.base_url().'assets2/css/helper.css" rel="stylesheet">
            <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            $page_content['js'] ='
		    <script src="'.base_url().'assets2/js/main.js"></script>
            <script src="'.base_url().'assets2/js/scripts.js"></script>';
            $page_content['title'] ='Staff dan Guru';

            $jabatan = $this->model_dinamic->getData('tb_jabatan');

            foreach ($jabatan as $key) {
                $data[$key->nama_jabatan] = $this->model_guru->GetDataWhere($key->id_jabatan)->result();
            }
            $page_content['data'] = $data;

            // foreach ($data as $key => $value) {
            //     echo "$key","<br>";
            //     foreach ($data[$key] as $key) {
            //         echo $key->nama_lengkap,"<br>";
            //         echo $key->nip,"<br>";
            //         echo $key->nama_jabatan,"<br>","<br>";
            //     }
            // }

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // $data_jabatan = array("Kepala Sekolah",);
            // // echo rotates("http://localhost/smavo/assets/photo/guru/CONY_NUGRAHENI.JPG");
            //     $data = getimagesize("http://localhost/smavo/assets/photo/guru/CONY_NUGRAHENI.JPG");
            //     print_r($data);
            //     echo "<img src='http://localhost/smavo/assets/photo/guru/DRS__BAMBANG_SUMANTO1.JPG'>";

            $this->load->view('front/template/app',$page_content);
        }
    
    }
    
    /* End of file Staff.php */
    
?>