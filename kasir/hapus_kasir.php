<?php 
	include '../koneksi.php';
	$id_kasir=$_GET['id'];
	mysql_query("delete from kasir where id_kasir='$id_kasir'");
	header("location:kasir.php");
?>