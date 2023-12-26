<html>
<head>
	<title>Tambah Materi</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add1.php" method="post" name="form1">
		<table width="30%" border="0">
			<tr> 
				<td>Judul Materi</td>
				<td><input type="text" name="judul_materi"></td>
			</tr>
			<tr> 
				<td>Deskripsi Materi</td>
				<td><input type="text" name="deskripsi_materi"></td>
			</tr>
			<tr> 
				<td>Link Materi</td>
				<td><input type="text" name="link_materi"></td>
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
		$judul_materi     = $_POST['judul_materi'];
		$deskripsi_materi = $_POST['deskripsi_materi'];
		$link_materi      = $_POST['link_materi'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO materi(judul_materi,deskripsi_materi,link_materi) VALUES('$judul_materi','$deskripsi_materi','$link_materi')");
		
		// Show message when user added
		echo "Materi berhasil ditambahkan . <a href='index.php'>Lihat Materi</a>";
	}
	?>
</body>
</html>