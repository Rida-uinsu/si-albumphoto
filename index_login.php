<h2>SILAHKAN LOGIN</h2>

<?php 

// Kalau login error tampilkan notifikasi
if (isset($_SESSION['login_error'])) {
	echo '<p style="color:red">Login tidak ditemukan!</p>';
	unset($_SESSION['login_error']);
}

// Kalau sesi user_name ada, redirect
if (isset($_SESSION['username'])) {	
	header("location:dashboard.php"); 
}

?>

<form action="index_proses.php" method="POST">
	<table>
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" required="" autocomplete="off"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" required="" autocomplete="off"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-login" value="LOGIN" class="tmbl"></td>
		</tr>
	</table>
</form>