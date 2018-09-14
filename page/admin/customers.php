<?php
$user="SELECT * FROM tb_user";
$data = mysqli_query($conn, $user);
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<table class="table">
				<br><br>
				<tr>
					<th>No</th>
					<th>Nama Customer</th>
					<th>Email</th>
					<!-- <th>Password</th> -->
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
							<!-- <td><?php echo $hasil[3]; ?></td> -->
							<td>

								<button type="reset" class="btn btn-danger">
									<a href="hapus_customers.php?id_user=<?php echo $hasil[0]?>" style="color: #fff;text-decoration: none;"><span class="fa fa-trash"></span></a>
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
