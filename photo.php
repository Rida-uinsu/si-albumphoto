<?php
require_once "app/photo.php";
$kat = new App\tphotos;
$rows = $kat->tampil();
?>
<h2><center>DATA FOTO</h2></center>
<form  method="post">
 <table>
   <tr>
     <th><center>ID FOTO</th></center>
     <th><center>ID POST</th></center>
     <th><center>TANGGAL</th></center>
     <th><center>JUDUL</th></center>
     <th><center>KETERANGAN</th></center>
     <th><center>EDIT</th></center>
     <th><center>HAPUS</th></center>
   </tr>
   <?php foreach ($rows as $row) { $id = $row['photos_id']; ?>
     <tr>
       <td><center><?php echo $row['photos_id']; ?></td></center>
       <td><center><?php echo $row['post_id']; ?></td></center>
       <td><center><?php echo $row['tanggal']; ?></td></center>
       <td><center><?php echo $row['title']; ?></td></center>
       <td><center><?php echo $row['keterangan']; ?></td></center>
       <td><center><input type="submit" name="edit<?php echo $id ?>" value="EDIT"></center></td>
       <?php
           if (isset($_POST['edit'.$id])) {
               header("Location: index.php?halaman=photo_edit.php&id=$id"); } ?>
       <td><center><input type="submit" value="HAPUS" name="thapus<?php echo $id ?>"></center></td>
       <?php
       if (isset($_POST['thapus'.$id])) {  
        $kat->hapus($id);
         header("Location: index.php?halaman=photo.php&id=$d1"); }
       ?>
     </td></tr>
   <?php } ?>
 </table>
 <center><input type="submit" name="tam" value="INPUT DATA"></center>
 <?php
   if (isset($_POST['tam'])) {
       header("Location: index.php?halaman=photo_input.php");  }
 ?></form>
