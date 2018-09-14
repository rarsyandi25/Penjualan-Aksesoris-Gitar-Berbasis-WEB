<?php include '../../koneksi.php'; ?>
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
					session_start();
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

	<?php
	$id_produk1=$_GET['id_produk'];
	if(isset($_POST['simpan'])){
		$id_produk=$_POST['id_produk'];
		$nama_produk=$_POST['nama_produk'];
		$harga=$_POST['harga'];
		$stok=$_POST['stok'];
		$deskripsi=$_POST['deskripsi'];

		if ($_FILES['file']['name'] != "") {
			$ekstensi_diperbolehkan	= array('png','jpg');
			$gambar = $_FILES['file']['name'];
			$x = explode('.', $gambar);
			$ekstensi = strtolower(end($x));
			$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){		
				move_uploaded_file($file_tmp, '../../img/'.$gambar);
			}
		} else{
			$gambar=$_POST['gambar_lama'];
		}

		$query="UPDATE tb_produk SET nama_produk='$nama_produk',gambar='$gambar',harga='$harga',stok='$stok',deskripsi='$deskripsi' WHERE id_produk=$id_produk1";
	//die($query);
		if(mysqli_query($conn, $query)){
			header("Location:index.php?page=produk");
		}else{
			echo"Gagal!!<br>";
			echo $query."<br>";
			echo mysqli_error();
		}
	}else{
		$query=" SELECT * FROM `tb_produk`  WHERE id_produk =$id_produk1 ";
		$data = mysqli_query($conn, $query);
		$hasil = mysqli_fetch_array($data);
		?>

		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6" style="margin-left: 100px;">
					<br><br>
					<center><b><h2>Edit Produk</h2><br></b></center>
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text"  name="id_produk" class="form-control" value="<?php echo $hasil[0];?>"" readonly>
						</div>
						<div class="form-group">
							<input type="text" name="nama_produk" class="form-control" value="<?php echo $hasil[1];?>" placeholder="Masukkan nama produk" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="harga" value="<?php echo $hasil[3];?>" placeholder="Masukkan harga produk" required>
						</div>
						<div class="form-group">
							<input type="number" name="stok" class="form-control" value="<?php echo $hasil[4];?>" placeholder="Masukkan stok produk" required>
						</div>
						<div class="form-group">
							<label>Deskripsi</label>
							<textarea class="form-control" name="deskripsi" rows="3" placeholder="Masukkan deskripsi produk" required><?php echo $hasil[5];?></textarea>
						</div>
						<div class="form-group">
							<img src="../../img/<?php echo $hasil[2];?>" style="width: 200px; height: 200px;">
							<input type="hidden" name="gambar_lama" value="<?php echo $hasil[2];?>">
							<input type="file" name="file" class="form-control" >
						</div>
						<button type="submit" name="simpan" class="btn btn-primary">
							<span class="fa fa-pencil"></span> EDIT
						</a>
					</button>
					<br><br><br>
				</form>
			</div>
		</div>
	</div>

	<?php
}
?>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>