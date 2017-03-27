<?php
function save_teacher_type($teacher_type){
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "INSERT INTO teacher_type (id, teacher_type)
	VALUES ('', '$teacher_type')";
	mysqli_query($conn, $query) or die (mysqli_connect_error());


}


function list_teacher_type(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>

                           <th>Edit</th>
                           <th>Tutor type</th>
                           <th>Delete</th>

                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM teacher_type WHERE cancel_status='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		<td><a href="teacher_type.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>

		<td>'.$row[teacher_type].'</td>


		<td><a href="teacher_type.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}



function cancel_teacher_type($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE teacher_type SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);



}

function update_teacher_type($id, $teacher_type) {
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query = "UPDATE teacher_type SET
	teacher_type='$teacher_type'
	
	WHERE id='$id'";

	mysqli_query ($conn, $query );


}


function get_teacher_type_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM teacher_type WHERE id='$id'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}