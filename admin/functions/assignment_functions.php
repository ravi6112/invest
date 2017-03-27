<?php


function list_basic_assignment_detail(){
	include 'conf/config.php';
	include 'conf/opendb.php';


	echo' <div class="table-responsive">
              <table class="table">
				<thead>
				<tr>
				<th>Edit</th>
					<th>Assignment ID</th>
					<th>Level</th>
					<th>Subject</th>
					<th>Rate</th>
					<th>More details</th>
					<th>Delete</th>
				</tr>
				</thead>';

	$result=mysqli_query($conn, "SELECT * FROM assignment WHERE cancel_status='0' ");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
				
				<tr>
					<td><a href="assignment.php?job=edit_assignment&id=' . $row [id] . '"  ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>

					<td>'.$row['assignment_id'].'</td>
					<td> '.$row['level'].'</td>
					<td> '.$row['subject'].'</td>
					<td> '.$row['rate'].'</td>		
					<td><a href="assignment.php?job=more_detail&assignment_id=' . $row ['assignment_id'] . '" ><div class="btn btn-primary">More Details</div></a>
					</td>
			
			
					<td><a href="assignment.php?job=delete_assignment&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x btn-danger"></i></a></td>


					</tr>';


	}
	echo'</tbody></table>

				</div>';



	include 'conf/closedb.php';
}




function list_booking_assignment_detail(){
	include 'conf/config.php';
	include 'conf/opendb.php';


	echo' <div class="table-responsive">
              <table class="table">
				<thead>
				<tr>
					<th>user ID</th>
					<th>Assignment ID</th>
					<th>Email</th>
					<th>Booking Time</th>
			
					<th>Delete</th>
				</tr>
				</thead>';

	$result=mysqli_query($conn, "SELECT * FROM assignment_booking WHERE cancel_status='0' ");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '

				<tr>
					<td><a href="search_tutor.php?job=search&user_id=' . $row ['user_id'] . '" > '.$row['user_id'].' </a></td>
					<td> <a href="assignment.php?job=more_detail&assignment_id=' . $row ['assignment_id'] . '" > '.$row['assignment_id'].'</a></td> 
					<td> '.$row['email'].'</td>
					<td> '.$row['booking_time'].'</td>
						</td>
		
		
					<td><a href="assignment.php?job=delete_booking_assignment&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x btn-danger"></i></a></td>


					</tr>';


	}
	echo'</tbody></table>

				</div>';



	include 'conf/closedb.php';
}


function list_full_assignment_detail($assignment_id){
	
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM assignment WHERE cancel_status='0' AND assignment_id='$assignment_id' ");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{


		echo '

		<div class="col-lg-12" style="margin-top: 10px; margin-bottom: 50px;  padding-bottom: 30px; padding-top: 30px; background-color: #ecf0f1;">

			<div class="row">
				<h1 style="text-align: center;">'.$row[assignment_id].'</h1>
			</div>

			<div class="row">
				<div class="col-lg-12" style="margin-left:30px; ">
					<div class="row" style="margin-right:30px;>
						<div class="col-lg-12">

								<div class="row">
									<div class="col-lg-4">
										<h3><strong> Level : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['level'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong> Subject : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['subject'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong> Tutor Locations : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['location'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong> Student Gender : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['stu_gender'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong>Student Race : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['stu_race'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong>Rate : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['rate'].'</h3>
									</div>
								</div>


								<div class="row">
									<div class="col-lg-4">
										<h3><strong> Duration of Lesson(hrs) : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['duration'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong> No of Lesson (/week) : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['no_of_lession'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong> Address : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['address'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong>Tutor Gender : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['tut_gender'].'</h3>
									</div>
								</div>
		
								<div class="row">
									<div class="col-lg-4">
										<h3><strong>Teacher Type : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['teacher_type'].'</h3>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-4">
										<h3><strong>Remark : </strong></h3>
									</div>
									<div class="col-lg-8">
										<h3>'.$row['remarks'].'</h3>
									</div>
								</div>

								<div class="row" >
									<div class="col-lg-2"> </div>
									
								</div>

						</div>
					</div>
				</div>
			</div>
		</div>
              ';


	}

	include 'conf/closedb.php';
}


function delete_assignment($table,$id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	//mysqli_select_db($conn_for_changing_db, $dbname);
	$query="Delete From $table  WHERE id='$id'";
	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function get_assignment_info($id) {

	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM assignment WHERE id='$id'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}


function list_category() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM category WHERE cancel_status='0' ORDER BY category ASC " );
	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$category_names [$i] = $row ['category'];

		$i ++;
	}


	return $category_names;

}

function list_grade() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM grade WHERE cancel_status='0' ORDER BY grade ASC" );
	//$result=mysqli_query($conn, "SELECT * FROM grade WHERE category='$category'");
	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$grade_names [$i] = $row ['grade'];

		$i ++;
	}


	return $grade_names;

}

function list_subject() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT DISTINCT(subject) FROM subject WHERE cancel_status='0' ORDER BY subject ASC" );
	//$result=mysqli_query($conn, "SELECT * FROM grade WHERE category='$category'");
	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$subject_names [$i] = $row ['subject'];

		$i ++;
	}


	return $subject_names;

}

function list_location_detail() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM location WHERE cancel_status='0' ORDER BY location ASC " );

	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$location_names [$i] = $row ['location'];

		$i ++;
	}


	return $location_names;

}

function list_teacher_type() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM teacher_type WHERE cancel_status='0'" );

	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$teacher_type_names [$i] = $row ['teacher_type'];

		$i ++;
	}


	return $teacher_type_names;

}

function update_assignment($id, $category, $subject, $stu_gender, $stu_race, $rate, $no_of_lession, $duration, $address, $location, $tut_gender, $teacher_type, $remarks) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$query = "UPDATE assignment SET	
			level = '$category',
			subject = '$subject',
			stu_gender = '$stu_gender',
			stu_race= '$stu_race',
			rate = '$rate',
			no_of_lession = '$no_of_lession',
			duration = '$duration',
			address = '$address',
			location = '$location',
			tut_gender = '$tut_gender',
			teacher_type = '$teacher_type',
			remarks = '$remarks'
	
	WHERE id='$id'";

	mysqli_query ($conn, $query );
}
