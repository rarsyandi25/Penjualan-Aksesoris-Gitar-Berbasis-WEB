<?php include 'koneksi.php'; ?>
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




  <?php
  $kd = $_GET['id_produk'];
  $q_detail = mysqli_query($conn, "SELECT * from tb_produk where id_produk='$kd'");
  $detail= mysqli_fetch_array($q_detail);
  ?>

  <br>
  <br>
  <br>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm">
            <img src="img/<?php echo $detail['gambar'];  ?>" style="width: 250px; height: 250px;">
          </div>
          <div class="col-sm">
            <h2><?php echo $detail['nama_produk']; ?></h2>
            <br>
            <p>Deskripsi : <?php echo $detail['deskripsi']; ?></p>
            <p>Harga : <?php echo "Rp ".number_format($detail['harga'],2,',','.')?></p>
            <p>Stok : <?php echo number_format($detail['stok'])?></p>
<!-- 
           <?php
                if ($detail['stok'] == 0) {
                  $disable="btn btn-danger disabled";
                }else{
                  $disable="btn btn-success ";
                }
                ?>
                <a href="page/customer/proses_beli.php?id_produk=<?=$kd['id_produk']?>" class="<?php echo $disable;?>">Beli</a>
 -->
          <button type="submit" class="btn btn-danger"><a href="index.php" style="color: #fff; text-decoration: none;">
            Kembali
          </a>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>

