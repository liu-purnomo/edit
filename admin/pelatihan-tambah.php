<?php

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
        <h1 class="text-white fw-light">Tambah <span class="text-danger fw-bold">Pelatihan</span>
        </h1>
        <a class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="pelatihan"><span class="bi bi-arrow-counterclockwise my-2" data-fa-transform="shrink-6 down-1"></span>Kembali ke List Pelatihan</a>
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

            <form method="POST" enctype="multipart/form-data" action="pelatihan-tambah-aksi.php">

            <div class="form-group">
                <label>Jenis</label>
                <select name="jenis_lat" class="form-control" required="required">
                  <option value=""> - Pilih - </option>
                  <option value="Pelatihan">Pelatihan</option>
                  <option value="Sertifikasi">Sertifikasi</option>
                </select>
              </div>

              <div class="form-group">
                <label>Nama Pelatihan</label>
                <textarea name="nama_lat" class="form-control" required rows="4"></textarea>
              </div>

              <div class="form-group">
                <label>Silabus Pelatihan</label>
                <input class="form-control" type="file" name="silabus" required />
              </div>

              <div class="form-group">
                <label for="tgl_lahir">Bidang</label>
                <input class="form-control" type="text" name="bidang" required />
              </div>
              
              <div class="form-group">
                <label>Kelas</label>
                <textarea name="kelas" class="form-control" rows="4"></textarea>
              </div>
              
              <div class="form-group">
                <label>Rating</label>
                <textarea name="rating" class="form-control" rows="4"></textarea>
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