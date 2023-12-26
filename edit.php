<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$judul_kursus    =$_POST['judul_kursus'];
	$deskripsi_kursus=$_POST['deskripsi_kursus'];
	$durasi          =$_POST['durasi'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE kursus SET judul_kursus='$judul_kursus',deskripsi_kursus='$deskripsi_kursus',durasi='$durasi' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kursus WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$judul_kursus       = $user_data['judul_kursus'];
	$deskripsi_kursus   = $user_data['deskripsi_kursus'];
	$durasi             = $user_data['durasi'];
}
?>
<html>
<head>	
	<title>Edit Data Kursus</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_kursus" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Judul Kursus</td>
				<td><input type="text" name="judul_kursus" value=<?php echo $judul_kursus;?>></td>
			</tr>
			<tr> 
				<td>Deskripsi Kursus</td>
				<td><input type="text" name="deskripsi_kursus" value=<?php echo $deskripsi_kursus;?>></td>
			</tr>
			<tr> 
				<td>Durasi</td>
				<td><input type="text" name="durasi" value=<?php echo $durasi;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>