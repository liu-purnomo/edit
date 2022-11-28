<?php
if(isset($_GET['nomor']) && $_GET['nomor'] !=''){
    //tampung data kiriman
    $nrrp=$_GET['nrrp'];
    $link="https://remotepilot.id/status-remotepilot.php?nrrp=";
    $nomor = $_GET['nomor'];

    // include file qrlib.php
    include "phpqrcode/qrlib.php";

    //Nama Folder file QR Code kita nantinya akan disimpan
    $tempdir = "../assets/qrcode/";

    //jika folder belum ada, buat folder 
    if (!file_exists($tempdir)){
        mkdir($tempdir);
    }

    #parameter inputan
    $isi_teks = $link.$nrrp;
    $namafile = "rp".$nrrp.".png";
    $quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
    $ukuran = 5; //batasan 1 paling kecil, 10 paling besar
    $padding = 2;

    QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);

    header('location:remotepilot.php');

}else{
    header('location:remotepilot.php');
}
?>