<html>
<head>
	<title>Tambah Kursus</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="30%" border="0">
			<tr> 
				<td>Judul Kursus</td>
				<td><input type="textarea" name="judul_kursus"></td>
			</tr>
			<tr> 
				<td>Deskripsi Kursus</td>
				<td><input type="textarea" name="deskripsi_kursus"></td>
			</tr>
			<tr> 
				<td>Durasi</td>
				<td><input type="textarea" name="durasi"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$judul_kursus = $_POST['judul_kursus'];
		$deskripsi_kursus = $_POST['deskripsi_kursus'];
		$durasi = $_POST['durasi'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO kursus(judul_kursus,deskripsi_kursus,durasi) VALUES('$judul_kursus','$deskripsi_kursus','$durasi')");
		
		// Show message when user added
		echo "Kursus berhasil ditambahkan . <a href='index.php'>Lihat Kursus</a>";
	}
	?>
</body>
</html>