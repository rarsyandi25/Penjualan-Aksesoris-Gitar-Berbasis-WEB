<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>accgitar.com</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="font-size: 30px;">Acc<b>gitar</b>.com</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="color: #ffffff;"><span class="fa fa-home"></span> Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=produk" style="color: #ffffff;"><span class="fa fa-product-hunt"></span> Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=cara" style="color: #ffffff;"><span class="fa fa-question-circle"></span> Cara Pembelian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=tentang" style="color: #ffffff; margin-right: 300px;"><span class="fa fa-info-circle"></span> Tentang</a>
          </li>
          <?php
          session_start();
          if (isset($_SESSION['nama'])) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="page/customer/beli.php" style="color: #ffffff;"><span class="fa fa-shopping-cart" title="shopping cart"></span> Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" style="color: #ffffff;"><span class="fa fa-sign-out"></span> Logout</a>
            </li> 
            <?php 
          }else{
            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php" style="color: #ffffff;"><span class="fa fa-sign-in"></span> Masuk</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="daftar.php" style="color: #ffffff;"><span class="fa fa-pencil"></span> Buat Akun</a>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <?php
  @$page = $_GET['page'];
  if($page=="produk")
  {
    include("produk.php");
  }
  else if($page=="tentang")
  {
    include("tentang.php");
  }
  else if($page=="cara")
  {
    include("carabeli.php");
  }
  else{
    include("welcome.php");
    include("produk.php");
  }
  ?>
 

    <!-- Footer -->
    <footer class="py-3 bg-dark" style="margin-top: 100px;">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; 2018 | &nbsp; All Rights Reserved | &nbsp; Email us: arsyandi.ridho@gmail.com</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>
