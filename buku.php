<?php  
	include 'Koneksi.php';
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Mata Kuliah</title>
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
		<h2 align="center">DATA BUKU</h2>

		<table align="center" width="90%" border="1">
			<tr align="center">
				<td colspan="4"><a class="tambah" href="add_buku.php">Tambah Buku</a></td>
			</tr>
			<tr align="center">
				<th>No</th>
				<th>kd_Buku</th>
				<th>Nama Buku</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
			</tr>
			<?php  
				$i = 1;
				$sql = mysqli_query($conn, "SELECT * FROM buku ORDER BY kd_buk");
				while($row = mysqli_fetch_array($sql))
				{
			?>
			<tr align="center">
				<td><?= $i++; ?></td>
				<td><?= $row['kd_buk']; ?></td>
				<td><?= $row['nm_buk']; ?></td>
				<td><?= $row['pngrng']; ?></td>
				<td><?= $row['pnrbt']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>
<footer><h5 align="center">Create By.Aldi Ramadani 17101152610104 </h5></footer>