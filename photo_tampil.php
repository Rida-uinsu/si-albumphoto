<center><h2>DATA PHOTO</h2></center>
<?php 
require_once "app/photo.php";
$pho = new App\Photos();
$rows = $pho->tampil();
?>
<table>
	<tr>
		 <th><center>NO</th></center>
	     <th><center>FOTO</th></center>
	     <th><center>TANGGAL</th></center>
	     <th><center>ID POST</th></center>
	     <th><center>JUDUL</th></center>
	     <th><center>KETERANGAN</th></center>
	     <th><center>EDIT</th></center>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><center><?php echo $no; ?></td></center>
			<td>
				<center><img width="50px" height="50px" src="layout/assets/images/album/<?php echo $row['gambar']; ?>">
			</td></center>
			<td><center><?php echo $row['pho_date']; ?></td></center>

			<td><center><?php echo $row['PST']; ?></td></center>
			<td><center><?php echo $row['pho_tittle']; ?></td></center>
			<td><center><?php echo $row['pho_text']; ?></td></center>
			<td><center><a href="dashboard.php?page=photo_edit&id=<?php echo $row['pho_id']; ?>" class="btn">Edit</a></td></center>
		</tr>
	<?php } ?>
</table>

<center><a href="dashboard.php?page=photo_input" class="btn">Tambah</a></center>