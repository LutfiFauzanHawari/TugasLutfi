<?php 
	include ('koneksi.php');

	if (isset($_POST["login"])) {
		$user = $_POST["username"];
		$pass = $_POST["password"];

		$sql = "SELECT * FROM user WHERE username ='$user' and password ='$pass'";
		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result) == 1 ){
			header("Location: home.php");
			exit;
		}

		$error = true;
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
		
	</style>
</head>
<body>
	
	<div class="table">
		<h1>Login</h1>
		<form method="post" action="login.php">
			<input type="text" name="username" placeholder="Masukkan Username" required>
			<br>
			<br>
			<input type="password" name="password" placeholder="Masukkan Password" required>
			<br>
			<br>
			<button type="submit" class="button"  name="login">Enter</button>

		</form>
		
		<button type="submit" class="button"  name="registrasi"><a href="registrasi.php">Daftar</a></button>
	</div>
</body>
</html>