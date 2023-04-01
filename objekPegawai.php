<?php 
require 'pegawai.php';
$pegawai1= new Pegawai("121313","tiar","Manager","Islam","Menikah");
$pegawai2= new Pegawai("121314","timo","Kepala Bagian","kristen","belum menikah");
$pegawai3= new Pegawai("121318","dina","Staff","Islam","Menikah");
$pegawai4=new Pegawai ("12342","jhon","Manager","katolik","belum menikah");
$pegawai5=new Pegawai ("12342","arlis","Asisten Manager","kristen","belum menikah");
$arr_pegawai=[$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];
foreach ($arr_pegawai as $pgw) {
  $pgw->cetak();  
}



?>