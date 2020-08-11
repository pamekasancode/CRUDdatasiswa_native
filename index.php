<?php 

include 'koneksi.php';

session_start();

if (!$_SESSION["masuk"]) {
	header("Location: login.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script type="text/javascript">
	
</script>
<body>
	<header>
		<div class="container">
			<h1><img src="img/logo.png" width="40">Data Siswa</h1>
			<p>Sekolah Menengah Kejuruan 3 Pamekasan</p>
			<hr/>
		</div>
	</header>
	<div class="navigasi">
		<div class="container"> 
			<a href="logout.php" class="btn btn-danger"><i class="fa fa-exit"></i>Keluar</a>
			<a href="tambahdata.php" class="btn btn-primary"><i class="fa fa-user"></i> Tambah Data</a>
		</div>
	</div>
	<br/>
	<div class="main">
		<div class="container">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>NISN</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id DESC");
						while ($data = mysqli_fetch_array($query)) {
					?>
						<tr>
							<td><?= $data["nisn"]; ?></td>
							<td><?= $data["nama"]; ?></td>
							<td><?= $data["alamat"]; ?></td>
							<td>
								<a class="btn btn-danger" href="delete.php?id=<?= $data['id']; ?>"><i class="fa fa-trash"></i></a>
								<a class="btn btn-success" href="edit.php?id=<?= $data['id']; ?>"><i class="fa fa-pencil"></i></a>
							</td>
						</tr>
					<?php  
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<footer>
		<p>Copyright PamekasanCode 2020</p>
		<p>Created By Firmansyahken</p>
	</footer>
</body>
</html>