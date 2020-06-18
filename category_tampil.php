
<h2>DATA KATEGORI</h2>

<?php 
require_once "app/category.php";


$cat = new App\Category();
$rows = $cat->tampil();

?>

<table>
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>KETERANGAN</th>
		<th>EDIT</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $row['cat_id']; ?></td>
			<td><?php echo $row['cat_name']; ?></td>
			<td><?php echo $row['cat_text']; ?></td>
			<td><a href="dashboard.php?page=category_edit&id=<?php echo $row['cat_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>

<div>
	<a href="dashboard.php?page=category_input" class="btn">Tambah</a>
	</div>