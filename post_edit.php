<?php 
require_once "app/post.php";
$id = $_GET['id'];
$pst = new App\Post();
$row = $pst->edit($id);
$lst = $pst->listCategory();
?>
<center><h2>EDIT POST</h2></center>
<form method="POST" action="post_proses.php">
  <input type="hidden" name="post_id" value="<?php echo $id; ?>">
  <table>
    <tr>
      <th>TANGGAL</th>
      <td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>" required=""></td>
    </tr>
    <tr>
      <th>KATEGORI</th>
      <td>
        <select name="post_cat_id">
          <?php foreach ($lst as $ls) { ?>
          <option value="<?php echo $ls['cat_id']; ?>"<?php echo $row['post_cat_id']==$ls['cat_id'] ? " selected" : ""; ?>><?php echo $ls['cat_name']; ?></option>
          <?php } ?>
        </select>
      </td></tr>
    <tr>
      <th>SLUG</th>
      <td><input type="text" name="post_slug" value="<?php echo $row['post_slug']; ?>" required=""></td>
    </tr>
    <tr>
      <th>JUDUL</th>
      <td><input type="text" name="post_tittle" value="<?php echo $row['post_tittle']; ?>" required=""></td>
    </tr>
    <tr>
      <th>KETERANGAN</th>
      <td><input type="text" name="post_text" value="<?php echo $row['post_text']; ?>" required=""></td>
    </tr>
    <tr>
      <td></td>
      <td><input class="tmbl" type="submit" name="btn-update" value="UPDATE"></td>
    </tr>
  </table>
</form>