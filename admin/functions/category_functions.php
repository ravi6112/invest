<?php
function save_category($category){
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "INSERT INTO category (id, category)
	VALUES ('', '$category')";
	mysqli_query($conn, $query) or die (mysqli_connect_error());


}


function list_category(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>

                           <th>Edit</th>
                           <th>category</th>
                           <th>Delete</th>

                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM category WHERE cancel_status='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		<td><a href="category.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>

		<td>'.$row[category].'</td>


		<td><a href="category.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}



function cancel_category($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE category SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);



}

function update_category($id, $category) {
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query = "UPDATE category SET
	category='$category'
	
	WHERE id='$id'";

	mysqli_query ($conn, $query );


}


function get_category_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM category WHERE id='$id'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}