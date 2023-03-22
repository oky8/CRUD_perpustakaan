<?php  
	include 'Koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Transaksi</title>
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
		<h2 align="center">DATA PINJAM</h2>

		<table align="center" width="80%" border="1">
			<tr align="center">
				<td colspan="6"><a class="tambah" href="add_pinjam.php">Tambah Pinjaman</a></td>
				<td colspan="6"><a class="tambah" href="cetak_pinjam.php">Cetak Pinjaman</a></td>
			</tr>
			<tr>
				<th>No</th>
				<th>Kode Pinjam</th>
				<th>NoBP</th>
				<th>Nama Mahasiswa</th>
				<th>Kode Buku</th>
				<th>Nama Buku</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
			</tr>
			<?php  
				$i = 1;
				$sql = mysqli_query($conn, "SELECT * FROM pinjam ORDER BY kd_pin");
				while($row = mysqli_fetch_array($sql))
				{
			?>
			<tr align="center">
				<td><?= $i++; ?></td>
				<td><?= $row['kd_pin']; ?></td>
				<td><?= $row['nobp']; ?></td>
				<td><?= $row['nm_mhs']; ?></td>
				<td><?= $row['kd_buk']; ?></td>
				<td><?= $row['nm_buk']; ?></td>
				<td><?= $row['tgl_pin']; ?></td>
				<td><?= $row['tgl_kem']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>
<footer><h5 align="center">Create By.Aldi Ramadani 17101152610104 </h5></footer>