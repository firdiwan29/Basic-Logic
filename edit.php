<html>

<head>
	<title>PENDAFTARAN</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>GSI SCHOOL</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Data Siswa
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; 

				$data = mysqli_query($koneksi, "select * from registrasi where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
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
						<input type="text" name="Email" class="form-control">
					</div>
					<div class="form-group">
						<label>Telepon</label>
						<input type="text" name="telepon" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Update data</button>
				</form>

				<?php

				if (isset($_POST['submit'])) {
					$nama = $_POST['nama'];
					$tanggal = $_POST['tanggal'];
					$alamat = $_POST['alamat'];
					$kelamin = $_POST['kelamin'];
					$email = $_POST['email'];
					$telepon = $_POST['telepon'];

					mysqli_query($koneksi, "update registrasi set nama='$nama', tanggal='$tanggal', alamat='$alamat', kelamin='$kelamin', email='$email', telepon='$telepon' where id ='$id'") or die(mysqli_error($koneksi));

					echo "<script>alert('data berhasil diupdate.');window.location='login.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>