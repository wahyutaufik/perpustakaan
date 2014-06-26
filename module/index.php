<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
if (empty($_SESSION)) {
	header("Location:../index.php?message=login");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This Just For Campuss Task">
		<meta name="author" content="Wahyu Taufik">

		<link rel="shortcut icon" href="../templates/library/img/book.ico">
		<link href="../templates/library/css/bootstrap.min.css" rel="stylesheet">
		<link href="../templates/library/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../templates/library/css/style.css" rel="stylesheet">
		<link href="../templates/library/css/footer.css" rel="stylesheet">
	</head>
  	<body role="document">
	    <!-- Menu Bar -->
	    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      	<div class="container">
	        	<div class="navbar-header">
	          		<a class="navbar-brand" href="index.php?module=home">Perpustakaan Sekolah</a>
	        	</div>
	        	<div class="navbar-collapse collapse">
	          		<ul class="nav navbar-nav" id="myTab">
	          			<?php if ($_SESSION['akses']=="admin"): ?>
				            <li><a href="index.php?module=home">Home</a></li>
				            <li><a href="index.php?module=peminjaman">Peminjaman</a></li>
		                    <li><a href="index.php?module=pengembalian">Pengembalian</a></li>
				            <li class="dropdown">
		              			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Data <b class="caret"></b></a>
		          				<ul class="dropdown-menu">
					                <li><a href="index.php?module=buku">Buku</a></li>
					                <li><a href="index.php?module=kategori_buku">Kategori Buku</a></li>
					                <li><a href="index.php?module=user">User</a></li>
					                <li><a href="index.php?module=penerbit">Penerbit</a></li>
		          				</ul>
		            		</li>
				            <li><a href="logout.php">Logout</a></li>
	          			<?php else: ?>
				            <li><a href="index.php?module=home">Home</a></li>
				            <li><a href="logout.php">Logout</a></li>
	          			<?php endif ?>
	          		</ul>
	        	</div>
	      	</div>
	    </div>
	    <div class="content"><?php include 'page.php';?></div>
	    <!-- Footer -->
	    <div id="footer">
			<div class="container">
				<p class="muted credit"><font color="white">Copyright 2014 @</font> <a href="index.php?module=home">Perpustakaan Sekolah </a></p>
			</div>
		</div>
	    <script src="../templates/library/js/jquery.min.js"></script>
	    <script src="../templates/library/js/bootstrap.min.js"></script>
	    <script src="../templates/library/js/docs.min.js"></script>
	    <script src="../templates/library/js/typeahead.bundle.js"></script>
  	</body>
</html>
