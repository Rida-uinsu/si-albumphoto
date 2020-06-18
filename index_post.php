<h2>DAFTAR POST</h2>

<?php 
require_once "app/index.php";


$ind = new App\Index();
$rows = $ind->post();

?>

<table>
	<tr>
		<th>POST</th>
		<th>ALBUM</th>
		<th>PHOTO</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $row['PST']; ?></td>
			<td><?php echo $row['ALB']; ?></td>
			<td>
				<?php if (!empty($row['gambar'])) { ?>
					<img width="50px" height="50px" src="layout/assets/images/album/<?php echo $row['gambar']; ?>">				
					<?php } ?>
				</td>
			</tr>
		<?php } ?>
	</table>