<?php 
include '../koneksi.php';
$id_kasir=$_POST['id_kasir'];
$nama_lengkap=$_POST['nama_lengkap'];
$jenkel=$_POST['jenkel'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("update kasir set nama_lengkap='$nama_lengkap', jenkel='$jenkel', alamat='$alamat', telp='$telp', username='$username', password='$password' where id_kasir='$id_kasir'");
header("location:kasir.php");

?>