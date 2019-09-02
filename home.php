<!DOCTYPE html>
<html>
<head>
	<title>Home Admin</title>
</head>
<body>
	<?php 	
			include ('koneksi.php');

			$sql = "SELECT * FROM data_booking";
			$datas = mysqli_query($con, $sql);
		?>
	<h2>Data Booking Futsal</h2>
	<nav>
		<a href="biodata.php">[+] Booking</a>
	</nav>
	<br>
	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
				<th>Nama</th>
				<th>No Telepon</th>
				<th>Tanggal Booking</th>
				<th>Waktu Booking</th>
				<th>Nama Lapangan</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($datas as $data) : ?>
			<tr>
		 		<td><?= $data["nama_booking"]; ?></td>
		 		<td><?= $data["no_telepon"]; ?></td>
		 		<td><?= $data["tanggal_booking"]; ?></td>
		 		<td><?= $data["waktu_booking"]; ?></td>
		 		<td><?= $data["nama_lapangan"]; ?></td>
		 	</tr>
		 	<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>