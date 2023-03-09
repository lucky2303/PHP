<?php 
// Tanggal lahir
$tanggal_lahir = "2002-03-23";

// Menghitung umur
$tgl_lahir = new DateTime($tanggal_lahir);
$tgl_sekarang = new DateTime();
$umur = $tgl_sekarang->diff($tgl_lahir)->format('%y years, %m months, %d days old');
?>