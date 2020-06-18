<h2>DATA POST</h2>

<?php 
require_once "app/post.php";


$pst = new App\Post();
$rows = $pst->tampil();

?>

<table>
	<tr>
		<th>NO</th>
		<th>KATEGORI</th>
		<th>TANGGAL</th>
		<th>SLUG</th>
		<th>JUDUL</th>
		<th>KETERANGAN</th>
		<th>EDIT</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['post_date']; ?></td>
			<td><?php echo $row['CAT']; ?></td>
			<td><?php echo $row['post_slug']; ?></td>
			<td><?php echo $row['post_tittle']; ?></td>
			<td><?php echo $row['post_text']; ?></td>
			<td><a href="dashboard.php?page=post_edit&id=<?php echo $row['post_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>

<a href="dashboard.php?page=post_input" class="btn">Tambah</a>