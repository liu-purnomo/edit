<?php 
include "koneksi.php";
include "functions.php";

$max_id = mysqli_query($conn, "SELECT MAX(id_lat) FROM pelatihan"); 
$current_id_counter = $max_id->fetch_array()[0] + 1;

$thn = date('ym');

$kode_lat = $thn.sprintf("%04s", $current_id_counter);

if(isset($_POST['submit'])){

  $jenis_lat = $_POST["jenis_lat"];
  $nama_lat = $_POST["nama_lat"];
  $bidang = $_POST["bidang"];
  $kelas = $_POST["kelas"];
  $rating = $_POST["rating"];
  
  $silabus = $_FILES['silabus']['name'];

  function upload()
			{

				$namaFile = $_FILES['silabus']['name'];
				$ukuranFile = $_FILES['silabus']['size'];
				$error = $_FILES['silabus']['error'];
				$tmpName = $_FILES['silabus']['tmp_name'];

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
				move_uploaded_file($tmpName, 'silabus/' . $namaFile);
			}

			upload();

}

$simpan = mysqli_query($conn, "INSERT INTO `pelatihan`(`kode_lat`, `jenis_lat`, `nama_lat`, `silabus`, `bidang`, `kelas`, `rating`) VALUES ('$kode_lat','$jenis_lat','$nama_lat','$silabus','$bidang','$kelas','$rating')");

if($simpan){
  header("location:pelatihan");
}else{
header('location:pelatihan-tambah');
}
?>