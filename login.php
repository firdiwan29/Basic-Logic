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
				DATA SISWA <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Siswa</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th>Email</th>
							<th>Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); i
							$datas = mysqli_query($koneksi, "select * from registrasi") or die(mysqli_error($koneksi));

							$no = 1;

							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama']; ?></td>
						<td><?= $row['tanggal']; ?></td>
						<td><?= $row['alamat']; ?></td>
						<td><?= $row['kelamin']; ?></td>
						<td><?= $row['email']; ?></td>
						<td><?= $row['telepon']; ?></td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
			<a href="index.php" class="btn btn-sm btn-primary float-right">Logout</a>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>