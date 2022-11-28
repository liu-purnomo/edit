<?php 
include "koneksi.php";
include "functions.php";
include "partial/header.php";
?>

<section class="py-0 overflow-hidden light" id="banner">
  <div class="bg-holder overlay"
    style="background-image:url(https://cdn.jsdelivr.net/gh/liu-purnomo/assets/img/bgs/contur.svg);background-position: center bottom;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row flex-center pt-5 pb-lg-9 pb-xl-0">
      <div class="col-lg-8 pb-2 pt-8  text-center">
        <h1 class="text-white fw-light">Permintaan <span class="text-danger fw-bold">Penawaran</span>
        </h1>
      </div>
      <div class="text-center mt-0 mb-5 mt-xl-0">
        <a href=""><img class="img-fluid" src="img/logo/light-logo-rpa.webp" alt="" width="300px"/></a>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

  <!-- ============================================-->

    <div class="container">
      <div class="row justify-content-center mt-4 mb-4">
        <div class="col col-lg-8 col-md-12">
          <div class="card">
            <div class="card-header text-center bg-success">
              <h2>Masukkan data Anda</h2>
            </div>
            <div class="card-body">
              <?php 
              
              ?>
              <form action="aksi-penawaran.php" method="POST">
                <div class="mb-3">
                  <label class="form-label">Nama Anda</label>
                  <input class="form-control" name="nama_client" type="text" required autofocus/>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama Perusahaan Anda</label>
                  <input class="form-control" name="nama_perusahaan" type="text" required/>
                  
                </div>
                <div class="mb-3">
                  <label class="form-label">No WA aktif yang dapat dihubungi</label>
                  <input class="form-control" name="hp" type="text" required/>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Alamat email aktif yang dapat dihubungi</label>
                  <input class="form-control" name="email" type="text" required/>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Alamat Perusahaan Anda</label>
                  <input class="form-control" name="alamat" type="text" required/>
                </div>
                <button class="btn btn-primary d-block w-100" type="submit" name="tambah">Lihat Surat Penawaran</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- <section> close ============================-->
<!-- ============================================-->
<?php include "partial/footer.php" ?>