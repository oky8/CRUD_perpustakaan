<?php  
	include 'Koneksi.php';

	if(isset($_POST['simpan']))
	{
		$sql = mysqli_query($conn, "INSERT INTO buku(kd_buk,nm_buk,pngrng,pnrbt) VALUES ('$_POST[kd_buk]','$_POST[nm_buk]','$_POST[pngrng]','$_POST[pnrbt]')");

		if($sql)
		{
			echo "<script>alert('Data Berhasil Tersimpan !');window.location.href='buku.php';</script>";
		} else {
			echo "<script>alert('Data Gagal Tersimpan !');window.location.href='add_buku.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Buku</title>
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
		<h2 align="center">INPUT DATA BUKU</h2>
	<form action="" method="post">
		<table align="center" width="90%" border="1">
			<tr align="center">
				<td width="30%">Kode Buku</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="kd_buk" class="form-control" placeholder="Masukkan Kode Buku" required="" autocomplete="off" maxlength="7"></td>
			</tr>
			<tr align="center">
				<td width="30%">Nama Buku</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="nm_buk" class="form-control" placeholder="Masukkan Nama Buku" required="" autocomplete="off" maxlength="25"></td>
			</tr>
			<tr align="center">
				<td width="30%">Pengarang</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="pngrng" class="form-control" placeholder="Masukkan Pengarang" required="" autocomplete="off" maxlength="25"></td>
			</tr>
			<tr align="center">
				<td width="30%">Penerbit</td>
				<td width="10%">:</td>
				<td width="50%"><input size="125" type="text" name="pnrbt" class="form-control" placeholder="Masukkan Penerbit" required="" autocomplete="off" maxlength="25"></td>
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