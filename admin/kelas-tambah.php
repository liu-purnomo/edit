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
        <h1 class="text-white fw-light">Tambah <span class="text-danger fw-bold">Kelas</span>
        </h1>
        <a class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="kelas"><span class="bi bi-arrow-counterclockwise ms-2" data-fa-transform="shrink-6 down-1"> Kembali ke List Kelas</span></a>
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

            <form method="POST" action="kelas-tambah-aksi.php">

              
              <div class="form-group">
                <label>Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control" required="required">
              </div>
              
              <div class="form-group">
                <label>Angkatan</label>
                <input type="number" name="angkatan" class="form-control" required="required">
              </div>
              
              <div class="form-group">
                <label>Pelatihan / Sertifikasi</label>
                <select name="kode_lat" class="form-control" required="required">
                  <option value="">- Pilih -</option>
									<?php
										$kelas = mysqli_query($conn,"SELECT * FROM pelatihan");
										while($p = mysqli_fetch_array($kelas)){
											?>
											<option value="<?php echo $p['kode_lat']; ?>"><?php echo $p['nama_lat']; ?></option>
											<?php
										}
										?>
                </select>
              </div>

              <div class="form-group">
                <label for="mulai_kelas">Tanggal Mulai Kelas</label>
                <input class="form-control" type="date" name="mulai_kelas" required />
              </div>
              
              <div class="form-group">
                <label for="selesai_kelas">Tanggal Mulai Kelas</label>
                <input class="form-control" type="date" name="selesai_kelas" required />
              </div>

              <div class="form-group">
                <label>Kota Pelaksanaan</label>
                <input type="text" name="kota_kelas" class="form-control" required="required">
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