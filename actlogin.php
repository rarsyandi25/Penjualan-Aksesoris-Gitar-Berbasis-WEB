<?php
include"koneksi.php";

$email = $_POST['email'];
$pass = md5($_POST['pass']);
$id_produk = $_GET['id_produk'];

$query = mysqli_query($conn, "SELECT * from tb_user where email = '$email' and password='$pass' and level='customer'");

$row = mysqli_fetch_array($query);
	if ($row['email'] == $email AND $row['password'] == $pass AND $row['level'] == 'customer'){
		session_start();
			$_SESSION['email'] = $row['email'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['id_user'] = $row['id_user'];
			header("location:index.php");
	}else {
			echo"<script type='text/javascript'>alert('Email / Password tidak sesuai');window.location.href='login.php';</script>";
	}
?>