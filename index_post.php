<center><h2>DAFTAR POST</h2></center>

<?php 
require_once "app/index.php";


$ind = new App\Index();
$rows = $ind->post();

?>

<table>
	<tr>
		<th><center>POST</th></center>
		<th><center>ALBUM</th></center>
		<th><center>PHOTO</th></center>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><center><?php echo $row['PST']; ?></td></center>
			<td><center><?php echo $row['ALB']; ?></td></center>
			<td><center>
				<?php if (!empty($row['gambar'])) { ?>
					<img width="40px" height="50px" src="layout/assets/images/album/<?php echo $row['gambar']; ?>">				
					<?php } ?>
				</td></center>
			</tr>
		<?php } ?>
	</table>