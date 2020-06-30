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

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
            <th>Tgl Arsip</th>
            <th>Nomor Kotak</th>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Tempat/ Tgl Lahir</th>
            <th>Alamat</th>		
		</tr>
		<?php 
		include('koneksi.php');
			//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM arsipwni ORDER BY arsipwni_nik DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['tanggalasrip']; ?></td>
			<td><?php echo $data['nomorkotak']; ?></td>
			<td><?php echo $data['nik']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['ttl']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td>
				<a href="editt.php?no=<?php echo $data['no'] ?>">Edit</a> |
				<a href="hapus.php?no=<?php echo $data['no']; ?>">Hapus</a>					
			</td>
		</tr>
	</table>
</body>
</html>