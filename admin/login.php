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

<div class="container">
    <a href="https://remotepilot.id">
        <center>
            <a href="https://remotepilot.id/"><img src="../assets/img/logo/logo.png" alt="" width="250px" style="padding: 40px;"></a>
        </center>
    </a>
</div>

<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="bi bi-box-arrow-in-right"></i> LOGIN ADMIN</h3>
			</div>
			<div class="panel-body">
				<?php 
				if($_SERVER['REQUEST_METHOD']=='POST'){
					$user	= $_POST['username'];
					$pass	= $_POST['password'];
					$p		= md5($pass);
					if($user=='' || $pass==''){
						?>
						<div class="alert alert-warning alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <?php
						  echo "<strong>Error!</strong> Form Belum Lengkap!!";
						  ?>
						</div>
						<?php
					}else{
						include "../koneksi.php";
						$sqlLogin = mysqli_query($conn, "SELECT * FROM admin WHERE username='$user' AND password='$p'");
						$jml=mysqli_num_rows($sqlLogin);
						$d=mysqli_fetch_array($sqlLogin);
						if($jml > 0){
							session_start();
							$_SESSION['login']			= TRUE;
							$_SESSION['idadmin']		= $d['idadmin'];
							$_SESSION['kelas']			= $d['kelas'];
							$_SESSION['username']		= $d['username'];
							$_SESSION['email']			= $d['email'];
							$_SESSION['namalengkap']= $d['namalengkap'];
							
							header('Location:./');
						}else{
						?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <?php
							  echo "<strong>Error!</strong> Username dan Password anda Salah!!!";
							  ?>
							</div>
						<?php
						}
						
					}
				}
				?>

				
				<form method="post" action="" role="form">
					<div class="form-group">
						<input type="text" class="form-control" name="username" autocomplete="off" placeholder="Username" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" />
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-lg btn-primary btn-block" value="Login" />
					</div>
				</form>
				
			</div>

		</div> <!-- //panel -->
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
