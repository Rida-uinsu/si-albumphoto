<?php 
require_once "app/album.php";

$id = $_GET['id'];

$alb = new App\Album();
$row = $alb->edit($id);
$lst = $alb->listPhotos();

?>

<h2>EDIT ALBUM</h2>

<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<th>NAMA</th>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>" required=""></td>
		</tr>
		<tr>
			<th>PHOTO</th>
			<td>
				<select name="album_pho_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['pho_id']; ?>"<?php echo $row['album_pho_id']==$ls['pho_id'] ? " selected" : ""; ?>><?php echo $ls['pho_tittle']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>

		<tr>
			<th>KETERANGAN</th>
			<td><input type="text" name="album_text" value="<?php echo $row['album_text']; ?>" required=""></td>
		</tr>


		<tr>
			<td></td>
			<td><input class="tmbl" type="submit" name="btn-update" value="UPDATE"></td>
		</tr>
	</table>
</form>