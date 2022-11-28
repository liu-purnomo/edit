<?php
 
if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}

require 'functions.php';
if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>

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
</div>


		<div class="container">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Daftar Akun</h3>
					</div>
					<div class="panel-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="username">Username :</label>
								<input class="form-control" type="text" name="username" id="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$">
								<i>Username hanya boleh mengandung huruf dan angka, tidak boleh menggunakan spasi dan karakter unik lainnya, panjang minimal 8 karakter.</i>
							</div>
							<div class="form-group">
								<label for="nik">No KTP :</label>
								<input class="form-control" type="number" name="nik" id="username" maxlength="16" minlength="17">
							</div>
							<div class="form-group">
								<label for="password">password :</label>
								<input class="form-control" type="password" name="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
								<i>Password minimal 8 karakter dan harus menyertakan huruf besar, huruf kecil dan angka.</i>
							</div>
							<div class="form-group">
								<label for="password2">konfirmasi password :</label>
								<input class="form-control" type="password" name="password2" id="password2">
							</div>
							<div class="form-group">
								<button class="btn btn-primary btn-block" type="submit" name="register">Register!</button>
							</div>
						</form>
						<a class="btn btn-warning btn-block" href="login"> Login Sekarang </a>
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

