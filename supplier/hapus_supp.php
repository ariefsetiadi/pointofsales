<?php 
	include '../koneksi.php';
	$id_supp=$_GET['id'];
	mysql_query("delete from supplier where id_supp='$id_supp'");
	header("location:supplier.php");
?>