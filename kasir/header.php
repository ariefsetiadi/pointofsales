<?php
	include '../koneksi.php';
	$konek=mysql_query('SELECT * FROM admin');
	$row=mysql_fetch_array($konek)
?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">UD. ZIKRA</a>
	</div>
				
	<!-- Top Menu Items -->
	<ul class="nav navbar-right top-nav">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b><?php echo $row['nama_lengkap'];?></b> <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="#"><i class="fa fa-fw fa-user"></i> My Profile</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-fw fa-gear"></i> Pengaturan</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Keluar</a>
				</li>
			</ul>
		</li>
	</ul>
	
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li>
				<a href="../admin/index.php"><i class="glyphicon glyphicon-home"></i> Home</a>
			</li>
			<li class="active">
				<a href="kasir.php"><i class="fa fa-user"></i> Kasir</a>
			</li>
			<li>
				<a href="../supplier/supplier.php"><i class="fa fa-user"></i> Supplier</a>
			</li>
			<li>
				<a href="../barang/barang.php"><i class="glyphicon glyphicon-briefcase"></i> Barang</a>
			</li>
			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#transaksi"><i class="glyphicon glyphicon-inbox"></i> Transaksi <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="transaksi" class="collapse">
					<li class='nav-item'>
						<a class='nav-link' href='../transaksi/pembelian.php'><i class='fa fa-shopping-cart'></i> Pembelian</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href='../transaksi/penjualan.php'><i class='fa fa-shopping-cart'></i> Penjualan</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#laporan"><i class="fa fa-fw fa-file"></i> Laporan <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="laporan" class="collapse">
					<li class='nav-item'>
						<a class='nav-link' href='#'><i class='glyphicon glyphicon-briefcase'></i> Stok Barang</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href='#'><i class='fa fa-fw fa-file'></i> Laporan Pembelian</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href='#'><i class='fa fa-fw fa-file'></i> Laporan Penjualan</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>