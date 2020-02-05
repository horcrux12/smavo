<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('rotates')) {
    function rotates($url)
    {
        $set = getimagesize($url);
            if ($set) {
                // width
                $ambilst = explode (" ",$set[3]);
                $ambilsts = str_replace('width="',"",$ambilst[0]);
                $ambilstst = str_replace('"',"",$ambilsts);

                // //height
                // $ambilsts1 = str_replace('height="',"",$ambilst[1]);
                // $ambilstst1 = str_replace('"',"",$ambilsts1);
                // // print_r($ambilstst1-200);
                // // echo "<br>";
                // // print_r($ambilstst1);

                if($ambilstst > 1800){
                
                $ubahnya = "ubah";
                }else{
                
                $ubahnya = ""; 
                
                }
            }
    return $ubahnya;
  }
}