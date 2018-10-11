<?php 
	include '../koneksi.php';
	$id_supp=$_POST['id_supp'];
	$nama_perusahaan=$_POST['nama_perusahaan'];
	$nama_sales=$_POST['nama_sales'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];

	mysql_query("insert into supplier values('$id_supp','$nama_perusahaan','$nama_sales','$alamat','$telepon')");
	header("location:supplier.php");
 ?>