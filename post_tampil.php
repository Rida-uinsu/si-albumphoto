<center><h2>DATA POST</h2></center>

<?php 
require_once "app/post.php";


$pst = new App\Post();
$rows = $pst->tampil();

?>

<table>
	<tr>
		<th><center>NO</th></center>
		<th><center>TANGGAL</th></center>
		<th><center>KATEGORI</th></center>
		<th><center>SLUG</th></center>
		<th><center>JUDUL</th></center>
		<th><center>KETERANGAN</th></center>
		<th><center>EDIT</th></center>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><center><?php echo $no; ?></td></center>
			<td><center><?php echo $row['post_date']; ?></td></center>
			<td><center><?php echo $row['CAT']; ?></td></center>
			<td><center><?php echo $row['post_slug']; ?></td></center>
			<td><center><?php echo $row['post_tittle']; ?></td></center>
			<td><center><?php echo $row['post_text']; ?></td></center>
			<td><center><a href="dashboard.php?page=post_edit&id=<?php echo $row['post_id']; ?>" class="btn">Edit</a></td></center>
		</tr>
	<?php } ?>
</table>
<center><a href="dashboard.php?page=post_input" class="btn">Tambah</a></center>