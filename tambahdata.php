<?php 

include 'koneksi.php';

if (isset($_POST["tambah"])) {
	$nisn = htmlspecialchars($_POST["nisn"]);
	$nama = htmlspecialchars($_POST["nama"]);
	$alamat = htmlspecialchars($_POST["alamat"]);
	$query = mysqli_query($conn, "INSERT INTO siswa VALUES('', '$nisn', '$nama', '$alamat')");
	if ($query) {
		echo "<script>alert('Data Berhasil Ditambahkan');document.location='index.php';</script>";
		exit;
	} else {
		echo "<script>alert('Data Gagal Ditambahkan');document.location='tambahdata.php';</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tambah Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1><img src="img/logo.png" width="40">Tambah Data Siswa</h1>
			<p>Sekolah Menengah Kejuruan 3 Pamekasan</p>
			<hr/>
		</div>
	</header>
	<div class="main">
		<div class="container">
			<form method="post">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="nisn">Nisn Siswa</label>
							<input type="text" name="nisn" class="form-control" id="nisn" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="nama">Nama Siswa</label>
							<input type="text" name="nama" class="form-control" id="nama" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat Siswa</label>
							<input type="text" name="alamat" class="form-control" id="alamat" autocomplete="off" required>
						</div>
						<button class="btn btn-primary" name="tambah" type="submit">Tambah Data</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<footer>
		<p>Copyright PamekasanCode 2020</p>
		<p>Created By Firmansyahken</p>
	</footer>
</body>
</html>