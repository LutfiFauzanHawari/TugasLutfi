<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<body>
	<h1>Halaman Registrasi</h1>

	<form action="proses.php" method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="register">Register</button>
			</li>
		</ul>
	</form>
</body>
</html>