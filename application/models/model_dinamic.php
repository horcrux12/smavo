<?php 
	/**
	 * 
	 */
	class Model_dinamic extends CI_Model
	{
		
		function getData ($table)
		{
			$this->db->select('*');
			$this->db->from($table);
			$query = $this->db->get();
			return $query->result();
		}

		function getDataDESC ($table,$by)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->order_by($by,'DESC');
			$query = $this->db->get();
			return $query->result();
		}

		function getDataLimit ($table,$lim,$by)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->order_by($by,'DESC');
			$this->db->limit($lim);
			$query = $this->db->get();
			return $query->result();
		}

		function getWhere ($table,$field,$where){
			$this->db->where($field,$where);
			$query = $this->db->get($table);
			return $query;
		}

		function getDataWhere ($table,$field,$where)
		{
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($field,$where);
			$query = $this->db->get($table);
			return $query->result();
		}	

		function input_data($data,$table){
        $this->db->insert($table, $data);
    	}

    	function update_data($field,$where,$data,$table){
        $this->db->where($field,$where);
        $this->db->update($table,$data);
    	}
			
    	public function delete_data($table,$field,$where) // menghapus data guru
		{
			$this->db->where($field,$where);
			$this->db->delete($table);
		}

	}
?>