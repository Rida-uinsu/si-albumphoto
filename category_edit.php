<?php 
require_once "app/category.php";


$id = $_GET['id'];

$cat = new App\Category();
$row = $cat->edit($id);
?>

<center><h2>EDIT KATEGORI</h2></center>
<form method="POST" action="category_proses.php">
  <input type="hidden" name="cat_id" value="<?php echo $id; ?>">
  <table>
    <tr>
      <th>NAMA</th>
      <td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>" required=""></td>
    </tr>

    <tr>
      <th>KETERANGAN</th>
      <td><input type="text" name="cat_text" value="<?php echo $row['cat_text']; ?>" required=""></td>
    </tr>
    <tr>
      <td></td>
      <td><input class="tmbl" type="submit" name="btn-update" value="UPDATE"></td>
    </tr>
  </table>
</form>