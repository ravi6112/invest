<?php
include '../conf/config.php';
include '../conf/opendb.php';
//Include The Database Connection File 

	$choice = $_GET['choice'];
	$query = "SELECT * FROM subject WHERE cancel_status='0' AND category LIKE '$choice%'";
	echo $query;
	$result = mysqli_query($conn, $query);
		echo "<option disabled selected>Select Subject</option>";
	while ($row = mysqli_fetch_array($result)) {
   		echo "<option>" . $row{'subject'} . "</option>";
	}
?>
