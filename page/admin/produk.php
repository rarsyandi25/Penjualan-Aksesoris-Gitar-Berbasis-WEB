<?php
$produk="SELECT * FROM tb_produk order by id_produk desc";
$data = mysqli_query($conn, $produk);
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<table class="table">
				<br><br>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Gambar</th>
					<th width="15%">Harga</th>
					<th>stok</th>
					<th>Deskripsi</th>
					<th>Aksi</th>	
					<th></th>
				</tr>
				<tbody>
					<?php
					$no=1;
					while($hasil = mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $hasil[1]; ?></td>
							<td><img src="../../img/<?php echo $hasil[2]; ?>" width="50" height="50"></td>
							<td><?php echo "Rp ".number_format($hasil['harga'],2,',','.')?></td>
							<td><?php echo $hasil[4]; ?></td>
							<td><?php echo $hasil[5]; ?></td>
							
							<td>
									<a href="edit_produk.php?id_produk=<?php echo $hasil[0]?>" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
							</td>
							<td>
									<a href="hapus_produk.php?id_produk=<?php echo $hasil[0]?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')" style="margin-left: -15px;"><span class="fa fa-trash"></span></a>
							</td>
							
						</tr>

						<?php
						$no++;
					}
					?>

					<tr>
						<td colspan="8" align="right">
							<button type="submit" class="btn btn-success">
								<a href="tambah_produk.php" style="color: #fff;text-decoration: none;"><span class="fa fa-plus"></span> TAMBAH
								</a>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
