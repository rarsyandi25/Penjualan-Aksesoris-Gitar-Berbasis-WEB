<?php
include "../../koneksi.php";
$id_user1=$_GET['id_user'];
$id_user=$_GET['id_user'];
$query="DELETE FROM `tb_user` WHERE id_user =$id_user1";
if(mysqli_query($conn, $query)){
header("Location:index.php?page=customers");
}else{
echo "gagal hapus data";
}
//echo"<h1>$query</h1>//
?>
