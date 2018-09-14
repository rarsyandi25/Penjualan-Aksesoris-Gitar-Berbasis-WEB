<?php
include "../../koneksi.php";
$no_invoice = $_GET['no_invoice'];
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
	<br>

		<?php
		if(isset($_POST['simpan'])){
			$no_invoice = $_POST['no_invoice'];
			$nama_penerima = $_POST['nama_penerima'];
			$kode_pos = $_POST['kode_pos'];
			$alamat = $_POST['alamat'];
			$no_telp = $_POST['no_telp'];
			$metode_pem = $_POST['metode_pem'];

			$query = "
			INSERT INTO tb_tujuan VALUES (null,'$no_invoice','$nama_penerima','$kode_pos','$alamat','$no_telp','$metode_pem')
			";
			if(mysqli_query($conn, $query)){
				header("Location:selesai.php");
			}else{
				echo"<script>alert('Gagal tambah data')</script>";
			}

		}else{
			?> 

		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<br><br>
					<form method="post" action="">		
						<div class="form-group">
							<input type="text" name="no_invoice" class="form-control" value="<?php echo $no_invoice; ?>" readonly>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="nama_penerima" placeholder="Masukkan nama penerima" required>
						</div>
						<div class="form-group">
							<input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" required>
						</div>
						<div class="form-group">
							<label>Alamat Lengkap</label>
							<textarea class="form-control" name="alamat" rows="3" required></textarea>
						</div>
						<div class="form-group">
							<input type="text" name="no_telp" class="form-control" placeholder="Masukkan no telepon" required>
						</div>
						<div class="form-group">
							<select class="form-control"  name="metode_pem">
								<option>Pilih Metode Pembayaran</option>
								<option value="Transfer">Transfer</option>
							</select>
						</div> 

<!-- 
						<?php

							//Get Data Kabupaten
							$curl = curl_init();	
							curl_setopt_array($curl, array(
							  CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => "",
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 30,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => "GET",
							  CURLOPT_HTTPHEADER => array(
							    "key: 3b0d05da9fe7aa4fa9b8731543ff5cca"
							  ),
							));

							$response = curl_exec($curl);
							$err = curl_error($curl);

							curl_close($curl);

							
							echo "<select class='form-control' name='asal' id='asal'>";
							echo "<option>Pilih Kota Asal</option>";
								$data = json_decode($response, true);
								for ($i=0; $i < count($data['rajaongkir']['results']); $i++) { 
								    echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$data['rajaongkir']['results'][$i]['city_name']."</option>";
								}
							echo "</select><br>";
							//Get Data Kabupaten


							//-----------------------------------------------------------------------------

							//Get Data Provinsi
							$curl = curl_init();

							curl_setopt_array($curl, array(
							  CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => "",
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 30,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => "GET",
							  CURLOPT_HTTPHEADER => array(
							    "key: 3b0d05da9fe7aa4fa9b8731543ff5cca"
							  ),
							));

							$response = curl_exec($curl);
							$err = curl_error($curl);

							
							echo "<select class='form-control' name='provinsi' id='provinsi'>";
							echo "<option>Pilih Provinsi Tujuan</option>";
							$data = json_decode($response, true);
							for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
								echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
							}
							echo "</select><br>";
							//Get Data Provinsi

						?>

						<!DOCTYPE html>
						<html>
							<head>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
							</head>
							
							<body>

								<select class="form-control" id="kabupaten" name="kabupaten">
									<option>Pilih Kabupaten Tujuan</option>
								</select><br>

								<select class="form-control" id="kurir" name="kurir">
									<option>Pilih Kurir</option>
									<option value="jne">JNE</option>
									<option value="tiki">TIKI</option>
									<option value="pos">POS INDONESIA</option>
								</select><br>

								<input class="form-control" id="berat" type="text" name="berat" placeholder="Berat (gram)" />
								<br>

								<input id="cek" type="submit" value="Cek Harga"/>

								<div id="ongkir"></div><br>

							</body>
						</html>


						<script type="text/javascript">

							$(document).ready(function(){
								$('#provinsi').change(function(){

									//Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
									var prov = $('#provinsi').val();

						      		$.ajax({
						            	type : 'GET',
						           		url : 'http://localhost/rajaongkir/cek_kabupaten.php',
						            	data :  'prov_id=' + prov,
											success: function (data) {

											//jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
											$("#kabupaten").html(data);
										}
						          	});
								});

								$("#cek").click(function(){
									//Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax 
									var asal = $('#asal').val();
									var kab = $('#kabupaten').val();
									var kurir = $('#kurir').val();
									var berat = $('#berat').val();

						      		$.ajax({
						            	type : 'POST',
						           		url : 'http://localhost/rajaongkir/cek_ongkir.php',
						            	data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
											success: function (data) {

											//jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
											$("#ongkir").text(data);
										}
						          	});
								});
							});
						</script> -->
						<!-- <div class="form-group">
							<input type="text" name="tarif" class="form-control" placeholder="Tarif" readonly>
						</div> -->
						<button type="submit" name="simpan" class="btn btn-success"><!-- <a href="selesai.php" style="color: #fff; text-decoration: none;"> -->Checkout<!-- </a> -->
						</button>
					</form>
				</div>
			</div>
		</div>
		<?php } ?> 