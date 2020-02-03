<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('format_indo_bln')) {
  function format_indo_bln($date){
    // array hari dan bulan
    // $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    
    // pemisahan tahun, bulan, hari, dan waktu
    // $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    // $tgl = substr($date,8,2);
    // $waktu = substr($date,11,5);
    // $hari = date("w",strtotime($date));
    $result = $Bulan[(int)$bulan-1];

    return $result;
  }
}