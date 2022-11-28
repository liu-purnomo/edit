<?php 
session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login");
	exit;
}

include 'functions.php';

$username = $_SESSION["username"];

$remotepilot=mysqli_query($conn, "SELECT * FROM remotepilot WHERE username='$username'");
$r=mysqli_fetch_assoc($remotepilot);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ID Card <?= $r['nama_rp']; ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/liu-purnomo/id-card-drone-indonesia-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/liu-purnomo/id-card-drone-indonesia-assets/css/Lexend.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/liu-purnomo/id-card-drone-indonesia-assets/css/styles.css">
</head>

<body>
    <div class="container" style="width: 639px;background: url(&quot;../assets/img/bg/bg-id-card.webp&quot;) center / contain no-repeat;text-align: center;"><img src="../assets/img/logo/logo.png" style="padding-top: 20px;width: 200px;">
        <h1 style="font-family: Lexend, sans-serif;font-weight: bolder;text-align: center;color: black;font-size: 20px;padding-top: 10px;padding-bottom: 16px;margin-bottom: 10px;">REMOTE PILOT INDONESIA</h1>
        <div class="row">
            <div class="col"><img src="../assets/pasfoto/<?= $r['gambar']; ?>" style="width: 188px;margin-top: 58px;border-radius: 50%;margin-bottom: 70px;margin-left: 0px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <h1 style="font-family: Lexend, sans-serif;color: #e61f37;font-weight: bold;margin-top: 0px;font-size: 25px;"><?= strtoupper($r['nama_rp']); ?></h1>
                <p style="color: #e61f37;margin-top: -14px;">NRP : <?= $r['nrrp']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col"><img src="../assets/qrcode/rp<?= $r['nrrp']; ?>.png"  style="margin-top: 15px;margin-bottom: 18px;width: 112px;"></div>
        </div>
        <div class="row">
            <div class="col">
                <p style="color: #e61f37;font-family: Lexend, sans-serif;margin-top: 10px;">&copy; 2022 Remote Pilot Academy</p>
                <p style="color: #e61f37;font-family: Lexend, sans-serif;margin-bottom: 37px;margin-top: -21px;">www.remotepilot.id</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/id-card-drone-indonesia-assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>