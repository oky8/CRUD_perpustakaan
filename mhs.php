<?php  
	include 'Koneksi.php';
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="mhs.php">Data Mahasiswa</a></li>
			<li><a href="buku.php">Data Buku</a></li>
			<li><a href="pinjam.php">Data Pinjam</a></li>
			<li><a href="#" style="color: blue;">Beranda</a></li>
		</ul>
	</div>
	<div class="content">
		<hr>
		<h1 align="center">PROGRAM UJIAN LABOR TAHAP 1 PHP TIPE B</h1>
		<h2 align="center">DATA MAHASISWA</h2>

		<table align="center" width="90%" border="1">
			<tr align="center">
				<td colspan="6"><a class="tambah" href="add_mhs.php">Tambah Mahsiswa</a></td>
			</tr>
			<tr align="center">
				<th>No</th>
				<th>No Bp</th>
				<th>Nama Mahasiswa</th>
				<th>Alamat Mahasiswa</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
			</tr>
			<?php  
				$i = 1;
				$sql = mysqli_query($conn, "SELECT * FROM mhs ORDER BY nobp");
				while($row = mysqli_fetch_array($sql))
				{
			?>
			<tr align="center">
				<td><?= $i++; ?></td>
				<td><?= $row['nobp']; ?></td>
				<td><?= $row['nm_mhs']; ?></td>
				<td><?= $row['almt_mhs']; ?></td>
				<td><?= $row['jns_klmn']; ?></td>
				<td><?= $row['tmpt_lhr']; ?></td>
				<td><?= $row['tnggl_lhr']; ?></td>

			</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>
<footer><h5 align="center">Create By.Aldi Ramadani 17101152610104 </h5></footer>