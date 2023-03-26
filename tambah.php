<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>GSI SCHOOL</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Input Data Siswa
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" name="tanggal" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat"></textarea>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="text" name="kelamin" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Telepon</label>
						<input type="text" name="telepon" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>
				<?php
				include("koneksi.php");
				

				if (isset($_POST['submit'])) {
					$nama = $_POST['nama'];
					$tanggal = $_POST['tanggal'];
					$alamat = $_POST['alamat'];
					$kelamin = $_POST['kelamin'];
					$email = $_POST['email'];
					$telepon = $_POST['telepon'];

					$datas = mysqli_query($koneksi, "insert into registrasi (nama,tanggal,alamat,kelamin,email,telepon)values('$nama', '$tanggal', '$alamat', '$kelamin', '$email', '$telepon')") or die(mysqli_error($koneksi));

					echo "<script>alert('data berhasil disimpan.');window.location='login.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>