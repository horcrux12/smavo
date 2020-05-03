<?php
class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
	}

	function index(){
		$this->load->view('v_login');
	}
    
    function cek(){
        $username=($this->input->post('username'));
        $password=md5($this->input->post('password'));
        
        $cek_admin=$this->model_login->auth_admin($username,$password);
        $this->session->set_userdata($cek_admin);

        $cekin = $this->session->userdata('hak_akses');
        if ($cekin) {
            $this->session->set_userdata('masuk',true);
            print_r($this->session->userdata());
            redirect('admin/dashboard');
        }else{
            $url=base_url('admin/login');
            echo $this->session->set_flashdata('info','username atau password salah');
            redirect($url);
        }
    }
 }
