<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Supplier | UD. Az-zikra</title>
		
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

		<?php include 'header.php'; ?>

        <div id="page-wrapper">
			<?php
				include '../koneksi.php';
	
				$konek=mysql_query('SELECT * FROM supplier');
				function autonumber($tabel, $kolom, $lebar=0, $awalan=''){
					$query= mysql_query("SELECT id_supp FROM supplier ORDER BY id_supp DESC LIMIT 1");
					$jumlahrecord = mysql_num_rows($query);
					if($jumlahrecord == 0)
						$nomor=1;
					else{
						$row=mysql_fetch_array($query);
						$nomor=intval(substr($row[0],strlen($awalan)))+1;
					}
					if($lebar>0)
						$angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
					else
						$angka = $awalan.$nomor;
					return $angka;
				}
			?>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            <i class="fa fa-user"></i> Data Supplier
                        </h2>
						<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span> <b>Tambah Supplier</b></button>
					</div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>ID Supplier</th>
									<th>Nama Perusahaan</th>
									<th>Nama Sales</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Pilihan</th>
								</tr>
							</thead>
							<tbody>
								<?php
									while ($row=mysql_fetch_array($konek))
									{
								?>
								<tr>
									<td><?php echo $row['id_supp']; ?></td>
									<td><?php echo $row['nama_perusahaan']; ?></td>
									<td align="center"><?php echo $row['nama_sales']; ?></td>
									<td align="center"><?php echo $row['alamat']; ?></td>
									<td align="center"><?php echo $row['telepon']; ?></td>
									<td align="center">
										<a href="edit_supp.php?id=<?php echo $row['id_supp']; ?>" class="btn btn-warning">Edit</a>
										<a onclick="if(confirm('Yakin Ingin Menghapus Data Ini ???')){ location.href='hapus_supp.php?id=<?php echo $row['id_supp']; ?>' }" class="btn btn-danger">Hapus</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<div id="myModal" class="modal fade">
					<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Tambah Supplier Baru</h4>
						</div>
						<div class="modal-body">
						<form action="supplier_act.php" method="post">
							<div class="form-group">
								<label>Id Supplier</label>
								<input type="text" id="text-input" name="id_supp" class="form-control" value="<?php echo autonumber("supplier", "id_supp", 6, "S") ?>" readonly>
							</div>
							<div class="form-group">
								<label>Nama Perusahaan</label>
								<input name="nama_perusahaan" type="text" class="form-control" placeholder="Nama Perusahaan" maxlength="20">
							</div>
							<div class="form-group">
								<label>Nama Sales</label>
								<input type="text" id="text-input" name="nama_sales" class="form-control" placeholder="Nama Sales" maxlength="20" onkeyup="validHuruf(this)" required>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input name="alamat" type="text" class="form-control" placeholder="Alamat" maxlength="50">
							</div>	
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" id="text-input" name="telepon" class="form-control" placeholder="Telepon" maxlength="12" onkeyup="validAngka(this)" required>
							</div>																	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
						</form>
					</div>
					</div>
				</div>
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
			//validasi angka
			function validAngka(a)
			{
				if(!/^[0-9.]+$/.test(a.value))
				{
					a.value = a.value.substring(0,a.value.length-1000);
				}
			}

			//validasi huruf
			function validHuruf(a)
			{
				if(!/^[a-zA-Z]+$/.test(a.value))
				{
					a.value = a.value.substring(0,a.value.length-1000);
				}
			}
			
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive: true
				});
			});
		</script>
	</body>
</html>
