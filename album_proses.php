<?php 

// Config
require_once "inc/config.php";
require_once "app/album.php";

$pst = new App\Album();

if ($_POST['btn-simpan']) {
	$pst->input();
	header("location:dashboard.php?page=album_tampil");
}

if ($_POST['btn-update']) {
	$pst->update();
	header("location:dashboard.php?page=album_tampil");
}
