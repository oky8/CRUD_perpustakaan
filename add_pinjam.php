<?php 
	include 'Koneksi.php';

	if(isset($_POST['simpan']))
	{
		  $sql2 	= mysqli_query($conn, "SELECT * FROM mhs WHERE nobp = '$_POST[nobp]'");
		  $row2 	= mysqli_fetch_array($sql2);
		  $nama_mhs = $row2['nm_mhs'];

		  $sql3 	= mysqli_query($conn, "SELECT * FROM buku WHERE kd_buk = '$_POST[kd_buk]'");
		  $row3 	= mysqli_fetch_array($sql3); 
		  $nm_buk = $row3['nm_buk'];

		  $begin           = new DateTime($_POST['tgl_pin']);
		  $end             = new DateTime($_POST['tgl_kem']);
		  $sql = mysqli_query($conn, "INSERT INTO pinjam(kd_pin,nobp,nm_mhs,kd_buk,nm_buk,tgl_pin,tgl_kem) VALUES ('$_POST[kd_pin]','$_POST[nobp]','$nama_mhs','$_POST[kd_buk]','$nm_buk','$_POST[tgl_pin]','$_POST[tgl_kem]')");

		if($sql)
		{
			echo "<script>alert('Data Berhasil Tersimpan !');window.location.href='pinjam.php';</script>";
		} else {
			echo "<script>alert('Data Gagal Tersimpan !');window.location.href='add_pinjam.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pinjam</title>
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
		<h2 align="center">INPUT DATA PINJAMAN</h2>
	<form action="" method="post">
		<table align="center" width="90%" border="1">
			<tr align="center">
				<td width="30%">Kode Pinjam</td>
				<td width="10%">:</td>
				<td width="50%">
					<input type="text" name="kd_pin" class="form-control" size="125" placeholder="Masukkan Kode Pinjam" maxlength="7">
				</td>
			</tr>
			<tr align="center">
				<td width="30%">NoBp</td>
				<td width="10%">:</td>
				<td width="50%">
					<select class="form-control" name="nobp">
						<option disabled="">Pilih bp</option>
						<?php  
							$sql1 = mysqli_query($conn, "SELECT * FROM mhs");
							while($row1 = mysqli_fetch_array($sql1))
							{
						?>
							<option value="<?= $row1['nobp']; ?>"><?= $row1['nm_mhs']; ?></option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr align="center">
				<td width="30%">Kode Buku</td>
				<td width="10%">:</td>
				<td width="50%">
					<select class="form-control" name="kd_buk">
						<option disabled="">Pilih Buku</option>
						<?php  
							$sql1 = mysqli_query($conn, "SELECT * FROM buku");
							while($row1 = mysqli_fetch_array($sql1))
							{
						?>
							<option value="<?= $row1['kd_buk']; ?>"><?= $row1['nm_buk']; ?></option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr align="center">
				<td width="30%">Tgl Pinjam</td>
				<td width="10%">:</td>
				<td width="50%">
					<input type="datetime-local" name="tgl_pin" class="form-control" size="125">
				</td>
			</tr>
			<tr align="center">
				<td width="30%">Tgl Kembali</td>
				<td width="10%">:</td>
				<td width="50%">
					<input type="datetime-local" name="tgl_kem" class="form-control" size="125">
				</td>
			</tr>			
			<tr>
				<td colspan="3" align="center"><button type="submit" name="simpan" class="btn">SIMPAN</button></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>
<footer><h5 align="center">Create By.Aldi Ramadani 17101152610104 </h5></footer>