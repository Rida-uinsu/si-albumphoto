<center><h2>DATA ALBUM</h2></center>

<?php 
require_once "app/album.php";
$alb = new App\Album();
$rows = $alb->tampil();
?>

<table>
	<tr>
		<th><center>NO</th></center>
		<th><center>NAMA</th></center>
		<th><center>PHOTO</th></center>
		<th><center>KETERANGAN</th></center>
		<th><center>EDIT</th></center>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><center><?php echo $no; ?></td></center>
			<td><center><?php echo $row['album_name']; ?></td></center>
			<td><center><?php echo $row['PHO']; ?></td></center>
			<td><center><?php echo $row['album_text']; ?></td></center>
			<td><center><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">Edit</a></td></center>
		</tr>
	<?php } ?>
</table>

<center><a href="dashboard.php?page=album_input" class="btn">Tambah</a></center>