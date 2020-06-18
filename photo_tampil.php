<h2>DATA PHOTO</h2>

<?php 
require_once "app/photo.php";


$pho = new App\Photos();
$rows = $pho->tampil();

?>

<table>
	<tr>
		 <th>NO</th>
	     <th>FOTO</th>
	     <th>TANGGAL</th>
	     <th>ID POST</th>
	     <th>JUDUL</th>
	     <th>KETERANGAN</th>
	     <th>EDIT</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>
			<td>
				<img width="50px" height="50px" src="layout/assets/images/album/<?php echo $row['gambar']; ?>">
			</td>
			<td><?php echo $row['pho_date']; ?></td>

			<td><?php echo $row['PST']; ?></td>
			<td><?php echo $row['pho_tittle']; ?></td>
			<td><?php echo $row['pho_text']; ?></td>
			<td><a href="dashboard.php?page=photo_edit&id=<?php echo $row['pho_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>

<a href="dashboard.php?page=photo_input" class="btn">Tambah</a>