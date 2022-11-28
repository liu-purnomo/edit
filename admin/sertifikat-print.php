<?php 
session_start();
if(isset($_SESSION['login'])){
  include "functions.php";

  $sql=mysqli_query($conn, "SELECT * FROM sertifikat,remotepilot,kelas WHERE remotepilot=nrrp and kelas=kode_kelas");
  $d=mysqli_fetch_array($sql);

  $tgl1    = $d['tanggal_lat']; // menentukan tanggal awal
  $tgl2    = date('Y-m-d', strtotime('+2 years', strtotime($tgl1))); // penjumlahan tanggal sebanyak 20 hari

	
	$sql=mysqli_query($conn, "SELECT * FROM pelatihan WHERE kode_lat=$d[kode_lat]");
	$l=mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sertifikat</title>
	<link rel="icon" href="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/rpa-pavicon.png">
	<style type="text/css">
		body{
			font-family: Arial;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<table border="1" cellpadding="40" cellspacing="0" width="100%">
<tr>
	<td>
	<table width="100%">
		<tr>
			<td colspan="3">
				<center>
          <img src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/logo.png" width="205px" >
          <?php if( $d['jenis_lat'] = "Sertikasi" ) : ?>
            <h2>SERTIFIKAT KOMPETENSI<br/><i>CERTIFICATE OF COMPETENCE</i></h2>
            <P>No. <?php echo $d['no_sertifikat']; ?></P>
            <p>Dengan ini menyatakan bahwa<br/><i>This is to certify that</i></p>
            <p><span style="font-size:2em ;"><b><?php echo $d['nama_rp']; ?></b></span><br>
            NRRP <?php echo $d['nrrp']; ?></p>
            <p>Telah Kompeten pada Bidang <br/><i>Is competent in the area of</i></p>
            <h2><?= $l['bidang']; ?></h2>
            <p>Dengan Kelas :<br/><i>With Rating:</i></p>
            <h2> <?= $l['kelas']; ?> <br/><i><?= $l['rating']; ?></i></h2>
            <p>Sertifikat Berlaku untuk 2 (dua) Tahun<br/><i>This Certificate is valid for 2 (Two) Years</i></p>
            <p>Atas Nama PT Galeri Angkasa Sejahtera<br/><i>On Behalf of PT Galeri Angkasa Sejahtera</i></p>
            <p>Remote Pilot Academy</p>
            <br>
          <?php else : ?>
          <?php endif; ?>
				</center>
			</td>
		</tr>
		<tr>
			<td><img src="temp/<?php echo $d['nrs'].".png"; ?>" width="160px"></td>
			<td></td>
			<td width="300px">
				<center><p>Jakarta, <?php echo tglIndonesia($d['tgl_terbit']); ?><br/> CEO & Founder,</p></center>
				<img src="../assets/img/signstamps.png" width="300px" style="margin: -60px 0px -45px -80px;">
				<center><p><b>Liu Purnomo</b></p></center>
			</td>
		</tr>
	</table>
	</td>
</tr>
</table>
<br>
<table border="1" cellpadding="40" cellspacing="0" width="100%">
<tr>
	<td>
	<table width="100%">
		<tr>
			<td colspan="3">
			<img src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/rpa-dark.webp" width="140px" >
			<br>
				<center>
					
				<img src="silabus/<?= $l['silabus']; ?>"  width="100%" >
				<p>
				Atas Nama PT Galeri Angkasa Sejahtera <br/><i>
				On Behalf of PT Galeri Angkasa Sejahtera</i><br/>Remote Pilot Academy</p>
				</center>
			</td>
		</tr>
		<tr>
			<td>
				<center><p></center>
				<br><br><br><br>
				<center><p><b><?php echo $d['nama_rp']; ?></b><br/>Tanda tangan pemilik <br/><i>Signature of holder</i></p></center>
			</td>
			<td><center><img src="pasfoto/<?php echo $d['gambar']; ?>" height="150px"></center></td>
			<td width="300px">
				<center><p>Jakarta, <?php echo tglIndonesia($d['tgl_terbit']); ?></p>
				<img src="../assets/img/sign-as.png" height="110px" style="margin: -30px -30px;">
				<p><b>Agus Santoso</b><br/>Manajer Pelatihan dan Sertifikasi<br/><i>Training and Certification Manager</i></p></center>
			</td>
		</tr>
	</table>
	</td>
</tr>
</table>
<center><a href="#" class="no-print" onclick="window.print();">Cetak/Print</a></center>
</body>
</html>

<?php
}else{
	header('location:login.php');
}
?>