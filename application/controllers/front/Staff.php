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

            $data = $this->model_guru->getGuru()->result_array();
            $jabatan = $this->model_dinamic->getData('tb_jabatan');

            foreach ($jabatan as $key) {
                foreach ($data as $kiy) {
                    if ($kiy['id_jabatan'] == $key->id_jabatan) {
                        if ($kiy['id_mapel']==null) {
                            $mapel = null;
                        }else{
                            $nih = $this->model_dinamic->getWhere('tb_mapel','id_mapel',$kiy['id_mapel'])->result_array();
                            $mapel = $nih[0]['nama_mapel'];
                        }
                        $guru[$key->id_jabatan][] = array (
                            'id_guru'           => $kiy['id_guru'],
                            'nip'               => $kiy['nip'],
                            'nama_lengkap'      => $kiy['nama_lengkap'],
                            'tempat_lahir'      => $kiy['tempat_lahir'],
                            'tgl_lahir'         => $kiy['tgl_lahir'],
                            'id_jabatan'        => $kiy['id_jabatan'],
                            'id_mapel'          => $kiy['id_mapel'],
                            'nama_mapel'        => $mapel,
                            'foto'              => $kiy['foto'],
                            'jabatan'           => $kiy['jabatan'],
                            'nama_jabatan'      => $kiy['nama_jabatan']
                        );
                    }
                }
            }
            // foreach ($jabatan as $key) {
            //     $data[$key->nama_jabatan] = $this->model_guru->GetDataWhere($key->id_jabatan)->result();
            // }
            $page_content['data'] = $guru;
            $this->load->view('front/template/app',$page_content);
        }
    
    }
    
    /* End of file Staff.php */
    
?>