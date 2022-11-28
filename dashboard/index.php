<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

include 'koneksi.php';

$username = $_SESSION["username"];



$sql=mysqli_query($conn, "SELECT * FROM remotepilot WHERE username='$username'");
$r=mysqli_fetch_assoc($sql);

$hasil=mysqli_num_rows($sql);
if($hasil<1){
  header("Location: data");
	exit;
}

include 'header.php';
?>

<section class="py-0 overflow-hidden light" id="banner">
  <div class="bg-holder overlay"
    style="background-image:url(https://cdn.jsdelivr.net/gh/liu-purnomo/assets/img/bgs/contur.svg);background-position: center bottom;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row flex-center pt-4 pb-lg-9 pb-xl-0">
      <div class="mb-3 col-lg-8 pb-2 pt-6  text-center">
        <h1 class="text-white fw-light">Selamat datang <span class="text-danger fw-bold">
        <?= $r['nama_rp']; ?>
        </span>
        </h1>
        <a class="mb-4 btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="edit">Ubah Data<span class="bi bi-gear ms-2" data-fa-transform="shrink-6 down-1"></span></a>
      
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

<section class="shadow-sm mt-3 pt-3">
  <div class="conatiner">
    <div class="col-md-6 mx-auto">
      <div class="row g-0">
        <div class="card mb-3 text-center">
          <div class="card-header mb-0">
            <!--/.bg-holder-->
            <div class="mt-5"><img class="shadow-sm" src="../assets/pasfoto/<?= $r['gambar']; ?>" width="200" alt="<?= $r['gambar']; ?>" />
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <h5 class="fs-0 fw-normal">NRRP : <?= $r['nrrp']; ?></h5>
                <h4 class="mb-1"> <?= $r['nama_rp']; ?><span data-bs-toggle="tooltip" data-bs-placement="right" title="Verified" class=""><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h4>
                
                <p class="text-500"><span class="bi bi-geo-alt-fill"></span><a href="#"> <?= $r['provinsi']; ?></a></p>
                <a href="id-card-print"> <button class="btn btn-outline-success px-3 mx-1 my-1" type="button"> <i class="bi bi-printer"></i> Cetak Kartu Anggota</button></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-0">
        <div class="card mb-3">
            <div class="card-header bg-info">
              <h5 class="mb-0 text-center">Sertifikat Yang Anda Miliki</h5>
            </div>
            <div class="card-body fs--1">
              <?php
              $sertifikat = mysqli_query($conn,"SELECT * FROM sertifikat WHERE remotepilot='$r[nrrp]'");
              $hasilcek=mysqli_num_rows($sql);
              if($hasilcek<1){
              ?>
                <div class="d-flex">
                  <div class="flex-1 position-relative ps-3">
                    <h6 class="fs-0 mb-0"> <a href="#!">Belum ada sertifikat</a></h6>
                  </div>
                </div>
              <?php 
                }else{ 
                while($s = mysqli_fetch_array($sertifikat)){ 
              ?>
                <div class="d-flex justify-content-between">
                  <div class="flex-1 position-relative ps-3">
                    <h6 class="fs-0 mb-0"> Nomor Sertifikat : <a href="../status-sertifikat?no_sertifikat=<?= $s['no_sertifikat']; ?>" target="_blank"><?= $s['no_sertifikat']; ?></a></h6>
                    <?php 
                      $sql=mysqli_query($conn, "SELECT * FROM kelas WHERE kode_kelas='$s[kelas]'");
                      $p=mysqli_fetch_assoc($sql);
                    ?>
                    <p class="fs-1 mb-0"><?= $p['nama_kelas']; ?></p>
                    <p class="mb-1"><?= $s['tgl_terbit']; ?></p>
                  </div>
                  <div>
                    <a class="btn btn-primary" href="print-sertifikat-pelatihan?no=<?= $s['no_sertifikat']; ?>" target="_blank"> <i class="bi bi-printer"></i> Cetak Sertifikat</a>
                  </div>
                </div>
                <div class="border-dashed-bottom my-3"></div>
              <?php }} ?>
              
            </div>
          </div>
      </div>
      <div class="row g-0">
        <div class="card mb-3">
            <div class="card-header bg-info">
              <h5 class="mb-0 text-center">Informasi Remote Pilot</h5>
            </div>
            <div class="card-body fs--1">
              <div class="d-flex">
                <div class="flex-1 position-relative ps-3">
                  <h6 class="fs-0 mb-0"> <a href="#!">Nama Lengkap</a></h6>
                  <p class="mb-1 fs-1"><?= $r['nama_rp']; ?></p>
                  <div class="border-dashed-bottom my-3"></div>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-1 position-relative ps-3">
                  <h6 class="fs-0 mb-0"> <a href="#!">No KTP</a></h6>
                  <p class="mb-1 fs-1"><?= $r['nik']; ?></p>
                  <div class="border-dashed-bottom my-3"></div>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-1 position-relative ps-3">
                  <h6 class="fs-0 mb-0"> <a href="#!">Jenis Kelamin</a></h6>
                  <p class="mb-1 fs-1"><?= $r['gender']; ?></p>
                  <div class="border-dashed-bottom my-3"></div>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-1 position-relative ps-3">
                  <h6 class="fs-0 mb-0"> <a href="#!">Agama</a></h6>
                  <p class="mb-1 fs-1"><?= $r['agama']; ?></p>
                  <div class="border-dashed-bottom my-3"></div>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-1 position-relative ps-3">
                  <h6 class="fs-0 mb-0"> <a href="#!">Tanggal Lahir</a></h6>
                  <p class="mb-1 fs-1"><?= $r['tgl_lahir']; ?></p>
                  <div class="border-dashed-bottom my-3"></div>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-1 position-relative ps-3">
                  <h6 class="fs-0 mb-0"> <a href="#!">No HP</a></h6>
                  <p class="mb-1 fs-1"><?= $r['hp']; ?></p>
                  <div class="border-dashed-bottom my-3"></div>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-1 position-relative ps-3">
                  <h6 class="fs-0 mb-0"> <a href="#!">Email</a></h6>
                  <p class="mb-1 fs-1"><?= $r['email']; ?></p>
                  <div class="border-dashed-bottom my-3"></div>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-1 position-relative ps-3">
                  <h6 class="fs-0 mb-0"> <a href="#!">Alamat</a></h6>
                  <p class="mb-1 fs-1"><?= $r['alamat']; ?></p>
                  <div class="border-dashed-bottom my-3"></div>
                </div>
              </div>

            </div>
          </div>
      </div>
    </div>
  </div>
</section>


<?php include '../partial/footer.php' ?>