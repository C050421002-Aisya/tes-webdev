<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kursus ORDER BY id DESC");

?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Tambah Kursus Baru</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Judul Kursus</th> <th>Deskripsi Kursus</th> <th>Durasi</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['judul_kursus']."</td>";
        echo "<td>".$user_data['deskripsi_kursus']."</td>";
        echo "<td>".$user_data['durasi']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }

    $result = mysqli_query($mysqli, "SELECT * FROM materi ORDER BY id DESC");
    ?>
    </table>

    <a href="add1.php">Tambah Materi Baru</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Judul Materi</th> <th>Deskripsi Materi</th> <th>Link Materi</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['judul_materi']."</td>";
        echo "<td>".$user_data['deskripsi_materi']."</td>";
        echo "<td>".$user_data['link_materi']."</td>";    
        echo "<td><a href='edit2.php?id=$user_data[id]'>Edit</a> | <a href='delete2.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>