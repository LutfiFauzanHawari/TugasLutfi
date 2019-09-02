<?php 
	include("koneksi.php");

	if (isset($_POST['tambah'])) 
	{
		
		$nama = $_POST['nama_booking'];
		$no_telp = $_POST['no_telepon'];
		$t_booking = $_POST['tanggal_booking'];
		$w_booking = $_POST['waktu_booking'];
		$nama_lapangan = $_POST['nama_lapangan'];

		$sql = "INSERT INTO data_booking VALUES ('', '$nama', '$no_telp', '$t_booking','$w_booking','$nama_lapangan')";
		$query = mysqli_query($con, $sql);

		if ($query) {
			echo "
				<script>
					alert('Data telah ditambahkan');
				</script>
			";
			header("Location: home.php");
		}else{
			echo "
				<script>
					alert('Data gagal ditambahkan');
				</script>
			";
		}
	}

?>