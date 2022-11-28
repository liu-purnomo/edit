<?php 
include "koneksi.php";
include "functions.php";

$max_id = mysqli_query($conn, "SELECT MAX(id_sertifikat) FROM sertifikat"); 
$current_id_counter = $max_id->fetch_array()[0] + 1;

$jenis = "SRT";
$bulan = $romawi;
$tahun = date('Y');
$thn = date('y');

$nrs = $thn.sprintf("%04s", $current_id_counter);

$no_sertifikat = $jenis."-".$thn.sprintf("%04s", $current_id_counter)."/RPA/".$bulan."/".$tahun;


if(isset($_POST['submit'])){

  $remotepilot = $_POST["remotepilot"];
  $kelas = $_POST["kelas"];
  $tgl_terbit = $_POST["tgl_terbit"];
}

$simpan = mysqli_query($conn, "INSERT INTO `sertifikat`(`nrs`, `no_sertifikat`, `remotepilot`, `kelas`, `tgl_terbit`) VALUES ('$nrs','$no_sertifikat','$remotepilot','$kelas','$tgl_terbit')");

if($simpan){
  header("location:sertifikat");
}else{
header('location:sertifikat-tambah');
}
?>