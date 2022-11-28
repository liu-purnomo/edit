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
        <h1 class="text-white fw-light">List of <span class="text-danger fw-bold">Remote Pilot</span>
        </h1>
        <a class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="remotepilot-tambah">Tambah Remote Pilot<span class="bi bi-plus-circle ms-2" data-fa-transform="shrink-6 down-1"></span></a>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

<section class="py-3 bg-light shadow-sm">

<div class="container">

	<div class="card">
		<div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-saya">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>No.KTP</th>
              <th>NRRP</th>
              <th>Email</th>
              <th>No HP</th>
              <th>Opsi</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
            $no = 1;
            $remotepilot = mysqli_query($conn,"SELECT * FROM remotepilot");
            while($r = mysqli_fetch_array($remotepilot)){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td class=" align-middle white-space-nowrap py-2">
                <a href="#">
                  <div class="d-flex d-flex align-items-center">
                    <div class="avatar avatar-xl me-2">
                      <img class="rounded-circle" src="../asstes/pasfoto/<?= $r['gambar']; ?>" alt="" />

                    </div>
                    <div class="flex-1">
                      <?= $r['nama_rp']; ?>
                    </div>
                  </div>
                </a>
              </td>
              <td class="align-middle"><?php echo $r['nik']; ?></td>
              <td class="align-middle"><?php echo $r['nrrp']; ?></td>
              <td class="align-middle"><?php echo $r['email']; ?></td>
              <td class="align-middle"><?php echo $r['hp']; ?></td>
              <td class="align-middle">
                <a href="remotepilot-qrcode.php?nrrp=<?= $r['nrrp']; ?>&nomor=<?= $r['username']; ?>" class="btn btn-success text-white btn-sm"><i class="bi bi-qr-code-scan"></i></a>
                <a href="sertifikat-print.php?no_sertifikat=<?= $s['no_sertifikat']; ?>&remotepilot=<?= $s['nrrp']; ?>&kelas=<?= $s['kode_kelas']; ?>" class="btn btn-primary text-white btn-sm"><i class="bi bi-printer"></i>
               </td>
            </tr>
            <?php 
            }
            ?>
          </tbody>

        </table>

      </div>
		</div>
	</div>

</div>
</section>

<?php
include 'footer.php';
?>