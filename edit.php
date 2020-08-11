<?php 

include 'koneksi.php';

$get_id = $_GET["id"];

if (isset($_POST["edit"])) {
	$nisn = htmlspecialchars($_POST["nisn"]);
	$nama = htmlspecialchars($_POST["nama"]);
	$alamat = htmlspecialchars($_POST["alamat"]);
	$query = mysqli_query($conn, "UPDATE siswa SET nisn = '$nisn', nama = '$nama', alamat = '$alamat' WHERE id = $get_id");
	if ($query) {
		echo "<script>alert('Data Berhasil Diedit');document.location='index.php';</script>";
		exit;
	} else {
		echo "<script>alert('Data Gagal Diedit');document.location='index.php'</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Edit Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1><img src="img/logo.png" width="40">Edit Data Siswa</h1>
			<p>Sekolah Menengah Kejuruan 3 Pamekasan</p>
			<hr/>
		</div>
	</header>
	<div class="main">
		<div class="container">
			<form method="post">
				<div class="row">
					<div class="col-sm-6">
						<?php 
							$show = mysqli_query($conn, "SELECT * FROM siswa WHERE id = $get_id");
							while ($siswa = mysqli_fetch_array($show)) {
						?>
							<div class="form-group">
								<label for="nisn">Nisn Siswa</label>
								<input type="text" name="nisn" class="form-control" id="nisn" autocomplete="off" required value="<?= $siswa['nisn']; ?>">
							</div>
							<div class="form-group">
								<label for="nama">Nama Siswa</label>
								<input type="text" name="nama" class="form-control" id="nama" autocomplete="off" required value="<?= $siswa['nama']; ?>">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat Siswa</label>
								<input type="text" name="alamat" class="form-control" id="alamat" autocomplete="off" required value="<?= $siswa['alamat']; ?>">
							</div>
						<?php
							}
						?>
						<button class="btn btn-primary" name="edit" type="submit">Edit Data</button>
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