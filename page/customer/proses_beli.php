<?php
include "../../koneksi.php";

session_start();

$id_produk = $_GET['id_produk'];
$id_user = $_SESSION['id_user'];
$enkripsi = md5(time());
$potong = substr($enkripsi, 0, 5);


$select_pemesanan = mysqli_query($conn, "SELECT * FROM tb_pemesanan WHERE id_user = $id_user");


$data_pemesanan = mysqli_fetch_array($select_pemesanan);
if ($data_pemesanan['status'] == 'order') {
	$invoice = $data_pemesanan['no_invoice'];
} else {
	$invoice = 'INV'.$_SESSION['id_user'].$potong;
}

$select_produk = mysqli_query($conn, "SELECT * FROM tb_pemesanan WHERE id_user = $id_user AND id_produk = $id_produk");
$data_produk = mysqli_fetch_array($select_produk);

if ($data_produk['id_produk'] == $id_produk) {
	$kuantitas = $data_produk['kuantitas'] + 1;
	$id_pemesanan = $data_produk['id_pemesanan'];
	$query = mysqli_query($conn, "UPDATE tb_pemesanan SET no_invoice = '$invoice', kuantitas = $kuantitas WHERE id_pemesanan = $id_pemesanan");
} else {
	$kuantitas = 1;
	$query = mysqli_query($conn, "INSERT INTO tb_pemesanan(no_invoice,id_user,id_produk,kuantitas,status) VALUES('$invoice', '$id_user', '$id_produk', '$kuantitas', 'order')");
}

if ($query) {
	header("location:beli.php");
}
?>