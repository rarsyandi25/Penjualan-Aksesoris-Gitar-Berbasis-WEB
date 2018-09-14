
<div class="container">
  <br><center><h1 class="my-4 ">Silahkan pilih aksesoris gitar dibawah ini</h1><br></center>


    <!-- untuk Produk -->
    <div class="row">
      <?php
      $produk = "SELECT * from tb_produk ORDER BY id_produk desc";
      $data = mysqli_query($conn, $produk);
      ?>
      <?php 
      while ($hasil = mysqli_fetch_assoc($data)){
        ?>
        <div class="mb-4" style="margin-left: 65px;">
          <div class="card h-100">
            <h4 class="card-header"><center><?php echo $hasil['nama_produk']; ?></center></h4>
            <div class="card-body">
              <p class="card-text" style="width: 250px; height: 250px;"><img src="img/<?php echo $hasil['gambar'] ?>" style="width: 250px; height: 250px;"></p>

            </div>
            <div class="card-body">
             <p class="lead">Harga : <?php echo "Rp ".number_format($hasil['harga'],2,',','.')?></p>
             <p class="lead">Stok : <?php echo $hasil['stok']; ?></p><br>
             <?php
             if ($hasil['stok'] == 0) {
              $disable="btn btn-danger disabled";
            }else{
              $disable="btn btn-success ";
            }
            ?>
            <a href="page/customer/proses_beli.php?id_produk=<?=$hasil['id_produk']?>" class="<?php echo $disable;?>"><span class="fa fa-shopping-cart" title="shopping cart"></span> Add to chart</a>
            <a href="detail.php?id_produk=<?=$hasil['id_produk']?>" class="btn btn-dark">Detail</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- /.row -->
</div>
<!-- /.container -->

<!-- untuk pagination -->
<ul class="pagination justify-content-center">
  <?php 
  $query = mysqli_query($conn, "SELECT * FROM tb_produk");
  $jumlah = mysqli_num_rows($query) /2;
  $page = ceil($jumlah);
  for ($i=1; $i <= $page ; $i++) { 
    ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo "$i"; ?></a>
    </li>
    <?php
  }
  ?>
</ul>