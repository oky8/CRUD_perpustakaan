<?php  
	include 'Koneksi.php';
	error_reporting(0);
?>
<body onload='window.print();'>
	<div class="content">
		<h1 align="center">PROGRAM UJIAN LABOR TAHAP 1 PHP TIPE B</h1>
		<h2 align="center">LAPORAN DATA PINJAM</h2>
		<hr>
		<table align="center" width="80%" border="1">
			<tr>
				<th>No</th>
				<th>Kode Pinjam</th>
				<th>NoBp</th>
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
				<td><?= $row['nobpb']; ?></td>
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
<footer><h5 align="center">Create By.Aldi Ramadani 17101152610104 </h5></footer>