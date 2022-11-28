<?php 

session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login");
	exit;
}

include 'functions.php';

$username = $_SESSION["username"];

$sertifikat=mysqli_query($conn, "SELECT * FROM sertifikat WHERE no_sertifikat='$_GET[no]'");
$s=mysqli_fetch_assoc($sertifikat);

$remotepilot=mysqli_query($conn, "SELECT * FROM remotepilot WHERE username='$username'");
$r=mysqli_fetch_assoc($remotepilot);

if( $s['remotepilot'] !== $r['nrrp'] ) {
	header("Location: ./");
	exit;
}

$kelas=mysqli_query($conn, "SELECT * FROM kelas WHERE kode_kelas='$s[kelas]'");
$k=mysqli_fetch_assoc($kelas);

$pelatihan=mysqli_query($conn, "SELECT * FROM pelatihan WHERE kode_lat='$k[kode_lat]'");
$p=mysqli_fetch_assoc($pelatihan);



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

    .cropped-image{
    width: 120px; /* lebar crop gambar yg diinginkan */
    height: 160px; /* tinggi crop gambar yg diinginkan */
    object-fit: cover;
    object-position: center; /* menentukan view crop image yg diinginkan */ 
    border: none;
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
            <h2>SERTIFIKAT KEHADIRAN<br/><i>CERTIFICATE OF ATTENDED</i></h2>
            <P>No. <?php echo $s['no_sertifikat']; ?></P>
            <p>Dengan ini menyatakan bahwa<br/><i>This is to certify that</i></p>
            <p><span style="font-size:2em ;"><b><?php echo $r['nama_rp']; ?></b></span></p><p>
            NRRP : <?php echo $r['nrrp']; ?></p>
            <p>Telah mengikuti pelatihan pada Bidang <br/><i>Has attended training in the area of</i></p>
            <h3><?= $p['bidang']; ?></h3>
            <p>Dengan kualifikasi / kompetensi :<br/><i>With qualification / competency:</i></p>
            <h3> <?= $p['kelas']; ?> <br/><i><?= $p['rating']; ?></i></h3>
            <p>disenggarakan oleh<br/><i>organized by</i></p>
            
            <p>Atas Nama PT Galeri Angkasa Sejahtera<br/><i>On Behalf of PT Galeri Angkasa Sejahtera</i></p>
            <h4>Remote Pilot Academy</h4>
            <br>
          <?php else : ?>
          <?php endif; ?>
				</center>
			</td>
		</tr>
		<tr>
			<td><img src="../assets/qrcode/<?= $s['nrs']; ?>.png"  width="160px"></td>
			<td></td>
			<td width="300px">
				<center><p>Jakarta, <?php echo tglIndonesia($s['tgl_terbit']); ?><br/> CEO & Founder,</p></center>
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
					
				<img src="../admin/silabus/<?= $p['silabus']; ?>"  width="100%" >
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
				<center><p><b><?php echo $r['nama_rp']; ?></b><br/>Tanda tangan pemilik <br/><i>Signature of holder</i></p></center>
			</td>
			<td><center><img class="cropped-image" src="../assets/pasfoto/<?php echo $r['gambar']; ?>" height="160px"></center></td>
			<td width="300px">
				<center><p>Jakarta, <?php echo tglIndonesia($s['tgl_terbit']); ?></p>
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