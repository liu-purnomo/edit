

<!DOCTIPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/img/logo/rpa-logo-pavicon.png">

    <title>Login Dashboard : Remote Pilot Academy</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="assets/style.css" rel="stylesheet">

</head>
<body>

<div class="container text-center">
    <a href="https://remotepilot.id">
      <a href="https://remotepilot.id/"><img src="../assets/img/logo/logo.png" alt="" width="250px" style="padding: 40px;"></a>
    </a> 
		<br>
		
</div>

<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-danger">
      <div class="panel-heading text-center">
        <h4>Cek apakah No KTP Anda sudah terdaftar</h4>
      </div>
			<div class="panel-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="nik">Masukkan No KTP Anda</label>
						<input class="form-control" type="text" name="nik" id="nik">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block" type="submit" name="cek">Cek NIK</button>
					</div>
				</form>
        <?php 
          if(isset($_POST['cek'])){
            
            $nik = $_POST['nik'];

            $sql=mysqli_query($conn, "SELECT * FROM remotepilot WHERE nik='$nik'");

            $h=mysqli_num_rows($sql);

            if( $h < 1 ) {
        ?>

        <p>Nomor NIK Anda <?= $_POST['nik']; ?> Belum terdaftar, <a href="registrasi">Mendaftar Sekarang</a> </p>

        <?php } elseif( $h = 1 ) { ?>
          <h5>Nomor NIK Anda <?= $_POST['nik']; ?> Sudah terdaftar, <a href="login">Masuk sekarang</a> </h5>
        <?php } } ?>
			</div>
		</div>
	</div>
</div>







<footer class="footer">
      <div class="container text-center">
        <p class="text-muted"><a href="https://remotepilot.id" target="_blank">Remote Pilot Academy</a> 2022</p>
      </div>
    </footer>

<!-- Bootstrap core JavaScript -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>

