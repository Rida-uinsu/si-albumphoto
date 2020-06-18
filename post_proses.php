<?php 

// Config
require_once "inc/config.php";
require_once "app/post.php";

$pst = new App\Post();

if ($_POST['btn-simpan']) {
	$pst->input();
	header("location:dashboard.php?page=post_tampil");
}

if ($_POST['btn-update']) {
	$pst->update();
	header("location:dashboard.php?page=post_tampil");
}
