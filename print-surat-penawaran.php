<center><a href="#" class="no-print" onclick="window.print();">Print Surat Penawaran Sekarang</a></center>
<?php 
	include "koneksi.php";
  include "dashboard/functions.php";
  
  $sql=mysqli_query($conn, "SELECT * FROM penawaran WHERE no_surat='$_GET[no_surat]'");
  $d=mysqli_fetch_array($sql);

  $tgl1    = date('Y-m-d'); // menentukan tanggal awal
  $tgl2    = date('Y-m-d', strtotime('+20 days', strtotime($tgl1))); // penjumlahan tanggal sebanyak 20 hari

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sertifikat</title>
	<link rel="icon" href="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/img/logo/rpa-logo-pavicon.png">
	<style type="text/css">
		body{
			font-family: Arial;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<table border="0" cellpadding="30" cellspacing="0" width="100%">
<tr>
	<td>
	<table width="100%">
		<tr>
			<td colspan="3">
      <img src="https://cdn.jsdelivr.net/gh/liu-purnomo/asset/rpa/img/kop-surat-nospace.webp" width="100%" >
      <p style="text-align: right;">Jakarta, <?= tglIndonesia($d['tanggal']); ?> </p>
      <table>
        <tr>
          <td>No </td>
          <td> : </td>
          <td><?= $d['no_surat']; ?> </td>
        </tr>
        <tr>
          <td valign="top">Perihal </td>
          <td valign="top"> : </td>
          <td>
            <b>Penawaran Pelatihan dan Sertifikasi <br> Remote Pilot Sesuai CASR Part 107</b>
          </td>
        </tr>
      </table>
      
      <p>Kepada Yth <br/>
      Bpk/Ibu <b> <?= $d['nama_client']; ?> </b><br/>
      <?= $d['nama_perusahaan']; ?>
      </p>
      
      <table>
        <tr>
          <td>Di</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td>- Tempat</td>
        </tr>
      </table>

      <p>Dengan Hormat</p>
      <p style="text-align: justify; text-indent: 50px;" >Kami, PT Galeri Angkasa Sejahtera (Remote Pilot Academy) merupakan Pusat Pelatihan dan Sertifikasi Remote Pilot resmi yang telah diakui oleh Direktorat Kelaikudaraan dan Pengoperasian Pesawat Udara (DKPPU). Melalui surat ini, Kami bermaksud untuk menawarkan kelas Pelatihan & Sertifikasi Remote Pilot Sesuai CASR 107 kepada <?= $d['nama_perusahaan']; ?> ,untuk memenuhi kebutuhan sumber daya manusia khususnya dalam bidang keahlian Remote Pilot (Pilot Drone) di <?= $d['nama_perusahaan']; ?>.</p>

      <p style="text-align: justify; text-indent: 50px;" >Adapun pilihan paket pelatihan dan sertifikasi yang kami tawarkan adalah sebagai berikut.</p>

      <center>
        <p>
          <b>Pilihan Paket Pelatihan Operator Drone</b> <br/>
          Remote Pilot Academy
        </p>
        <table width="100%" border="1" cellpadding="2" cellspacing="0">
          <tr>
            <th width="20%">Nama Paket</th>
            <th width="40%">IHT MAPPING</th>
            <th width="40%">IHT FOTO VIDEO</th>
          </tr>
          <tr>
            <th>Pelatihan</th>
            <td>Pemetaan</td>
            <td>Foto dan Video</td>
          </tr>
          <tr>
            <th>Harga</th>
            <td>Rp. 7.000.000/org</td>
            <td>Rp. 4.000.000/org</td>
          </tr>
          <tr>
            <th>Durasi</th>
            <td>5 Hari</td>
            <td>2 Hari</td>
          </tr>
          <tr>
            <th>Minimal Peserta</th>
            <td>5 Orang</td>
            <td>5 Orang</td>
          </tr>
          <tr>
            <th>Materi</th>
            <td>
              <ul>
                <li>Pengantar Drone</li>
                <li>Regulasi Terkait Drone</li>
                <li>Teori Pemetaan Drone</li>
                <li>Praktik Pembuatan Misi Terbang (Dronedeploy)</li>
                <li>Praktik Aquisisi Data (Drone Deploy)</li>
                <li>Praktk Pengolahan Data (Agisoft)</li>
                <li>Praktik Layouting Peta (ArcGIS)</li>
              </ul>
            </td>
            <td>
              <ul>
                <li>Pengantar Drone</li>
                <li>Regulasi Terkait Drone</li>
                <li>Teori Aerial Foto dan Video</li>
                <li>Praktik Penerbangan Drone</li>
                <li>Praktik Pengambilan Foto & Video</li>
              </ul>
            </td>
          </tr>
          <tr>
            <th>Kaidah Pelatihan</th>
            <td>Offline</td>
            <td>Offline</td>
          </tr>
        </table>
        <br>
        <p>
          <b>Pilihan Paket Sertifikasi Remote Pilot</b> <br/>
          Remote Pilot Academy
        </p>
        <table width="100%" border="1" cellpadding="2" cellspacing="0">
          <tr>
            <th width="20%">Nama Paket</th>
            <th width="40%">INHOUSE OFFLINE</th>
            <th width="40%">INHOUSE HYBRID</th>
          </tr>
          <tr>
            <th>Biaya</th>
            <td>Rp. 7.500.000/org</td>
            <td>Rp. 6.000.000/org</td>
          </tr>
          <tr>
            <th>Minimal Peserta</th>
            <td>10 Orang</td>
            <td>10 Orang</td>
          </tr>
          <tr>
            <th>Durasi</th>
            <td>- Teori 3 Hari (Offline) <br/> - Praktik 3 Hari (Offline) <br/> - Total 6 Hari </td>
            <td>- Teori 3 Hari (Online) <br/> - Praktik 3 Hari (Offline) <br> - Total 6 Hari </td>
          </tr>
          <tr>
            <th>Materi Pembelajaran</th>
            <td>
              - 12 Aeronaitical Knowledge <br/>
              - Basic Drone Theory <br/>
              - How To Register RPC & Drone <br/>
              - How To Apply Flight Permit
            </td>
            <td>
              - 12 Aeronaitical Knowledge <br/>
              - Basic Drone Theory <br/>
              - How To Register RPC & Drone <br/>
              - How To Apply Flight Permit
            </td>
          </tr>
        </table>
        <p>
          <b>Pilihan Paket Khusus Sertifikasi Remote Pilot</b> <br/>
          Remote Pilot Academy
        </p>
        <table width="100%" border="1" cellpadding="2" cellspacing="0">
          <tr>
            <th width="20%">Nama Paket</th>
            <th width="40%">IHO 5 ORG</th>
            <th width="40%">IHO 20 ORG</th>
          </tr>
          <tr>
            <th>Biaya</th>
            <td>Rp. 10.00.000/org</td>
            <td>Rp. 4.500.000/org</td>
          </tr>
          <tr>
            <th>Minimal Peserta</th>
            <td>5 Orang</td>
            <td>20 Orang</td>
          </tr>
          <tr>
            <th>Durasi</th>
            <td>- Teori 3 Hari (Offline) <br/> - Praktik 3 Hari (Offline) <br/> - Total 6 Hari </td>
            <td>- Teori 3 Hari (Offline) <br/> - Praktik 3 Hari (Offline) <br/> - Total 6 Hari </td>
          </tr>
          <tr>
            <th>Materi Pembelajaran</th>
            <td>
              - 12 Aeronaitical Knowledge <br/>
              - Basic Drone Theory <br/>
              - How To Register RPC & Drone <br/>
              - How To Apply Flight Permit
            </td>
            <td>
              - 12 Aeronaitical Knowledge <br/>
              - Basic Drone Theory <br/>
              - How To Register RPC & Drone <br/>
              - How To Apply Flight Permit
            </td>
          </tr>
        </table>
      </center>
			<p>Catatan</p>
        <table cellpadding="3" cellspacing="0">
          <tr>
            <td valign="top"> a). </td>
            <td>Biaya belum termasuk pajak 11%.</td>
          </tr>
          <tr>
            <td valign="top"> b). </td>
            <td>Biaya belum termasuk akomodasi, konsumsi dan transportasi instruktur dari Jakarta ke site <?= $d['nama_perusahaan']; ?>.</td>
          </tr>
          <tr>
            <td valign="top"> c). </td>
            <td><?= $d['nama_perusahaan']; ?> menyediakan Ruang Meeting dan Lapangan.</td>
          </tr>
          <tr>
            <td valign="top"> d). </td>
            <td>
              Peserta Training dari <?= $d['nama_perusahaan']; ?> akan mendapatkan :
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <table cellpadding="3" cellspacing="0">
                  <tr>
                    <td valign="top"> 1 </td>
                    <td>Kartu keanggotaan Remote Pilot Academy</td>
                  </tr>
                  <tr>
                    <td valign="top"> 2 </td>
                    <td>Rompi Safety Remote Pilot Academy</td>
                  </tr>
                  <tr>
                    <td valign="top"> 3 </td>
                    <td>Topi Remote Pilot Academy</td>
                  </tr>
                  <tr>
                    <td valign="top"> 4 </td>
                    <td>Sertifikat Remote Pilot Academy</td>
                  </tr>
                  <tr>
                    <td valign="top"> 5 </td>
                    <td>Wing / brevet Remote Pilot Academy</td>
                  </tr>
                </table>
            </td>
          </tr>
          <tr>
            <td valign="top"> e). </td>
            <td>Pembayaran DP 50% 1 minggu sebelum pelaksanaan ( bersamaan dengan pengembalian Surat Penawaran yang sudah ditandatangani ), dan 50% pelunasan saat pelaksanaan pelatihan.</td>
          </tr>
          <tr>
            <td valign="top"> f). </td>
            <td> Pembayaran melalui transfer ke :
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <table cellpadding="3" cellspacing="0">
                <tr>
                  <td>Bank </td>
                  <td>:</td>
                  <td>BCA</td>
                </tr>
                <tr>
                  <td>Atas Nama </td>
                  <td>:</td>
                  <td>Liu Purnomo</td>
                </tr>
                <tr>
                  <td>KCP </td>
                  <td>:</td>
                  <td>Tanah Abang</td>
                </tr>
                <tr>
                  <td>Nomor Rekening </td>
                  <td>:</td>
                  <td>654-039-3506</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td valign="top"> g). </td>
            <td>Peserta Sertfikasi dari <?= $d['nama_perusahaan']; ?> akan dipandu untuk mendapatkan sertifikat dari Kementerian Perhubungan, dengan syarat peserta harus menyiapkan</td>
          </tr>
          <tr>
            <td></td>
            <td>
              <table  cellpadding="3" cellspacing="0">
                <tr>
                  <td valign="top">1. </td>
                  <td>Pasfoto elektronik dengan latar merah</td>
                </tr>
                <tr>
                  <td valign="top">2. </td>
                  <td>Surat keterangan sehat dari dokter ( di scan )</td>
                </tr>
                <tr>
                  <td valign="top">3. </td>
                  <td>KTP ( di scan )</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td valign="top"> h). </td>
            <td>Pesanan tidak dapat dibatalkan setelah PT. Galeri Angkasa Sejahtera menerima PO dari, pembatalan dari klien membuat DP yang sudah dibayarkan hangus<?= $d['nama_perusahaan']; ?>.</td>
          </tr>
          <tr>
            <td valign="top"> i). </td>
            <td>Penawaran harga ini valid hingga <?= tglIndonesia($tgl2); ?> .</td>
          </tr>
        </table>
			</td>
		</tr>
    <tr></tr>
		<tr>
			<td width="300px">
        <center>
        <p>Disetujui Oleh</p>
        <br><br><br>
        <p><b> <?= $d['nama_client']; ?> </b></p>
        </center>
      </td>
			<td width="300px">
        <p></p>
      </td>
			<td width="300px">
				<center> <p>Jakarta, <?php echo tglIndonesia($d['tanggal']); ?> <br/> CEO & Founder,</p></center>
				<img src="assets/img/signstamps.png" width="250px" style="margin: -50px 0px -45px -60px;">
				<center><p><b>Liu Purnomo</b></p></center>
			</td>
		</tr>
    <tr></tr>
    <tr>
      <td colspan="3">
        <table  cellpadding="3" cellspacing="0">
          <tr>
            <td valign="top">NO PO </td>
            <td> : </td>
            <td> .......................................................................</td>
          </tr>
          <tr>
            <td valign="top">Tanggal PO </td>
            <td> : </td>
            <td> .......................................................................</td>
          </tr>
        </table>
        <br>
        <p>
          <b>Paket Yang Dipilih</b> <br/>
          <i>Beri tanda centang pada paket yang dipilih</i>
        </p>
        <?php include "centang-pilihan-paket.php" ?>
        <table  cellpadding="3" cellspacing="0">
          <tr>
            <td valign="top">Note  </td>
            <td> : </td>
            <td> Silahkan tanda tangan pada bagian “Disetujui Oleh” jika menyetujui. Dokumen penawaran yang ditandatangani oleh klien akan menjadi Purchase Order (PO)</td>
          </tr>
        </table>
        <table  cellpadding="3" cellspacing="0">
          <tr>
            <td colspan="3">
              Untuk informasi lebih lanjut bisa menghubungi kami di :
            </td>
          </tr>
          <tr>
            <td valign="top">Email </td>
            <td> : </td>
            <td> mail@remotepilot.id </td>
          </tr>
          <tr>
            <td valign="top">No HP / WA  </td>
            <td> : </td>
            <td> 0812-9510-5211 (Bu. Beci)</td>
          </tr>
        </table>
      </td>
    </tr>

  </table>
	</td>
</tr>

</table>

<center><a href="#" class="no-print" onclick="window.print();">Cetak/Print</a></center>


</body>
</html>
