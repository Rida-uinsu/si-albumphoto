
<center><h2>DATA KATEGORI</h2></center>

<?php 
require_once "app/category.php";


$cat = new App\Category();
$rows = $cat->tampil();

?>

<table>
	<tr>
		<th><center>NO</th></center>
		<th><center>NAMA</th></center>
		<th><center>KETERANGAN</th></center>
		<th><center>EDIT</th></center>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><center><?php echo $row['cat_id']; ?></td></center>
			<td><center><?php echo $row['cat_name']; ?></td></center>
			<td><center><?php echo $row['cat_text']; ?></td></center>
			<td><center><a href="dashboard.php?page=category_edit&id=<?php echo $row['cat_id']; ?>" class="btn">Edit</a></td></center>
		</tr>
	<?php } ?>
</table>

<div>
	<center><a href="dashboard.php?page=category_input" class="btn">Tambah</a></center>
	</div>