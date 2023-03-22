<?php  
	include 'Koneksi.php';

	if(isset($_POST['simpan']))
	{
		

		$sql = mysqli_query($conn, "INSERT INTO mhs(nobp,nm_mhs,almt_mhs,jns_klmn,tmpt_lhr,tnggl_lhr) VALUES ('$_POST[nobp]','$_POST[nm_mhs]','$_POST[almt_mhs]','$_POST[jns_klmn]','$_POST[tmpt_lhr]','$_POST[tnggl_lhr]')");

		if($sql)
		{
			echo "<script>alert('Data Berhasil Tersimpan !');window.location.href='mhs.php';</script>";
		} else {
			echo "<script>alert('Data Gagal Tersimpan !');window.location.href='add_mhs.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Mahasiswa</title>
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
		<h2 align="center">INPUT DATA Mahasiswa</h2>
	<form action="" method="post">
		<table align="center" width="90%" border="1">
			<tr align="center">
				<td width="30%">No Bp</td>
				<td width="10%">:</td>
				<td width="50%">
					<input type="text" name="nobp" class="form-control" size="125" placeholder="Masukkan nobp" maxlength="7">
				</td>
			</tr>
			<tr align="center">
				<td width="30%">Nama Mahasiswa</td>
				<td width="10%">:</td>
				<td width="50%">
					<input type="text" name="nm_mhs" class="form-control" size="125" placeholder="Masukkan Nama Mahasiswa" maxlength="25">
				</td>
			</tr>
				<tr align="center">
				<td width="30%">Alamat Mahasiswa</td>
				<td width="10%">:</td>
				<td width="50%">
					<input type="text" name="almt_mhs" class="form-control" size="125" placeholder="Masukkan Alamat Mahasiswa" maxlength="25">
				</td>
			</tr>
			<tr align="center">
				<td width="30%">Jenis Kelamin</td>
				<td width="10%">:</td>
				<td width="50%">
					<select class="form-control" name="jns_klmn">
						<option disabled="">Pilih Kelamin</option>
						<option value="Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
				<tr align="center">
				<td width="30%">Tempat Lahir</td>
				<td width="10%">:</td>
				<td width="50%">
					<input type="text" name="tmpt_lhr" class="form-control" size="125" placeholder="Masukkan Tempat Lahir" maxlength="25">
				</td>
			</tr>
			<tr align="center">
				<td width="30%">Tanggal Lahir</td>
				<td width="10%">:</td>
				<td width="50%">
					<input type="datetime-local" name="tnggl_lhr" class="form-control" size="125">
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