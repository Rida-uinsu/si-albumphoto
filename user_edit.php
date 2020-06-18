<?php 
require_once "app/user.php";


$id = $_GET['id'];

$user = new App\User();
$row = $user->edit($id);
?>

<h2>EDIT USER</h2>

<form method="POST" action="user_proses.php">
	<input type="hidden" name="user_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<th>NAMA LENGKAP</th>
			<td><input type="text" name="user_nama_lengkap" value="<?php echo $row['user_nama_lengkap']; ?>" required=""></td>
		</tr>
		<tr>
			<th>USERNAME</th>
			<td><input type="text" name="username" value="<?php echo $row['username']; ?>" required=""></td>
		</tr>
		<tr>
			<th>PASSWORD</th>
			<td>
				<input type="password" name="password">
				<div><small>Kosongkan jika tidak ingin diubah</small></div>
			</td>
		</tr>
		<tr>
			<th>ROLE</th>
			<td>
				<select name="user_role">
					<option value="1"<?php echo $row['user_role']==1 ? " selected" : ""; ?>>Administrator</option>
					<option value="2"<?php echo $row['user_role']==2 ? " selected" : ""; ?>>Operator</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" class="tmbl" name="btn-update" value="UPDATE"></td>
		</tr>
	</table>
</form>