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
        <h1 class="text-white fw-light">Data <span class="text-danger fw-bold">Pelatihan & Sertifikasi</span>
        </h1>
        <a class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="pelatihan-tambah">Tambah Pelatihan<span class="bi bi-plus-circle ms-2" data-fa-transform="shrink-6 down-1"></span></a>
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
              <th>Jenis</th>
              <th>Nama Pelatihan</th>
              <th>Silabus</th>
              <th>Bidang</th>
              <th>Kelas</th>
              <th>Rating</th>
							<th>Tindakan</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
            $no = 1;
            $pelatihan = mysqli_query($conn,"SELECT * FROM pelatihan");
            while($p = mysqli_fetch_array($pelatihan)){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $p['jenis_lat']; ?></td>
              <td><?php echo $p['nama_lat']; ?></td>
              <td><?php echo $p['silabus']; ?></td>
              <td><?php echo $p['bidang']; ?></td>
              <td><?php echo $p['kelas']; ?></td>
              <td><?php echo $p['rating']; ?></td>
              <td>
                <a href="pelatihan-edit?id=<?php echo $p['id_kelas']; ?>" class="btn btn-warning text-white btn-sm"><i class="bi bi-gear"></i></a>
                <a href="pelatihan-hapus?id=<?php echo $p['id_kelas']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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

<script type="text/javascript">
	$(document).ready(function(){
		$(".table-saya").DataTable();


		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [

				<?php
				$desa = mysqli_query($koneksi, "SELECT * FROM desa");
				while($d=mysqli_fetch_array($desa)){
				?>
				"<?php echo $d['desa_nama']; ?>", 
				<?php
				}
				?>

				],
				datasets: [{
					label: 'Jumlah Warga',
					data: [

					<?php
					$desa = mysqli_query($koneksi, "SELECT * FROM desa");
					while($d=mysqli_fetch_array($desa)){
						$id_desa = $d['desa_id'];
						$w = mysqli_query($koneksi,"SELECT * FROM warga WHERE warga_desa='$id_desa'");
						$ww = mysqli_num_rows($w);
						?>
						"<?php echo $ww; ?>", 
						<?php
					}
					?>

					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	});
</script>

<?php
include 'footer.php';
?>