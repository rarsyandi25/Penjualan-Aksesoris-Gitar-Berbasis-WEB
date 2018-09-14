<?php
include"koneksi.php";

$email = $_POST['email'];
$pass = md5($_POST['pass']);

$query = mysqli_query($conn, "SELECT * from tb_user where email = '$email' and password='$pass' and level='admin'");

$row=mysqli_fetch_array($query);
	if ($row['email'] == $email AND $row['password'] == $pass AND $row['level'] == 'admin'){
		session_start();
			$_SESSION['email'] = $row['email'];
			$_SESSION['nama'] = $row['nama'];
			header("location:page/admin/index.php");
	}else {
			echo"<script type='text/javascript'>alert('Email / Password tidak sesuai');window.location.href='login_admin.php';</script>";
	}
?>