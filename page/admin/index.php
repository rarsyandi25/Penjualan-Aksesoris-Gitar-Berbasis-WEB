<?php include '../../koneksi.php'; ?>
<?php
session_start();
  if (!isset($_SESSION['nama'])) {
    header('location:../../login_admin.php');
  }
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
  <link href="../../css/dashboard.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="font-size: 30px;">Da<b>shbo</b>ard</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          // session_start();
          if (isset($_SESSION['nama'])) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="../../logout.php" style="color: #ffffff;"><span class="fa fa-sign-out"></span> Logout</a>
            </li> 
            <?php 
          } ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <br>
            <li class="nav-item">
              <a class="nav-link active" href="index.php" style="color: #000;"><span class="fa fa-home"></span>
                Beranda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=produk" style="color: #000;"><span class="fa fa-product-hunt"></span>
                Produk
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=customers" style="color: #000;"><span class="fa fa-user"></span>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=pemesanan" style="color: #000;"><span class="fa fa-envelope-open"></span>
                Pemesanan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=tujuan" style="color: #000;"><span class="fa fa-address-book"></span>
                Tujuan
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <!-- Page Content -->
  <?php
  @$page = $_GET['page'];
  if($page=="tujuan")
  {
    include("tujuan.php");
  }
  else if($page=="pemesanan")
  {
    include("pemesanan.php");
  }
  else if($page=="customers")
  {
    include("customers.php");
  }
  else if($page=="produk")
  {
    include("produk.php");
  }
  else{
    include("welcome.php");
  }
  ?>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>
</html>