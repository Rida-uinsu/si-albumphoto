<?php 

require_once "app/photo.php";

$pho = new App\Photos();
$lst = $pho->listPost();



?>

<h2>TAMBAH PHOTO</h2>

	<table>
	<tr>
	      <th>FOTO</th>
	      <td>
	     	 <form method="POST" enctype="multipart/form-data" action="photo_proses.php">
	        <?php 
				if (isset($_GET['gambar'])) { ?>
		          <img src="layout/assets/images/album/<?php echo $_GET['gambar']; ?>" height="100px" width="100px">
		        <?php } 

		        else { ?>
		          <input type="file" name="gambar">
		          <input class="tmbl" type="submit" value="Upload" name="up">
	        <?php } ?>
     	 </form>
	      </td>
    </tr>


	<form method="POST" action="photo_proses.php?gambar=<?php echo $_GET['gambar']; ?>">

	<tr>
		<th>TANGGAL</th>
		<td><input type="date" name="pho_date" required=""></td>
	</tr>

	<tr>
		<th>POST ID</th>
		<td>
			<select name="pho_post_id">
			<?php foreach ($lst as $ls) { ?>
			<option value="<?php echo $ls['post_id']; ?>"><?php echo $ls['post_tittle']; ?></option>
			<?php } ?>
			</select>
		</td>
	</tr>

	<tr>
		<th>JUDUL</th>
		<td><input type="text" name="pho_tittle" required=""></td>
	</tr>

	<tr>
		<th>KETERANGAN</th>
		<td><input type="text" name="pho_text" required=""></td>
	</tr>

		
		<tr>
			<td></td>
			<td><input type="submit" class="tmbl" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>