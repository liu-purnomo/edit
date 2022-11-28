<?php

session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

$username = $_SESSION["username"];

include 'koneksi.php';
$sql=mysqli_query($conn, "SELECT * FROM remotepilot WHERE username='$username'");
$r=mysqli_fetch_assoc($sql);

$hasil=mysqli_num_rows($sql);
if($hasil>0){
  header("Location: index.php");
	exit;
}

include "header.php";

?>

<section class="py-0 overflow-hidden light" id="banner">
  <div class="bg-holder overlay"
    style="background-image:url(https://cdn.jsdelivr.net/gh/liu-purnomo/assets/img/bgs/contur.svg);background-position: center bottom;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row flex-center pt-4 pb-lg-9 pb-xl-0">
      <div class="mb-3 col-lg-8 pb-2 pt-6  text-center">
        <h1 class="text-white fw-light">Tambah <span class="text-danger fw-bold">Remote Pilot</span>
        </h1>
        <a class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="remotepilot"><span class="bi bi-arrow-counterclockwise me-2" data-fa-transform="shrink-6 down-1"> Kembali ke List Remote Pilot</span></a>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

<section class="py-3 bg-light shadow-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card mb-5">
          <div class="card-body">

            <form method="POST" enctype="multipart/form-data" action="data-tambah.php">

              <input type="text" name="username" value="<?= $username; ?>" hidden> 

              <div class="form-group">
                <label>No.KTP</label>
                <input type="number" name="nik" class="form-control" required="required">
              </div>

              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama_rp" class="form-control" required="required">
              </div>

              

              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="gender" class="form-control" required="required">
                  <option value=""> - Pilih - </option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              
              <div class="form-group">
                <label>Agama</label>
                <select name="agama" class="form-control" required="required">
                  <option value="">- Pilih -</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tgl_lahir" required />
              </div>

              <div class="form-group">
                <label>No HP</label>
                <input type="text" name="hp" class="form-control" required="required">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required="required">
              </div>
              
              <div class="form-group">
                <label>Alamat Lengkap</label>
                <textarea name="alamat" class="form-control" rows="4"></textarea>
              </div>

              <div class="form-group">
                <label>Provinsi</label>
                <input type="text" name="provinsi" class="form-control" required="required">
              </div>
              
              <div class="form-group">
                <label>Pasfoto Background Merah</label>
                <input class="form-control" type="file" name="gambar" required />
              </div>

              <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md btn-block">

            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>