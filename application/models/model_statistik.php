
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_statistik extends CI_model {

		function hitCountMount($month,$year){
			// $this->db->select('*');
			$this->db->from('tb_statistik');
			$this->db->where('month(tanggal)',$month);
			$this->db->where('year(tanggal)',$year);
			$this->db->select_sum('hits');
			return $this->db->get()->result();
		}
		
		function hitCountYear($year){
			// $this->db->select('*');
			$this->db->from('tb_statistik');
			$this->db->where('year(tanggal)',$year);
			$this->db->select_sum('hits');
			return $this->db->get()->result();
		}

		function hitCountThisDay($day){
			// $this->db->select('*');
			$this->db->from('tb_statistik');
			$this->db->where('tanggal',$day);
			$this->db->select_sum('hits');
			return $this->db->get()->result();
		}
		
		function hitCountAll(){
			// $this->db->select('*');
			$this->db->from('tb_statistik');
			// $this->db->where('ip_address',$data['ip_address']);
			// $this->db->where('month(tanggal)',date('m'));
			$this->db->select_sum('hits');
			return $this->db->get()->result();
		}

		function DataThisDay($ip,$tanggal){
			$this->db->select('*');
			$this->db->from('tb_statistik');
			$this->db->where('ip_address',$ip);
			$this->db->where('tanggal',$tanggal);
			return $this->db->get();
		}
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
