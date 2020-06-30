<?php 
session_start();
include'koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>
		Halaman Login
	</title>
</head>
<body>

	<form class="box" action="" method="post">
		<img src="imigrasi.png" alt="Home" width="120" height="60"> <br>
		<h3>ARSIP DIGITAL</h3>
		<input type="text" name="user" placeholder="Masukan Username" /> <br>
		<input type="password" name="pass" placeholder="Masukan Password" /><br>
		<input type="submit" name="login" value="Login"/>
	</form>
	<?php 
	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$data_user = mysqli_query($conn,"SELECT * FROM user WHERE username ='$user' AND password = '$pass'");
		$r = mysqli_fetch_array ($data_user);
		$username = $r['username'];
		$password = $r['password'];
		$level = $r['level'];
		if($user == $username && $pass == $password){
		$_SESSION['level'] = $level;
		header('location:beranda.php');
		}else{
		 echo 'Sorry broo and siss';
		}
	}
	 ?>
</body>
</html>