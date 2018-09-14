<?php
$tujuan="SELECT * FROM tb_tujuan order by id_tujuan desc";
$data = mysqli_query($conn, $tujuan);
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
					<th>Nama Penerima</th>
					<th>Kode Pos</th>
					<th>Alamat Lengkap</th>
					<th>No Telepon</th>
					<th>Metode Pembayaran</th>
					<th>Aksi</th>	
				</tr>
				<tbody>
					<?php
					$no=1;
					while($hasil = mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $hasil[1]; ?></td>
							<td><?php echo $hasil[2]; ?></td>
							<td><?php echo $hasil[3]; ?></td>
							<td><?php echo $hasil[4]; ?></td>
							<td><?php echo $hasil[5]; ?></td>
							<td><?php echo $hasil[6]; ?></td>
							<td>

								<button type="reset" class="btn btn-danger">
									<a href="hapus_tujuan.php?id_tujuan=<?php echo $hasil[0]?>" style="color: #fff;text-decoration: none;"><span class="fa fa-trash"></span></a>
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
