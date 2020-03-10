<?php
include 'buatkoneksi.php';

header('Content-Type: application/json');

$search = $_GET['search'];
$a = mysqli_query($conn,"SELECT * FROM `photo` WHERE `caption` LIKE '%$search%'");
if ($a) {
	$data = array();
	while ($row = mysqli_fetch_assoc($a)) {
	   
		array_push($data, $row);
	   
	}
	$b = json_encode($data);
	echo $b;
}else{
	echo "string";
}