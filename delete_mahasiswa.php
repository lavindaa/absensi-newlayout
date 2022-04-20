<!DOCTYPE html>
<html>

<head>
	<title>Proses Hapus Data...</title>
</head>

<body>
	<?php
	include 'mysql_connect.php';
	$id = $_GET['id'];
	$delete_query = "DELETE FROM master_mahasiswa WHERE id = $id";

	$result = mysqli_query($conn, $delete_query);
	if (!$result) {
		echo "Gagal Menghapus Data!";
	}
	else {
		echo "Data Berhasil Dihapus!";
	}
	mysqli_close($conn);

	?>
	<br>
	<a href="list_mahasiswa.php">Kembali</a>

</body>
</html>