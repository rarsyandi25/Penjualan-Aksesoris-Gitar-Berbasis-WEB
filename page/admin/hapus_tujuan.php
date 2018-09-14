<?php
include "../../koneksi.php";

$id_tujuan1=$_GET['id_tujuan'];
$id_tujuan=$_GET['id_tujuan'];

$query="DELETE FROM `tb_tujuan` WHERE id_tujuan =$id_tujuan1";
if(mysqli_query($conn, $query)){
header("Location:index.php?page=tujuan");
}else{
echo "gagal hapus data";
}
//echo"<h1>$query</h1>//
?>
