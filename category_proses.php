<?php 

// Config
require_once "inc/config.php";
require_once "app/category.php";

$cat = new App\Category();

if ($_POST['btn-simpan']) {
	$cat->input();
	header("location:dashboard.php?page=category_tampil");
}

if ($_POST['btn-update']) {
	$cat->update();
	header("location:dashboard.php?page=category_tampil");
}
