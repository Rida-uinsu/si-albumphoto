<h2>TAMBAH USER</h2>

<form method="POST" action="user_proses.php">
	<table>
		<tr>
			<th>NAMA LENGKAP</th>
			<td><input type="text" name="user_nama_lengkap" required=""></td>
		</tr>
		<tr>
			<th>USERNAME</th>
			<td><input type="text" name="username" required=""></td>
		</tr>
		<tr>
			<th>PASSWORD</th>
			<td><input type="password" name="password" required=""></td>
		</tr>
		<tr>
			<th>ROLE</th>
			<td>
				<select name="user_role">
					<option value="1">Administrator</option>
					<option value="2">Operator</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" class="tmbl" value="SIMPAN"></td>
		</tr>
	</table>
</form>