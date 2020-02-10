<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Model_galeri extends CI_Model {
    
        function GetData(){
            $this->db->select('*');
            $this->db->from('tb_galeri');
            $query = $this->db->get();
            return $query;
        }
    
        public function getdelete($key) // menghapus data galeri
		{
			$this->db->where('id_galeri',$key);
			$this->db->delete('tb_galeri');
		}


    }
    
    /* End of file ModelName.php */
    
?>