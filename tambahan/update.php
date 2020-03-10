<?php
	include "buatkoneksi.php";
	$query = mysqli_query($conn, "UPDATE profile SET name = '".$_POST["name"]."' WHERE username = '".$_GET["username"]."'");
	if ($query) echo "Data berhasil diubah";
	else echo "Data gagal diubah";
	echo "<br /><br /><a href='viewprofile.php'>Lihat Data</a>";
?>