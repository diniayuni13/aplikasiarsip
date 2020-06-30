<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="stylecss.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>
	
	<a href="cobacrud.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
		include('koneksi.php');
			//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM arsipwni WHERE no='$no'") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>No</td>
				<td>
					<input type="hidden" name="no" value="<?php echo $data['no'] ?>">
					<input type="text" name="no" value="<?php echo $data['no'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Tanggal Arsip</td>
				<td><input type="text" name="tanggalasrip" value="<?php echo $data['tanggalasrip'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nomor Kotak</td>
				<td><input type="text" name="nomorkotak" value="<?php echo $data['nomorkotak'] ?>"></td>					
			</tr>	
			<tr>
				<tr>
				<td>NIK</td>
				<td><input type="text" name="nik" value="<?php echo $data['nik'] ?>"></td>					
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td><input type="text" name="ttl" value="<?php echo $data['ttl'] ?>"></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>
			
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>