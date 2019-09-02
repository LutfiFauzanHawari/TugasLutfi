<?php 
$username=$_POST['username'];
$password=$_POST['password'];


	if($username = "nama" && $password = 123){
		// header("Location : biodata.php");
		exit;
	}else{
		$error = true;
	}
 
echo $username .$password;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Selamat datang</h1>
</body>
</html>