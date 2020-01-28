
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_statistik extends CI_model {

		

		function pengunjung(){
			$a=$this->db->query("SELECT * FROM tb_statistik WHERE tanggal='".date("Y-m-d")."' GROUP BY ip_address");
			return $a;
		}
		function totalpengunjung(){
			$b=$this->db->query("SELECT COUNT(hits) as total FROM tb_statistik");
			return $b;
		}
		function hits(){
			$c=$this->db->query("SELECT SUM(hits) as total FROM tb_statistik WHERE tanggal='".date("Y-m-d")."' GROUP BY tanggal");
			return $c;
		}
		function totalhits(){
			return $this->db->query("SELECT SUM(hits) as total FROM tb_statistik");
		}
		function pengunjungonline(){
			$bataswaktu       = time() - 300;
			return $this->db->query("SELECT * FROM tb_statistik WHERE online > '$bataswaktu'");
		}
		
}
