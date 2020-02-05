<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Staff extends CI_Controller {
    
        public function index()
        {
            $page_content['page'] ='front/guru/v_guru';
            $page_content['css'] ='
            <link href="'.base_url().'assets2/css/style1.css" rel="stylesheet">
		    <link href="'.base_url().'assets2/styleslider.css" rel="stylesheet">';
            $page_content['js'] ='
		    <script src="'.base_url().'assets2/js/main.js"></script>
            <script src="'.base_url().'assets2/js/scripts.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image-scale.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image-meta.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image-fetch.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image-orientation.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image-exif.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image-exif-map.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image-iptc.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/load-image-iptc-map.js"></script>
            <!--
            jQuery and Jcrop are not required by JavaScript Load Image,
            but included for the demo
            -->
            <script src="'.base_url().'assets2/JSLoadImage/js/vendor/jquery.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/vendor/jquery.Jcrop.js"></script>
            <script src="'.base_url().'assets2/JSLoadImage/js/demo/demo.js"></script>';
            $page_content['title'] ='';

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