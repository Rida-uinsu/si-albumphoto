<?php 

// Kalau sesi user_name tidak ada, redirect
/*if (!isset($_SESSION['user_name'])) {	
	header("location:index.php"); 
}*/ 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas By Afridayani</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/haul.ico" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET;?>images/rdcantik.jpeg">
		</div>

		<div class="menu">
			<a href="dashboard.php">DASHBOARD</a>|
			<a href="dashboard.php?page=category_tampil">KATEGORI</a>|
			<a href="dashboard.php?page=post_tampil">POST</a>|
			<a href="dashboard.php?page=photo_tampil">PHOTO</a>|
			<a href="dashboard.php?page=album_tampil">ALBUM</a>|
			<a href="dashboard.php?page=user_tampil">USER</a>|
			<a href="user_logout.php">LOGOUT</a>
		</div>

		<div class="isi">
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>
		</div>

		<div class="footer">
			Copyright 2020 &copy; Programmed By AFRIDAYANI
		</div>
	</div>
</div>
</body>
</html>