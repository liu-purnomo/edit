
<form class="no-print" action="" method="post">
  <input type="checkbox" name="paket[]" value="IHT MAPPING"> IHT MAPPING 
  <input type="checkbox" name="paket[]" value="IHT FOTO VIDEO"> IHT FOTO VIDEO
  <input type="checkbox" name="paket[]" value="INHOUSE OFFLINE"> INHOUSE OFFLINE 
  <input type="checkbox" name="paket[]" value="INHOUSE HIYBRID">  NHOUSE HYBRID 
  <input type="checkbox" name="paket[]" value="IHO 5 ORG"> IHO 5 ORG 
  <input type="checkbox" name="paket[]" value="IHO 20 ORG"> IHO 20 ORG 
  <br><br>
  <input type="submit" value="Pilih Paket">
</form>

<?php
  //Mengecek apakah ada nilai paket yang dikirim dari form
  if (isset($_POST['paket'])) :
      $paket=$_POST['paket'];
  
?>

<div>
  <table width="100%" border="1" cellpadding="3" cellspacing="0">
    <tr>
      <th width="30%">Paket yang dipilih</th>
      <th width="20%">Min. Peserta</th>
      <th width="25%">Harga</th>
      <th width="25%">Jumlah</th>
    </tr>
    <?php for ($i=0; $i < count($paket) ; $i++){ ?>
    <tr> 
        <td> <center>
          <?php 
            if($paket[$i] == "IHT MAPPING"){
              echo "Paket IHT MAPPING";
            } elseif ($paket[$i] == "IHT FOTO VIDEO"){
              echo "Paket IHT FOTO VIDEO";
            } elseif ($paket[$i] == "INHOUSE OFFLINE") {
              echo "Paket INHOUSE OFFLINE";
            }elseif ($paket[$i] == "INHOUSE HIYBRID") {
              echo "Paket INHOUSE HIYBRID";
            }elseif ($paket[$i] == "IHO 5 ORG") {
              echo "Paket IHO 5 ORG";
            }elseif ($paket[$i] == "IHO 20 ORG") {
              echo "Paket IHO 20 ORG";
            }
          ?> </center>
        </td>
        <td> <center>
          <?php 
            if($paket[$i] == "IHT MAPPING"){
              echo 5 . " orang";
            } elseif ($paket[$i] == "IHT FOTO VIDEO"){
              echo 5 . " orang";
            } elseif ($paket[$i] == "INHOUSE OFFLINE") {
              echo 10 . " orang";
            }elseif ($paket[$i] == "INHOUSE HIYBRID") {
              echo  10 . " orang";
            }elseif ($paket[$i] == "IHO 5 ORG") {
              echo 5 . " orang";
            }elseif ($paket[$i] == "IHO 20 ORG") {
              echo  20 . " orang";
            }
          ?> </center>
        </td>
        <td> <center>
          <?php 
            if($paket[$i] == "IHT MAPPING"){
              echo "Rp. " . number_format(7000000,0,".",",")."/org";
            } elseif ($paket[$i] == "IHT FOTO VIDEO"){
              echo "Rp. " . number_format(4500000,0,".",",")."/org";
            } elseif ($paket[$i] == "INHOUSE OFFLINE") {
              echo "Rp. " . number_format(7500000,0,".",",")."/org";
            }elseif ($paket[$i] == "INHOUSE HIYBRID") {
              echo "Rp. " . number_format(6000000,0,".",",")."/org";
            }elseif ($paket[$i] == "IHO 5 ORG") {
              echo "Rp. " . number_format(10000000,0,".",",")."/org";
            }elseif ($paket[$i] == "IHO 20 ORG") {
              echo "Rp. " . number_format(4500000,0,".",",")."/org";
            }
          ?> </center>
        </td>
        <td> <center>
          <?php 
            if($paket[$i] == "IHT MAPPING"){
              echo "Rp. " . number_format(7000000*5,0,".",",");
            } elseif ($paket[$i] == "IHT FOTO VIDEO"){
              echo "Rp. " . number_format(4500000*5,0,".",",");
            } elseif ($paket[$i] == "INHOUSE OFFLINE") {
              echo "Rp. " . number_format(7500000*10,0,".",",");
            }elseif ($paket[$i] == "INHOUSE HIYBRID") {
              echo "Rp. " . number_format(6000000*10,0,".",",");
            }elseif ($paket[$i] == "IHO 5 ORG") {
              echo "Rp. " . number_format(10000000*5,0,".",",");
            }elseif ($paket[$i] == "IHO 20 ORG") {
              echo "Rp. " . number_format(4500000*20,0,".",",");
            }
          ?></center>
        </td>
    </tr>
    <?php } ?>
  </table>
  <?php else : ?>
    <form>
      <input type="checkbox" disabled> IHT MAPPING - Min 5 Peserta - 7Jt/org <br>
      <input type="checkbox" disabled> IHT FOTO VIDEO - Min 5 Peserta - 4.5jt/org <br>
      <input type="checkbox" disabled> INHOUSE OFFLINE - Min 10 Peserta - 7.5jt/org <br>
      <input type="checkbox" disabled>  NHOUSE HYBRID - Min 10 Peserta - 6jt/org <br>
      <input type="checkbox" disabled> IHO 5 ORG  - Min 5 Peserta - 10jt/org <br>
      <input type="checkbox" disabled> IHO 20 ORG  - Min 20 Peserta - 4.5jt/org <br>
      <br><br>
    </form>
  <?php endif; ?>
</div>
<br>
