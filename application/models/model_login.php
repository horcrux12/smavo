<?php
class Model_login extends CI_Model{
	
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM tb_user WHERE username='$username' AND password=('$password')");
		return $query->row_array();
			
	}
}
