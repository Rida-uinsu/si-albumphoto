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
			<a href="index.php">HOME</a>
			<a href="index.php?page=index_post">POST</a>
			<a href="index.php?page=index_login">LOGIN</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020 &copy; Programmed By AFRIDAYANI
		</div>
	</div>
</body>
</html>