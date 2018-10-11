<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Edit Supplier | UD. Az-zikra</title>
		
		<!-- CSS -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/css/sb-admin.css" rel="stylesheet">
		<link href="../assets/css/plugins/morris.css" rel="stylesheet">
		<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="wrapper">

			<?php include 'header.php'; ?>

			<div id="page-wrapper">
				<?php
					include '../koneksi.php';

					$konek=mysql_query('SELECT * FROM supplier');
					$id_supp=mysql_real_escape_string($_GET['id']);
					$det=mysql_query("select * from supplier where id_supp='$id_supp'")or die(mysql_error());
					while($d=mysql_fetch_array($det)){
				?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Edit Supplier</strong>
								</div>
								
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<form action="update_supp.php" method="POST">
												<table class="table">
													<tr>
														<th class="col-md-2" style="text-align: left">ID Supplier</th>
														<td><input type="text" class="form-control" name="id_supp" value="<?php echo $d['id_supp'] ?>" readonly></td>
													</tr>
													<tr>
														<th class="col-md-2" style="text-align: left">Nama Perusahaan</th>
														<td><input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $d['nama_perusahaan'] ?>"></td>
													</tr>
													<tr>
														<th class="col-md-2" style="text-align: left">Nama Sales</th>
														<td><input type="text" class="form-control" name="nama_sales" value="<?php echo $d['nama_sales'] ?>"></td>
													</tr>
													<tr>
														<th class="col-md-2" style="text-align: left">Alamat</th>
														<td><input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
													</tr>
													<tr>
														<th class="col-md-2" style="text-align: left">Telepon</th>
														<td><input type="text" class="form-control" name="telepon" value="<?php echo $d['telepon'] ?>"></td>
													</tr>
													<tr>
														<td></td>
														<td style="text-align: left">
															<a href="supplier.php" type="reset" class="btn btn-default">BATAL</a>
															<button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
														</td>
													</tr>
												</table>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<?php 
							}
						?>
				</div>
			</div>
		</div>
	
		<!-- jQuery -->
		<script src="../assets/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- Morris Charts JavaScript -->
		<script src="../assets/js/plugins/morris/raphael.min.js"></script>
		<script src="../assets/js/plugins/morris/morris.min.js"></script>
		<script src="../assets/js/plugins/morris/morris-data.js"></script>

	</body>
</html>
