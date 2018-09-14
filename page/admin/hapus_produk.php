<?php
include "../../koneksi.php";
$id_produk1=$_GET['id_produk'];
$id_produk=$_GET['id_produk'];
$query="DELETE FROM `tb_produk` WHERE id_produk =$id_produk1";
if(mysqli_query($conn, $query)){
header("Location:index.php?page=produk");
}else{
echo "gagal hapus data";
}
//echo"<h1>$query</h1>//
?>
