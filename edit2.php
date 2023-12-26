<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$judul_materi    =$_POST['judul_materi'];
	$deskripsi_materi=$_POST['deskripsi_materi'];
	$link_materi     =$_POST['link_materi'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE materi SET judul_materi='$judul_materi',deskripsi_materi='$deskripsi_materi',link_materi='$link_materi' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM materi WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$judul_materi       = $user_data['judul_materi'];
	$deskripsi_materi   = $user_data['deskripsi_materi'];
	$link_materi        = $user_data['link_materi'];
}
?>
<html>
<head>	
	<title>Edit Materi</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_materi" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Judul Materi</td>
				<td><input type="text" name="judul_materi" value=<?php echo $judul_materi;?>></td>
			</tr>
			<tr> 
				<td>Deskripsi Materi</td>
				<td><input type="text" name="deskripsi_materi" value=<?php echo $deskripsi_materi;?>></td>
			</tr>
			<tr> 
				<td>Link Materi</td>
				<td><input type="text" name="link_materi" value=<?php echo $link_materi;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>