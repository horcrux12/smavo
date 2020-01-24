
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_statistik extends CI_model {

		

		function pengunjung(){
			return $this->db->query("SELECT * FROM tb_statistik WHERE tanggal='".date("Y-m-d")."' GROUP BY ip_address");
		}
		function totalpengunjung(){
			return $this->db->query("SELECT COUNT(hits) as total FROM tb_statistik");
		}
		function hits(){
			return $this->db->query("SELECT SUM(hits) as total FROM tb_statistik WHERE tanggal='".date("Y-m-d")."' GROUP BY tanggal");
		}
		function totalhits(){
			return $this->db->query("SELECT SUM(hits) as total FROM tb_statistik");
		}
		function pengunjungonline(){
			$bataswaktu       = time() - 300;
			return $this->db->query("SELECT * FROM tb_statistik WHERE online > '$bataswaktu'");
		}
		
}
