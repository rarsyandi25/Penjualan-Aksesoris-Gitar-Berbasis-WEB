<?php
include "../../koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>accgitar.com</title>

	<!-- Bootstrap core CSS -->
	<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../../css/modern-business.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger fixed-top">
		<div class="container">
			<a class="navbar-brand" href="../../index.php" style="font-size: 30px;">Acc<b>gitar</b>.com</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="../../index.php" style="color: #ffffff;"><span class="fa fa-home"></span> Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../index.php?page=cara" style="color: #ffffff;"><span class="fa fa-question-circle"></span> Cara Pembelian</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../index.php?page=tentang" style="color: #ffffff; margin-right: 300px;"><span class="fa fa-info-circle"></span> Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="beli.php" style="color: #ffffff; margin-right: 10px"><span class="fa fa-shopping-cart" title="shopping cart"></span> Keranjang</a>
					</li> 
					<li class="nav-item">
						<a class="nav-link" href="../../logout.php" style="color: #ffffff;"><span class="fa fa-sign-out"></span> Logout</a>
					</li> 
				</ul>
			</div>
		</div>
	</nav>

	<br><br><br>
	<div class="jumbotron">
		<center><h2><b>Pesanan Anda Telah Diterima.</b></h2>TERIMAKASIH ATAS PEMBELIAN ANDA!</center><br>
		<center><p>Silahkan melakukan pembayaran dengan mentransfer ke rekening dibawah ini</p></center>
		<center><h3>BCA</h3>		
		No. Rekening : 1150325788<br>
		Atas Nama    : Ridho Arsyandi
		</center><br>
		<center>
		<p>Mohon konfirmasi pembayaran via WhatsApp ke <b> No +62 858-9130-7293</b>, setelah Anda melakukan pembayaran.<br></p>
		</center>
		<!-- <p style="margin-left:100px;"> 
			Mohon konfirmasi pembayaran via WhatsApp ke <b> No +62 858-9130-7293</b>, setelah Anda melakukan pembayaran.<br>
			Pembayaran Ke BCA No rek : <b>1150325788</b>
		</p> -->
	</div>