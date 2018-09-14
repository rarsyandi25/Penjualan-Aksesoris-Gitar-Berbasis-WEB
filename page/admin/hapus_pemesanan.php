<?php
include "../../koneksi.php";
$id_pemesanan1=$_GET['id_pemesanan'];
$id_pemesanan=$_GET['id_pemesanan'];
$query="DELETE FROM `tb_pemesanan` WHERE id_pemesanan =$id_pemesanan1";
if(mysqli_query($conn, $query)){
header("Location:index.php?page=pemesanan");
}else{
echo "gagal hapus data";
}
//echo"<h1>$query</h1>//
?>
