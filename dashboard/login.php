
<?php 
session_start();
require 'functions.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}


}

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;
			$_SESSION["username"] = $_POST["username"];

			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;

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
		<br>
		<p>Belum punya akun? 
		<a class="btn btn-primary mt-2 mb-2" href="registrasi">Daftar Sekarang</a></p>
</div>

<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="bi bi-box-arrow-in-right"></i> Login Akun</h3>
			</div>
			<div class="panel-body">
					<div>
						<?php if( isset($error) ) : ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							<p style="color: red; font-style: italic;">username / password salah</p>
							</div>
						<?php endif; ?>
					</div>

						<form action="" method="post">

								<div class="form-group">
									<label for="username">Username :</label>
									<input class="form-control" type="text" name="username" id="username" placeholder="Username" >
								</div>

								<div class="form-group mt-2">
									<label for="password">Password :</label>
									<input class="form-control" type="password" name="password" id="password" placeholder="Password" >
								</div>

								<div class="form-group mt-2">
									<input type="checkbox" name="remember" id="remember">
									<label for="remember">Remember me</label>
								</div>

								<div class="form-group mt-2">
									<button class="form-control btn btn-primary"  type="submit" name="login">Login</button>
								</div>
							
						</form>
		
					</div>
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