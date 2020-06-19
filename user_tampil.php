<center><h2>DATA USER</h2></center>

<?php 
require_once "app/user.php";
$cat = new App\User();
$rows = $cat->tampil();
?>
<table>
	<tr>
		<th><center>NO</th></center>
		<th><center>NAMA LENGKAP</th></center>
		<th><center>USERNAME</th></center>
		<th><center>ROLE</th></center>
		<th><center>EDIT</th></center>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><center><?php echo $row['user_id']; ?></td></center>
			<td><center><?php echo $row['user_nama_lengkap']; ?></td></center>
			<td><center><?php echo $row['username']; ?></td></center>
			<td><center>
				<?php 
				if($row['user_role'] == 1) {
					echo "Administrator";
				} else {
					echo "Operator";
				}
				?>				
			</td></center>
			<td><center><a href="dashboard.php?page=user_edit&id=<?php echo $row['user_id']; ?>" class="btn">Edit</a></td></center>
		</tr>
	<?php } ?>
</table>
<div>
	<center><a href="dashboard.php?page=user_input" class="btn">Tambah</a></center> 
</div>