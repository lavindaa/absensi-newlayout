<?php include './layout/header.php'; ?>
<?php
include 'mysql_connect.php';

//mengambil parameter id di url
$id = $_GET['id'];

//membuat query berdasarkan id yang dipilih
$select_query = "SELECT * FROM master_mahasiswa where id='$id'";

//menjalankan perintah select ke tabel
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_array($result);
?>

<!--Navigation-->
</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Detail Mahasiswa</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a>Data Master</a>
			</li>
		</ol>
		
	</div>
	
</div>

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox">
				<div class="ibox-title">
					<h5>Detail Mahasiswa</h5>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-bordered table-hover dataTables-example">
							<tr>
								<td style="width: 20%;">NIM</td>
								<td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"><?=$row['nim']?></td>
							</tr>
							<tr>
								<td style="width: 20%;">Nama</td>
								<td><?=$row['nama']?></td>
							</tr>
							<tr>
								<td style="width: 20%;">Jenis Kelamin</td>
								<td><?=$row['jenis_kelamin']?></td>
							</tr>
							<tr>
								<td style="width: 20%;">Tanggal Lahir</td>
								<td><?=$row['tanggal_lahir']?></td>
							</tr>
							<tr>
								<td style="width: 20%;">Alamat</td>
								<td><?=$row['alamat']?></td>
							</tr>
							<tr>
								<td style="width: 20%;">No.Telepon</td>
								<td><?=$row['no_telp']?></td>
							</tr>
							<tr>
								<td style="width: 20%;">Email</td>
								<td><?=$row['email']?></td>
							</tr>
							<tr>
								<td style="width: 20%;">Semester</td>
								<td><?=$row['semester']?></td>
							</tr>
						</table>
					</div>
					<a href="list_mahasiswa.php" class="btn btn-white btn-sm" type="submit">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include './layout/footer.php'; ?>