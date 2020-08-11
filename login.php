<?php 

session_start();

if (isset($_POST["masuk"])) {
	$username = $_POST["username"];
	$password = $_POST["pass"];
	
	if ($username == "admin" && $password == "admin") {
		$_SESSION["masuk"] = true;
		header("location: index.php");
		exit;
	} else {
		$error = true;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Masuk Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1><img src="img/logo.png" width="40">Aplikasi Data Siswa</h1>
			<p>Sekolah Menengah Kejuruan 3 Pamekasan</p>
			<hr/>
		</div>
	</header>
	<div class="main">
		<div class="container">
			<div class="col-sm-6">
				<?php if(isset($error)): ?>
					<p>Username / password salah!</p>
				<?php endif; ?>
				<form method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" name="username" id="username" required autocomplete="off">
					</div>
					<div class="form-group">
						<label for="pw">Password</label>
						<input class="form-control" type="password" name="pass" id="pw" required autocomplete="off">
					</div>
					<button class="btn btn-primary" type="submit" name="masuk">Masuk</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<p>Copyright PamekasanCode 2020</p>
		<p>Created By Firmansyahken</p>
	</footer>
</body>
</html>