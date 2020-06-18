<?php 
require_once "app/photo.php";

$id = $_GET['id'];

$pho = new App\Photos();
$row = $pho->edit($id);
$lst = $pho->listPost();

?>

<h2>EDIT PHOTO</h2>

<form method="POST" action="photo_proses.php">
	<input type="hidden" name="pho_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<th>TANGGAL</th>
			<td><input type="date" name="pho_date" value="<?php echo $row['pho_date']; ?>" required=""></td>
		</tr>
		<tr>
			<th>POST ID</th>
			<td>
				<select name="pho_post_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['post_id']; ?>"<?php echo $row['pho_post_id']==$ls['post_id'] ? " selected" : ""; ?>><?php echo $ls['post_tittle']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>

		<tr>
			<th>TITTLE</th>
			<td><input type="text" name="pho_tittle" value="<?php echo $row['pho_tittle']; ?>" required=""></td>
		</tr>

		<tr>
			<th>KETERANGN</th>
			<td><input type="text" name="pho_text" value="<?php echo $row['pho_text']; ?>" required=""></td>
		</tr>

		<tr>
			<td></td>
			<td><input class="tmbl" type="submit" name="btn-update" value="UPDATE"></td>
		</tr>
	</table>
</form>