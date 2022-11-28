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
        <h1 class="text-white fw-light">Tambah <span class="text-danger fw-bold">Sertifikat</span>
        </h1>
        <a class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="sertifikat"><span class="bi bi-arrow-counterclockwise ms-2" data-fa-transform="shrink-6 down-1"> Kembali ke List Sertifikat</span></a>
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

            <form method="POST" action="sertifikat-tambah-aksi.php">

              <div class="form-group">
                <label>Nama Remote Pilot</label>
                <select name="remotepilot" class="form-control" required="required">
                  <option value=""> - Pilih - </option>
									<?php
										$remotepilot = mysqli_query($conn,"SELECT * FROM remotepilot");
										while($r = mysqli_fetch_array($remotepilot)){
											?>
											<option value="<?php echo $r['nrrp']; ?>"><?php echo $r['nama_rp']; ?></option>
											<?php
										}
										?>
                </select>
              </div>
              
              <div class="form-group">
                <label>Kelas Pelatihan / Sertifikasi</label>
                <select name="kelas" class="form-control" required="required">
                  <option value="">- Pilih -</option>
									<?php
										$kelas = mysqli_query($conn,"SELECT * FROM kelas");
										while($p = mysqli_fetch_array($kelas)){
											?>
											<option value="<?php echo $p['kode_kelas']; ?>"><?php echo $p['nama_kelas']; ?></option>
											<?php
										}
										?>
                </select>
              </div>

              <div class="form-group">
                <label for="tgl_terbit">Tanggal Terbit</label>
                <input class="form-control" type="date" name="tgl_terbit" required />
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