<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="stylecss.css">
</head>
<body>
	<div class="judul">		
		<h2> Silahkan Tambahkan Data! </h2>
	</div>
	
	<br/>



	<br/>
			<a href="wni.php">Lihat Semua Data</a>

	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Tanggal Arsip</td>
				<td><input type="text" name="tanggalasrip"></td>					
			</tr>	
			<tr>
				<td>Nomor Kotak</td>
				<td><input type="text" name="nomorkotak"></td>					
			</tr>	
			<tr>
				<td>NIK</td>
				<td><input type="text" name="nik"></td>					
			</tr>	
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama"></td>					
			</tr>
			<tr>
				<td>Tempat,Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td>					
			</tr>
			<tr>
				<td>Alamat </td>
				<td><input type="text" name="alamat"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>