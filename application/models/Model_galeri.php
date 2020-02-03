<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Model_galeri extends CI_Model {
    
        function GetData(){
            $this->db->select('*');
            $this->db->from('tb_galeri');
            $query = $this->db->get();
            return $query;
        }
    
    }
    
    /* End of file ModelName.php */
    
?>