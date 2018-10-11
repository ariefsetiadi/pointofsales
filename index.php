<?php
	include('login.php');
 
	if(isset($_SESSION['login_user'])){
		header("location: admin/index.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/style.css">
		<title>Login | UD. Az-zikra</title>
	</head>

	<body>
		<div class="login-card" style="margin-top: 130px">
			<h1><b>LOGIN</b></h1><br>

			<form action="" method="post">
				<input type="text" id="username" name="username" placeholder="Username">
				<input type="password" id="password" name="password" placeholder="Password">
				<input type="submit" id="submit" name="submit" class="login login-submit" value="Login">
			</form>
    
			<div class="login-help">
				<a href="#"><b>Daftar Admin Baru</b></a><!-- • <a href="#"><b>Lupa Password</b></a>-->
			</div>
		</div>
	</body>
</html>
