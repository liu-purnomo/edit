<?php 
include "koneksi.php";
include "functions.php";

$max_id = mysqli_query($conn, "SELECT MAX(id) FROM remotepilot"); 
$current_id_counter = $max_id->fetch_array()[0] + 1;

$bulan = $romawi;
$tahun = date('Y');
$thn = date('y');
$nrrp = $thn.sprintf("%04s", $current_id_counter);

$tanggal = date('Y-m-d');

if(isset($_POST['submit'])){

  $nik = $_POST["nik"];
  $nama_rp = $_POST["nama_rp"];
  $gender = $_POST["gender"];
  $agama = $_POST["agama"];
  $tgl_lahir = $_POST["tgl_lahir"];
  $hp = $_POST["hp"];
  $email = $_POST["email"];
  $alamat = $_POST["alamat"];
  $provinsi = $_POST["provinsi"];

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
				move_uploaded_file($tmpName, 'pasfoto/' . $namaFile);
			}

			upload();
}



$simpan = mysqli_query($conn, "INSERT INTO `remotepilot`(`nrrp`, `nik`, `nama_rp`, `gender`, `agama`, `tgl_lahir`, `hp`, `email`, `gambar`, `alamat`, `provinsi`) VALUES ('$nrrp','$nik','$nama_rp','$gender','$agama','$tgl_lahir','$hp','$email','$gambar','$alamat','$provinsi')");

if($simpan){
  header("location:remotepilot-detail.php?nrrp=$nrrp");
}else{
header('location:remotepilot-tambah');
}
?>