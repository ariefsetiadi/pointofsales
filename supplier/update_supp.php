<?php 
	include '../koneksi.php';
	$id_supp=$_POST['id_supp'];
	$nama_perusahaan=$_POST['nama_perusahaan'];
	$nama_sales=$_POST['nama_sales'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];

	mysql_query("update supplier set nama_perusahaan='$nama_perusahaan', nama_sales='$nama_sales', alamat='$alamat', telepon='$telepon' where id_supp='$id_supp'");
	header("location:supplier.php");
?>