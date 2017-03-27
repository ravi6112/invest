<?php
function save_policy($policy){
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "INSERT INTO policy (id, policy)
	VALUES ('', '$policy')";
	mysqli_query($conn, $query) or die (mysqli_connect_error());


}


function list_policy(){
	include 'conf/config.php';
	include 'conf/opendb.php';



	$result=mysqli_query($conn, "SELECT * FROM policy " );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		
		<div class="row">'.$row[policy].'</div>';

		

	}


}





function update_policy($id, $policy) {
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query = "UPDATE policy SET
	policy='$policy'
	
	WHERE id='$id'";

	mysqli_query ($conn, $query );


}


function get_policy_info() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM policy LIMIT 1" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}