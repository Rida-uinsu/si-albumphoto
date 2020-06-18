<?php 

require_once "app/album.php";

$alb = new App\Album();
$lst = $alb->listPhotos();
?>

<h2>TAMBAH ALBUM</h2>

<form method="POST" action="album_proses.php">
	<table>
		<tr>
			<th>NAMA</th>
			<td><input type="text" name="album_name" required=""></td>
		</tr>
		<tr>
			<th>PHOTO</th>
			<td>
				<select name="album_pho_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['pho_id']; ?>"><?php echo $ls['pho_tittle']; ?></option>
					<?php } ?>
				</select>
			</td>

		<tr>
			<th>KETERANGAN</th>
			<td><input type="text" name="album_text" required=""></td>
		</tr>

		
		<tr>
			<td></td>
			<td><input type="submit" class="tmbl" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>