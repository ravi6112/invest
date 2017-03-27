<?php
include '../conf/config.php';
include '../conf/opendb.php';
//Include The Database Connection File 

	$choice = $_GET['choice'];
	$query = "SELECT * FROM grade WHERE cancel_status='0' AND category LIKE '$choice%'";
	echo $query;
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($result)) {
   		echo "<option>" . $row{'grade'} . "</option>";
	}
?>
