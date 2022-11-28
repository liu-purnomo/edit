<?php 
include "koneksi.php";
include "functions.php";

$max_id = mysqli_query($conn, "SELECT MAX(id) FROM penawaran"); 
$current_id_counter = $max_id->fetch_array()[0] + 1;
$jenis = "B.19";
$bulan = $romawi;
$tahun = date('Y');
$no_surat = $jenis."-".sprintf("%04s", $current_id_counter)."/RPA/".$bulan."/".$tahun;

$tanggal = date('Y-m-d');



if(isset($_POST['tambah'])){
  $nama_client = htmlspecialchars($_POST["nama_client"]);
  $nama_perusahaan = htmlspecialchars($_POST["nama_perusahaan"]);
  $hp = htmlspecialchars($_POST["hp"]);
  $email = htmlspecialchars($_POST["email"]);
  $alamat = htmlspecialchars($_POST["alamat"]);
}

$simpan = mysqli_query($conn, "INSERT INTO `penawaran`(`no_surat`, `nama_client`, `nama_perusahaan`, `hp`, `email`, `alamat`, `tanggal`) VALUES ('$no_surat','$nama_client','$nama_perusahaan','$hp','$email','$alamat','$tanggal')");

if($simpan){
  header("location:print-surat-penawaran?no_surat=$no_surat");
}else{
header('location:permintaan-penawaran');
}
?>