<?php 

// Config
require_once "inc/config.php";
require_once "app/photo.php";

$pho = new App\photos();

if ($_POST['btn-simpan']) {
	$pho->input();
	header("location:dashboard.php?page=photo_tampil");
}

if ($_POST['btn-update']) {
	$pho->update();
	header("location:dashboard.php?page=photo_tampil");
}

if (isset($_POST['up'])) {
	 $nama = $_FILES['gambar']['name'];
	 $tmp = $_FILES['gambar']['tmp_name'];
	 $path = "layout/assets/images/album/".$nama;
	 move_uploaded_file($tmp, $path);
	 header("location:dashboard.php?page=photo_input&gambar=$nama");
}