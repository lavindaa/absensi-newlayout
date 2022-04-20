<!DOCTYPE html>
<html>
    <head>
        <title>Proses Update Data...</title>    </head>
    <body>
	<?php
		include 'mysql_connect.php';
		 
		// menyimpan data kedalam variabel
		$id  			= $_POST['id'];
		$nama           = $_POST['nama'];
		$jenis_kelamin  = $_POST['jenis_kelamin'];
		$tanggal_lahir  = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
		$alamat         = $_POST['alamat'];
		$no_telp        = $_POST['no_telp'];
		$email          = $_POST['email'];
		$semester       = $_POST['semester'];
		
		$update_query = "UPDATE master_mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', no_telp='$no_telp', email='$email', semester='$semester' WHERE id='$id'";
		
		// menjalankan perintah insert ke tabel
		$result = mysqli_query($conn, $update_query);
		if (!$result) {
				echo "Gagal Update Data!";
		} else {
			echo "Data Sudah DiUpdate!";
		}
		 
		// menutup koneksi
		mysqli_close($conn);
		
	?>
	<br>
	<a href="list_mahasiswa.php"> Kembali </a>
    </body>
</html>
