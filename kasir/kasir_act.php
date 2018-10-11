<?php
	include '../koneksi.php';
	$id_kasir=$_POST['id_kasir'];
	$nama_lengkap=$_POST['nama_lengkap'];
	$jenkel=$_POST['jenkel'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	mysql_query("insert into kasir values('$id_kasir','$nama_lengkap','$jenkel','$alamat','$telp','$username','$password')");
	header("location:kasir.php");
 ?>