<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Laporan Pembelian | UD. Az-zikra</title>
		
		<!-- CSS -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/css/sb-admin.css" rel="stylesheet">
		<link href="../assets/css/plugins/morris.css" rel="stylesheet">
		<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
		<!-- CSS DataTables-->
		<link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="../assets/css/dataTables.responsive.css" rel="stylesheet">
	</head>

	<body>
		<div id="wrapper">
			<?php include '../koneksi.php';
				include 'header.php';
			?>
			
			<div id="page-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="page-header">
								<i class="fa fa-fw fa-file"></i> Laporan Pembelian Barang
							</h2>
						</div>
					</div>
					
					<form action="cetak_lapbeli.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group row">
							<label class="col-md-2 form-control-label" for="text-input">ID Faktur</label>
							<div class="col-md-2">
								<select id="id_faktur" name="id_faktur" class="form-control">
									<option>Pilih No. Faktur</option>
									<?php
										$get = mysql_query("SELECT DISTINCT id_faktur FROM detil_pembelian");
										if(mysql_num_rows($get) != 0){
											while($data = mysql_fetch_assoc($get)){
												echo '<option>'.$data['id_faktur'].'</option>';
											}
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 form-control-label" for="text-input"></label>
							<div class="col-md-5">
								<button type="submit" name="submit" class="btn btn-primary">CETAK</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	
		<!-- jQuery -->
		<script src="../assets/js/jquery.js"></script>
		<script src="../assets/js/jquery-3.2.0.min.js"></script>
		
		<!-- Javascript DataTables-->
		<script src="../assets/js/jquery.dataTables.js"></script>
		<script src="../assets/js/dataTables.bootstrap.js"></script>
		<script src="../assets/js/dataTables.responsive"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- Morris Charts JavaScript -->
		<script src="../assets/js/plugins/morris/raphael.min.js"></script>
		<script src="../assets/js/plugins/morris/morris.min.js"></script>
		<script src="../assets/js/plugins/morris/morris-data.js"></script>

		<script language='javascript'>
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive: true
				});
			});
			
			function print_d(){
				window.open("cetak_lapbeli.php","_blank");
			}
		</script>

	</body>
</html>
