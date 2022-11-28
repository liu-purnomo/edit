<?php

include "partial/header.php";
include "koneksi.php";

$sql=mysqli_query($conn, "SELECT * FROM sertifikat WHERE no_sertifikat='$_GET[no_sertifikat]'");
$d=mysqli_fetch_array($sql);

$sql=mysqli_query($conn, "SELECT * FROM remotepilot WHERE nrrp=$d[remotepilot]");
$rp=mysqli_fetch_array($sql);

$sql=mysqli_query($conn, "SELECT * FROM kelas WHERE kode_kelas=$d[kelas]");
$kls=mysqli_fetch_array($sql);


?>

<section class="py-0 overflow-hidden light" id="banner">
  <div class="bg-holder overlay"
    style="background-image:url(https://cdn.jsdelivr.net/gh/liu-purnomo/assets/img/bgs/contur.svg);background-position: center bottom;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row flex-center pt-4 pb-lg-9 pb-xl-0">
      <div class="mb-3 col-lg-8 pb-2 pt-6  text-center">
        <h1 class="text-white fw-light">Status <span class="text-danger fw-bold">Keabsahan</span> Sertifikat</h1>
        <a class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="https://remotepilot.id/cek-sertifikat"><span class="bi bi-arrow-counterclockwise me-2" data-fa-transform="shrink-6 down-1"> </span>Cek Sertifikat Lainnya</a>
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
            <div class="text-center">
              <a href="https://remotepilot.id/"><img src="assets/img/logo/logo.png" alt="" width="250px" style="padding: 20px;"></a>
            </div>

            <div class="text-center">
              <?php if(mysqli_num_rows($sql) < 1){ ?>
                <div class="alert alert-danger">
                    <strong>Maaf, Data sertifikat tidak ditemukan..!</strong><br>
                    <i>Silakan Hubungi <a href="https://remotepilot.id/tentang"></a> Remote Pilot Academy</i>
                </div>
              <?php }else{ ?>
                <p>Status Sertifikat
                <br/><span style="font-size: 1.5em;"> <b>
                    Valid
                    </b></span>
                </p>
                <p>Diterbitkan Tanggal
                <br/><span style="font-size: 1.5em;"> <b>
                    <?php echo tglIndonesia($d['tgl_terbit']); ?>
                    </b></span>
                </p>
                <p>Nama Remote Pilot <br/> <span style="font-size: 1.5em;"> <b><?php echo $rp['nama_rp']; ?></b> </span></p>
                <p>Kelas <br/> <span style="font-size: 1.5em;"><b><?= $kls['nama_kelas']; ?></b></span> </p>
                <p>Nomor Sertifikat <br/> <span style="font-size: 1.5em;"> <b> <?php echo $d['no_sertifikat']; ?></b> </span></p>
                <img src="assets/pasfoto/<?php echo $rp['gambar']; ?>" alt="Foto <?php echo $rp['nama_rp']; ?>" width="250px">
              <?php }; ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================-->
<!-- <section> begin ============================-->
  <section class="bg-light">

    <div class="bg-holder bg-light"
      style="background-image:url(assets/img/bg/hero-footer2.webp);background-position: center top; ">
    </div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <p class="fs-3 fs-sm-4 text-dark">Jadilah remote pilot professional dengan mengikuti pelatihan dan sertifikasi di <span class="text-danger"><b>Remote Pilot Academy</b></span> sekarang juga.</p>
          <a href="permintaan-penawaran"><button class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" type="button">Minta Penawaran <i class="bi bi-play"></i></button></a>
        </div>
      </div>
    </div>
    <!-- end of .container-->

  </section>
<!-- <section> close ============================-->
<!-- ============================================-->


      <section style="background-color:#0d8ead;" class="pt-5 pb-4 light">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <p class="text-1000"><b>Remote Pilot Academy</b> adalah pusat Pelatihan dan Sertifikasi Remote Pilot di Indonesia
              </p>
              <div class="icon-group mt-4">
                <a class="icon-item bg-white text-facebook" href="#!"><span class="bi bi-facebook"></span></a>
                <a class="icon-item bg-white text-twitter" href="#!"><span class="bi bi-twitter"></span></a>
                <a class="icon-item bg-white text-google-plus" href="#!"><span class="bi bi-google"></span></a>
                <a class="icon-item bg-white text-linkedin" href="#!"><span class="bi bi-github"></span></a>
                <a class="icon-item bg-white" href="#!"><span class="bi bi-instagram"></span></a>
              </div>
            </div>
            <div class="col ps-lg-6 ps-xl-8">
              <div class="row mt-5 mt-lg-0">
                <div class="col-6 col-md-4">
                  <h5 class="text-uppercase text-white opacity-85 mb-2">Pages</h5>
                  <ul class="list-unstyled">
                    <li class="mb-1"><a class="link-1000" href="tentang">About Us</a></li>
                    <li class="mb-1"><a class="link-1000" href="kebijakan-privasi">Privacy</a></li>
                    <li class="mb-1"><a class="link-1000" href="media-kit">Media Kit</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-4">
                  <h5 class="text-uppercase text-white opacity-85 mb-2">For You</h5>
                  <ul class="list-unstyled">
                    <li class="mb-1"><a class="link-1000" href="dashboard">dashboard</a></li>
                    <li class="mb-1"><a class="link-1000" href="jadwal">Jadwal Pelatihan</a></li>
                    <li class="mb-1"><a class="link-1000" href="paket">Paket Pelatihan & Harga</a></li>
                  </ul>
                </div>
                <div class="col mt-4 mt-md-0">
                  <div class="row">
                    <div class="col-6 col-md-12">
                      <h5 class="text-uppercase text-white opacity-85 mb-2">Group Diskusi</h5>
                      <ul class="list-unstyled">
                        <li class="mb-1"><a class="link-1000" href="https://web.facebook.com/groups/diskusidrone">Facebook</a></li>
                        <li class="mb-1"><a class="link-1000" href="https://t.me/droneindonesia">Telegram</a></li>
                        <li class="mb-1"><a class="link-1000" href="https://discord.gg/uFgUQzsqmG">Discord</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <section class="py-0 bg-dark light">

        <div>
          <hr class="my-0 text-100 opacity-25" />
          <div class="container py-3">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-100 opacity-85"> &copy; 2022 <a class="text-white opacity-85" href="https://remotepilot.id"><b> Remote Pilot Academy.</b></a><span class="mb-0 text-100 opacity-85"> all rights reserved</span></p>
            </div>
          </div>
        </div> 
        <!-- end of .container-->
      
      </section>

    </main>

    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/anchorjs/anchor.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/is/is.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/swiper/swiper-bundle.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/typed.js/typed.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/fontawesome/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/vendors/list.js/list.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/js/theme.js"></script>

  </body>

</html>