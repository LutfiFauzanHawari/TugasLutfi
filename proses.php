<?php 
	include 'koneksi.php';

	if (isset($_POST['register'])) {
		
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$sql = "INSERT INTO user VALUES ('','$user', '$pass')";
		$query = mysqli_query($con, $sql);

		if ($query) {
			echo "
				<script>
					alert('Data telah ditambahkan');
				</script>
			";
			header("Location: login.php");
		}else{
			echo "
				<script>
					alert('Data gagal ditambahkan');
				</script>
			";
		}
	}
 ?>