<?php
function save_terms($terms){
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "INSERT INTO terms (id, terms)
	VALUES ('', '$terms')";
	mysqli_query($conn, $query) or die (mysqli_connect_error());


}


function list_terms(){
	include 'conf/config.php';
	include 'conf/opendb.php';



	$result=mysqli_query($conn, "SELECT * FROM terms " );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		
		<div class="row">'.$row[terms].'</div>';

		

	}


}





function update_terms($id, $terms) {
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query = "UPDATE terms SET
	terms='$terms'
	
	WHERE id='$id'";

	mysqli_query ($conn, $query );


}


function get_terms_info() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM terms LIMIT 1" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}