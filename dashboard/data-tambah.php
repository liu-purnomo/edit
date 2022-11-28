<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

$username = $_SESSION["username"];

include "koneksi.php";

function getRomawi($bln){
  switch ($bln){
      case 1: 
          return "I";
          break;
      case 2:
          return "II";
          break;
      case 3:
          return "III";
          break;
      case 4:
          return "IV";
          break;
      case 5:
          return "V";
          break;
      case 6:
          return "VI";
          break;
      case 7:
          return "VII";
          break;
      case 8:
          return "VIII";
          break;
      case 9:
          return "IX";
          break;
      case 10:
          return "X";
          break;
      case 11:
          return "XI";
          break;
      case 12:
          return "XII";
          break;
  }
}

$bulanNya = date('n');
$romawi = getRomawi($bulanNya);


$max_id = mysqli_query($conn, "SELECT MAX(id) FROM remotepilot"); 
$current_id_counter = $max_id->fetch_array()[0] + 1;

$bulan = $romawi;
$tahun = date('Y');
$thn = date('y');
$nrrp = $thn.sprintf("%04s", $current_id_counter);

$tanggal = date('Y-m-d');

if(isset($_POST['submit'])){

  $nik = $_POST["nik"];
  $nama_rp = htmlspecialchars($_POST["nama_rp"]);
  $gender = $_POST["gender"];
  $agama = $_POST["agama"];
  $tgl_lahir = $_POST["tgl_lahir"];
  $hp = $_POST["hp"];
  $email = htmlspecialchars($_POST["email"]);
  $alamat = htmlspecialchars($_POST["alamat"]);
  $provinsi = htmlspecialchars($_POST["provinsi"]);

  //upload gambar
  $gambar = $_FILES['gambar']['name'];

  function upload()
			{

				$namaFile = $_FILES['gambar']['name'];
				$ukuranFile = $_FILES['gambar']['size'];
				$error = $_FILES['gambar']['error'];
				$tmpName = $_FILES['gambar']['tmp_name'];

				//cek apakah ada gambar yang di upload
				if ($error === 4) {
					echo "<script> alert ('Belum ada gambar'); </script>";
					return false;
				}

				$extensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
				$extensiGambar = explode('.', $namaFile);
				$extensiGambar = strtolower(end($extensiGambar));
				if (!in_array($extensiGambar, $extensiGambarValid)) {
					echo "<script> alert ('hanya boleh file dengan extensi jpg, jpeg, atau webp'); </script>";
					return false;
				}

				//cek ukuran file
				if ($ukuranFile > 1000000) {
					echo "<script> alert ('Ukuran gambar terlalu besar, maksimal 1 MB'); </script>";
					return false;
				}

				//lolos cek gambar siap di upload
				require_once "../koneksi.php";
				$max_id = mysqli_query($conn, "SELECT MAX(id) FROM remotepilot"); 
				$current_id_counter = $max_id->fetch_array()[0] + 1;

				$thn = date('y');
				$nrrp = $thn.sprintf("%04s", $current_id_counter);
				//generate nama gambar
				$namaFileBaru = $nrrp;
				$namaFileBaru .= '.';
				$namaFileBaru .= $extensiGambar; 

				
				move_uploaded_file($tmpName, '../assets/pasfoto/' . $namaFileBaru);
			}

		upload();
}

$extensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
$extensiGambar = explode('.', $gambar);
$extensiGambar = strtolower(end($extensiGambar));

$nama_gambar = $nrrp.".".$extensiGambar;


$simpan = mysqli_query($conn, "INSERT INTO `remotepilot`(`username`,`nrrp`, `nik`, `nama_rp`, `gender`, `agama`, `tgl_lahir`, `hp`, `email`, `gambar`, `alamat`, `provinsi`) VALUES ('$username','$nrrp','$nik','$nama_rp','$gender','$agama','$tgl_lahir','$hp','$email','$nama_gambar','$alamat','$provinsi')");

if($simpan){
  header("location:index.php");
}else{
header('location:data');
}
?>