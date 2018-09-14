<?php
include"koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['pass']);
	
$query = mysqli_query($conn, "INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES (NULL, '$nama', '$email', '$password','customer')");
	
	if($query){
		echo "<script>alert('Daftar berhasil Silahkan Login') 
		window.location.href='login.php'</script>";
	}else{
		echo "<script>alert('Gagal Daftar') 
		window.location.href='daftar.php'</script>";	
	}
?>