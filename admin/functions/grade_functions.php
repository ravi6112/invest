<?php
function save_grade($category, $grade){
	include 'conf/config.php';
	include 'conf/opendb.php';
    
	mysqli_select_db($conn, $dbname);
	$query = "INSERT INTO grade (id,category,grade)
	VALUES ('', '$category', '$grade')";
	mysqli_query($conn, $query) or die (mysqli_connect_error());


}


function save_subject($category, $subject){
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "INSERT INTO subject (id,category,subject)
	VALUES ('', '$category', '$subject')";
	mysqli_query($conn, $query) or die (mysqli_connect_error());


}

function list_grade(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>

                           <th>Edit</th>
							<th>Category</th>
                           <th>Grade</th>
                           <th>Delete</th>

                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM grade WHERE cancel_status='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		<td><a href="grade.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
		<td>'.$row[category].'</td>
		<td>'.$row[grade].'</td>


		<td><a href="grade.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}


function list_subject(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>

                           <th>Edit</th>
							<th>Category</th>
							<th>subject</th>
                           <th>Delete</th>
							
                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM subject WHERE cancel_status='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		<td><a href="subject.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
		<td>'.$row[category].'</td>
		<td>'.$row[subject].'</td>

		<td><a href="subject.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}


function cancel_grade($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE grade SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);



}

function update_grade($id,$category, $grade) {
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query = "UPDATE grade SET
	category='$category',
	grade='$grade'
	
	WHERE id='$id'";

	mysqli_query ($conn, $query );


}


function get_grade_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM grade WHERE id='$id'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}

function cancel_subject($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE subject SET
	cancel_status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);



}

function update_subject($id,$category, $grade, $subject) {
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query = "UPDATE subject SET
	category='$category',
	grade='$grade',
	subject='$subject'

	WHERE id='$id'";

	mysqli_query ($conn, $query );


}


function get_subject_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM subject WHERE id='$id'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}

function list_category() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM category WHERE cancel_status='0'" );
	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$category_names [$i] = $row ['category'];

		$i ++;
	}
	
	
	return $category_names;

}


function list_grade_by_category($category) {

	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM grade WHERE category='$category'");
	$i=0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$list_of_grade[$i]=$row['grade'];
		$i++;
	}
	return $list_of_grade;

	include 'conf/closedb.php';
}
