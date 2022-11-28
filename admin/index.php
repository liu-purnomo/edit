<?php include "header.php" ?>

<section class="py-0 overflow-hidden light" id="banner">
  <div class="bg-holder overlay"
    style="background-image:url(https://cdn.jsdelivr.net/gh/liu-purnomo/assets/img/bgs/contur.svg);background-position: center bottom;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row flex-center pt-4 pb-lg-9 pb-xl-0">
      <div class="mb-3 col-lg-8 pb-2 pt-4  text-center">
        <h1 class="text-white fw-light">Statistik<br />
        <span class="text-danger fw-bold">Remote Pilot Academy</span>
        </h1>
        <p></p>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

<section class="py-3 pb-6 bg-dark shadow-sm">

    <div class="container" id="layanan">
      <div class="row flex-center">
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card">
            <div class="card-body text-center">
              <a  class="stretched-link inbox-link" href="remotepilot"><img class="card-img w-100 img-thumbnail" src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/img/icon/icon-training-basic.webp" alt="">
              <?php 
                $query = mysqli_query($conn, "SELECT * FROM remotepilot");
                $remotepilot = mysqli_num_rows($query);
              ?>
              <p class="text-center fs--1"><span class="fs-2 fw-bolder text-danger"> <?= $remotepilot; ?> </span> <br> Remote Pilot Terdaftar</p></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card">
            <div class="card-body text-center">
              <a  class="stretched-link inbox-link" href="pelatihan">
                <img class="card-img w-100 img-thumbnail" src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/img/icon/icon-sertifikasi.webp" alt="">
                <?php 
                  $query = mysqli_query($conn, "SELECT * FROM pelatihan");
                  $lat = mysqli_num_rows($query);
                ?>
                <p class="text-center fs--1"><span class="fs-2 fw-bolder text-danger"> <?= $lat; ?> </span> <br> Pelatihan yang adakan</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card">
            <div class="card-body text-center">
              <a  class="stretched-link inbox-link" href="sertifikat">
              <img class="card-img w-100 img-thumbnail" src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/img/icon/icon-aerial-foto-video.webp" alt="">
                <?php 
                  $query = mysqli_query($conn, "SELECT * FROM sertifikat");
                  $sertifikat = mysqli_num_rows($query);
                ?>
              <p class="text-center fs--1"><span class="fs-2 fw-bolder text-danger"> <?= $sertifikat; ?> </span> <br> Sertifikat Diterbitkan</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card">
            <div class="card-body text-center">
              <a class="stretched-link inbox-link" href="penawaran">
                <img class="card-img w-100 img-thumbnail" src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/img/icon/training-mapping.webp" alt="">
                  <?php 
                    $query = mysqli_query($conn, "SELECT * FROM penawaran");
                    $penawaran = mysqli_num_rows($query);
                  ?>
                <p class="text-center fs--1"><span class="fs-2 fw-bolder text-danger"> <?= $penawaran; ?> </span> <br> Surat Penawaran yang dikirim</p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <div class="row justify-content-center text-center">
          <div class="mt-3 col-lg-8 col-xl-7 col-xxl-6">
            <p class="lead text-light"> Anda bisa mengecek sertifikat dengan cara scan QRcode pada sertifikat, atau dengan mengecek NO Sertifikat lewat tombol dibawah ini.</p>
          </div>
        </div>
        <a href="../validasi-sertifikat"><button class="btn btn-outline-warning border-2 rounded-pill btn-lg mt-4 fs-0 py-2" type="button"><i class="bi bi-arrow-right-circle-fill"></i> Validasi Sertifikat</button></a>
      </div>
    </div>
    <!-- end of .container-->

  </section>

<?php include "footer.php" ?>