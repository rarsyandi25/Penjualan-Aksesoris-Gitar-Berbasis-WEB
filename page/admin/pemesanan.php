<?php
$pemesanan="SELECT tb_pemesanan.no_invoice, tb_user.nama, tb_produk.nama_produk,tb_pemesanan.kuantitas,tb_pemesanan.status,tb_pemesanan.tanggal FROM tb_pemesanan join tb_user on tb_user.id_user=tb_pemesanan.id_user join tb_produk on tb_produk.id_produk=tb_pemesanan.id_produk";
$data = mysqli_query($conn, $pemesanan);
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<table class="table">
				<br><br>
				<tr>
					<th>No</th>
					<th>No Invoice</th>
					<th>User</th>
					<th>Produk</th>
					<th>Kuantitas</th>
					<th>Status</th>
					<th>Tanggal</th>
					<th>Aksi</th>	
				</tr>
				<tbody>
					<?php
					$no=1;
					while($hasil = mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $hasil[0]; ?></td>
							<td><?php echo $hasil[1]; ?></td>
							<td><?php echo $hasil[2]; ?></td>
							<td><?php echo $hasil[3]; ?></td>
							<td><?php echo $hasil[4]; ?></td>
							<td><?php echo $hasil[5]; ?></td>
							<td>

								<button type="reset" class="btn btn-danger">
									<a href="hapus_pemesanan.php?id_pemesanan=<?php echo $hasil[0]?>" style="color: #fff;text-decoration: none;"><span class="fa fa-trash"></span></a>
								</button>
							</td>
						</tr>

						<?php
						$no++;
					}
					?>

				</tbody>
			</table>
		</div>
	</div>
</div>
