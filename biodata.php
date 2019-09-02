<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="proses_booking.php">
	<label>Nama : </label>
	<br>	
	<input type="text" name="nama_booking">
	<br>
	<label>No Telepon: </label>
	<br>	
	<input type="number" name="no_telepon">
	<br>
	<label>Tanggal Booking: </label>
	<br>	
	<input type="date" name="tanggal_booking">
	<br>
	<br>
	<label>Waktu Booking: </label>
	<br>	
	<input type="time" name="waktu_booking">
	<br>
	<label for="nama_lapangan">Nama Lapangan: </label>
	<br>	
	<select name="nama_lapangan">
		<option value="Vinyln">Vinyln</option>
		<option value="Sintetis">Sistetis</option>
	</select>
	<br>
	<br>
<input type="submit" value="kirim" name="tambah" style="background-color: blue">
<input type="reset" value="hapus" style="background-color: red">

</form>


</body>
</html>
