<?php 
include "koneksi.php";
include "functions.php";

$max_id = mysqli_query($conn, "SELECT MAX(id_kelas) FROM kelas"); 
$current_id_counter = $max_id->fetch_array()[0] + 1;

$thn = date('ym');

$kode_kelas = sprintf("%04s", $current_id_counter).$thn;

if(isset($_POST['submit'])){

  $nama_kelas = $_POST["nama_kelas"];
  $angkatan = $_POST["angkatan"];
  $kode_lat = $_POST["kode_lat"];
  $mulai_kelas = $_POST["mulai_kelas"];
  $selesai_kelas = $_POST["selesai_kelas"];
  $kota_kelas = $_POST["kota_kelas"];

}

$simpan = mysqli_query($conn, "INSERT INTO `kelas`(`kode_kelas`, `nama_kelas`, `angkatan`, `kode_lat`, `mulai_kelas`, `selesai_kelas`, `kota_kelas`) VALUES ('$kode_kelas','$nama_kelas','$angkatan','$kode_lat','$mulai_kelas','$selesai_kelas','$kota_kelas')");

if($simpan){
  header("location:kelas");
}else{
header('location:kelas-tambah');
}
?>