<?php
	session_start();
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Detail Kasir | UD. ZIKRA</title>
		
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
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="row">
						<div class="col-lg-12">
							<h2 class="page-header">
								<i class="fa fa-fw fa-user"></i> Detail Kasir
							</h2>
							<a class="btn" href="kasir.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
						</div>
					</div>
					<!-- /.row -->
				
					<?php
						$id_kasir = mysql_real_escape_string($_GET['id']);
						$det = mysql_query("SELECT * FROM kasir WHERE id_kasir='$id_kasir'")or die(mysql_error());
						while($d=mysql_fetch_array($det)){
					?>
					<table class="table">
						<tr>
							<th class="col-md-3" style="text-align: left">ID Kasir</th>
							<td style="text-align: left"><?php echo $d['id_kasir'] ?></td>
						</tr>
						<tr>
							<th class="col-md-3" style="text-align: left">Nama Lengkap</th>
							<td style="text-align: left"><?php echo $d['nama_lengkap'] ?></td>
						</tr>
						<tr>
							<th class="col-md-3" style="text-align: left">Jenis Kelamin</th>
							<td style="text-align: left"><?php echo $d['jenkel'] ?></td>
						</tr>
						<tr>
							<th class="col-md-3" style="text-align: left">Alamat</th>
							<td style="text-align: left"><?php echo $d['alamat'] ?></td>
						</tr>
						<tr>
							<th class="col-md-3" style="text-align: left">Telepon</th>
							<td style="text-align: left"><?php echo $d['telp'] ?></td>
						</tr>
						<tr>
							<th class="col-md-3" style="text-align: left">Username</th>
							<td style="text-align: left"><?php echo $d['username'] ?></td>
						</tr>
						<tr>
							<th class="col-md-3" style="text-align: left">Password</th>
							<td style="text-align: left"><?php echo $d['password'] ?></td>
						</tr>
					</table>
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
