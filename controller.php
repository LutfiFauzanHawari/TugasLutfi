 <?php 
$username=$_POST["username"];
$password=$_POST["password"];

if($username="lutfi" && $password=123){
	echo "Login Berhasil";
	header('Location: biodata.php');
}elseif ($username!="budiman" && $password!=123){
	echo "Login Gagal";
}


 ?>