<?php
function save_location($location){
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "INSERT INTO location (id, location)
	VALUES ('', '$location')";
	mysqli_query($conn, $query) or die (mysqli_connect_error());


}


function list_location(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>

                           <th>Edit</th>
                           <th>Location</th>
                           <th>Delete</th>

                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM location WHERE cancel_status='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		<td><a href="location.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>

		<td>'.$row[location].'</td>


		<td><a href="location.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}



function cancel_location($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE location SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);



}

function update_location($id, $location) {
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query = "UPDATE location SET
	location='$location'
	
	WHERE id='$id'";

	mysqli_query ($conn, $query );


}


function get_location_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM location WHERE id='$id'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}