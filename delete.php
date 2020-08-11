<?php 

include 'koneksi.php';
$id = $_GET["id"];
if (isset($_GET["id"])) {
	$hapus = mysqli_query($conn, "DELETE FROM siswa WHERE id  = $id");
	echo "<script>
			alert('Data berhasil di hapus');
				document.location='index.php';
		 </script>";
		exit;
	return mysqli_affected_rows($conn);
}

?>