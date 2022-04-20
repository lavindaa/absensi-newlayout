<!DOCTYPE html>
<html>
    <head>
        <title>Proses Simpan Data...</title>    </head>
    <body>
	<?php
		include 'mysql_connect.php';
		 
		// menyimpan data kedalam variabel
		$nim            = $_POST['nim'];
		$nama           = $_POST['nama'];
		$jenis_kelamin  = $_POST['jenis_kelamin'];
		$tanggal_lahir  = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
		$alamat         = $_POST['alamat'];
		$no_telp        = $_POST['no_telp'];
		$email          = $_POST['email'];
		$semester       = $_POST['semester'];
		
		$insert_query = "INSERT INTO master_mahasiswa (nim, nama, jenis_kelamin, tanggal_lahir, alamat, no_telp, email, semester) values ('$nim', '$nama','$jenis_kelamin','$tanggal_lahir','$alamat','$no_telp','$email','$semester')";
		
		// menjalankan perintah insert ke tabel
		$result = mysqli_query($conn, $insert_query);
		if (!$result) {
				echo "Gagal Simpan Data!";
		} else {
			echo "Data Sudah Disimpan!";
		}
		 
		// menutup koneksi
		mysqli_close($conn);
		
	?>
	<br>
	<a href="list_mahasiswa.php"> Kembali </a>
    </body>
</html>
