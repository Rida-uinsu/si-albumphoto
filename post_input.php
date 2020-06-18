<?php 

require_once "app/post.php";

$pst = new App\Post();
$lst = $pst->listCategory();
?>

<h2>TAMBAH POST</h2>

<form method="POST" action="post_proses.php">
  <table>
    <tr>
      <th>TANGGAL</th>
      <td><input type="date" name="post_date" required=""></td>
    </tr>
    <tr>
      <th>KATEGORI</th>
      <td>
        <select name="post_cat_id">
          <?php foreach ($lst as $ls) { ?>
          <option value="<?php echo $ls['cat_id']; ?>"><?php echo $ls['cat_name']; ?></option>
          <?php } ?>
        </select>
      </td>

    <tr>
      <th>SLUG</th>
      <td><input type="text" name="post_slug" required=""></td>
    </tr>

    <tr>
      <th>JUDUL</th>
      <td><input type="text" name="post_tittle" required=""></td>
    </tr>

    <tr>
      <th>KETERANGAN</th>
      <td><input type="text" name="post_text" required=""></td>
    </tr>

    
    <tr>
      <td></td>
      <td><input type="submit" class="tmbl" name="btn-simpan" value="SIMPAN"></td>
    </tr>
  </table>
</form>