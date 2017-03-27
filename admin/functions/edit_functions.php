<?php
function list_edit_tutor_detail($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	
	$result=mysqli_query($conn, "SELECT * FROM tutor WHERE user_id='$user_id' ");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		echo '
			<div class="row">
			<h3 style="text-align: center;"> Subjects, Rates and Levels </h3>
			<div class="col-lg-12">
			<div class="table-responsive" >
              <table class="table table-bordered table-striped">
								<thead>
								<tr>
									<th>Category</th>
								<th>Grade</th>
								<th>Subject</th>
								<th>Rate</th>
								
								</tr>
								</thead>';
			
			$result=mysqli_query($conn, "SELECT * FROM tutor_has_subjects WHERE user_id='$user_id' AND cancelstatus='0' ORDER BY id DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{

			echo '
		
					<tr>
				
					<td>' . $row[category] . '</td>					
					<td>' . $row[grade] . '</td>
					<td>' . $row[subject] . '</td>
					<td>S$ ' . $row[min_rate] . '-'.$row[max_rate].' per hour</td>
					<td><a href="edit_tutor.php?job=delete_subjects&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

					</tr>';	
		
		
		}
			echo'</tbody></table> </div></div></div>	
				
	
		<div class="row">
			<h3 style="text-align: center;"> Education </h3>
			<div class="col-lg-12">
			<div class="table-responsive" >
              <table class="table table-bordered table-striped">
								<thead>
								<tr>
								<th>Institution</th>
								<th>Qualification</th>
								<th>certificate</th>
								
								</tr>
								</thead>';
		$result=mysqli_query($conn, "SELECT * FROM qualification WHERE user_id='$user_id' ORDER BY id DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{

			echo '<div class="row">
		
					<tr>
				
					<td>' . $row[institution] . '</td>					
					<td>' . $row[qualification] . '</td>
					<td><a href="http://tiancaitutors.com/' . $row[certificate] . '" target="_blank">Click here to view certificate</a></td>	
					<td><a href="edit_tutor.php?job=delete_qualification&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

					
					
					</tr>';	
		
		
		}
			echo'</tbody></table> </div></div></div>
			

			';

	}

	include 'conf/closedb.php';
}

function list_location_for_edit($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	
	$result=mysqli_query($conn, "SELECT * FROM tutor_has_location WHERE user_id='$user_id' ");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
	
		echo '
			<div class="table-responsive" >
              <table class="table table-bordered table-striped">
				<thead>
				<tr>
				<th>location</th>
				<th>Delete</th>								
				</tr>
				</thead>';
			
		$result=mysqli_query($conn, "SELECT * FROM tutor_has_location WHERE user_id='$user_id' ORDER BY location DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{

			echo '
		
				<tr>
			
				<td>' . $row[location] . '</td>			
				<td><a href="edit_tutor.php?job=delete_location&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

				</tr>';	
		
		
		}
		echo'</table> </div>';
		

	}

	include 'conf/closedb.php';
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




function list_grade_by_category($category) {

	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM grade WHERE category='$category' AND cancel_status='0' ORDER BY grade ASC");
	$i=0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$list_of_grade[$i]=$row['grade'];
		$i++;
	}
	return $list_of_grade;

	include 'conf/closedb.php';
}



function list_subject_by_category($category) {

	include 'conf/config.php';
	include 'conf/opendb.php';


	$result=mysqli_query($conn, "SELECT * FROM subject WHERE category='$category' AND cancel_status='0' ORDER BY subject ASC");
	$i=0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$list_of_subject[$i]=$row['subject'];

		$i++;
	}
	return $list_of_subject;

	include 'conf/closedb.php';
}



function save_tutor_detail($user_id,$streetAddress, $postalCode, $nic, $birthday, $institution, $teacher_type, $year_of_exp,$description,$image) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$query = "INSERT INTO tutorDetail (user_id, streetAddress, postalCode, nic, birthday, institution, teacher_type, year_of_exp,description,image)
	VALUES ('$_SESSION[user_id]', '$streetAddress', '$postalCode', '$nic', '$birthday', '$institution', '$teacher_type', '$year_of_exp','$description','$image')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	include 'conf/closedb.php';
}


function update_tutor_basic($user_id, $streetAddress, $postalCode, $nic, $birthday, $institution, $teacher_type, $year_of_exp,$description) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$query = "UPDATE tutorDetail SET
	streetAddress='$streetAddress',
	postalCode='$postalCode',
	nic='$nic',
	birthday='$birthday',
	institution='$institution',
	teacher_type='$teacher_type',
	year_of_exp='$year_of_exp',
	description='$description',
	image='$image'
	
	WHERE user_id='$user_id'";

	mysqli_query ($conn, $query );


}

function update_tutor($id, $title, $first_name, $last_name, $email, $contact_number) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$query = "UPDATE tutor SET
	title='$title',
	first_name='$first_name',
	last_name='$last_name',
	email='$email',
	contact_number='$contact_number'	
	WHERE id='$id'";
	
	mysqli_query ($conn, $query );
}

function update_profile($user_id, $profile) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$query = "UPDATE tutorDetail SET
	image='$profile'	
	WHERE user_id='$user_id'";
	
	mysqli_query ($conn, $query );
}

function add_all_location($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM location" );

	$i = 0;
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$location= $row ['location'];
	
		$query = "INSERT INTO tutor_has_location(user_id, location)
		VALUES ('$user_id', '$location')";
		mysqli_query($conn, $query) or die(mysqli_error($conn));
		
		$i ++;
	}
	include 'conf/closedb.php';
}

function get_location_text(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result = mysqli_query ( $conn, "SELECT * FROM location" );
	$location_text="";
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		$location= $row ['location'];
		$location_text=$location.', '.$location_text;
	}
	
	return $location_text;
	include 'conf/closedb.php';
}

function add_tutor_has_location($user_id, $location){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$query = "INSERT INTO tutor_has_location(user_id, location)
	VALUES ('$user_id', '$location')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	include 'conf/closedb.php';
}

function save_location($user_id, $location_text){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$query = "UPDATE tutor SET
	location='$location_text'
	WHERE user_id='$user_id'";

	mysqli_query($conn, $query);


	include 'conf/closedb.php';
}

function cancel_tutor_details($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE tutorDetail SET
	cancelstatus='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);



}

function cancel_qualification($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "DELETE FROM qualification WHERE id='$id'";
	mysqli_query($conn, $query);



}

function cancel_subjects($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "DELETE FROM tutor_has_subjects WHERE id='$id'";
	mysqli_query($conn, $query);
}

function cancel_location($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "DELETE FROM tutor_has_location WHERE id='$id'";
	mysqli_query($conn, $query);
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



function save_tutor_qualification($user_id, $institution, $qualification, $certificate) {
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query = "INSERT INTO qualification (user_id, institution, qualification,certificate)
	VALUES ('$user_id', '$institution', '$qualification','$certificate')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	include 'conf/closedb.php';
}

function save_tutor_fees($user_id, $category, $grade_to_save, $subject_to_save, $min_rate, $max_rate) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$query = "INSERT INTO tutor_has_subjects (user_id, category, grade, subject, min_rate, max_rate)
	VALUES ('$user_id', '$category', '$grade_to_save', '$subject_to_save', '$min_rate', '$max_rate')";
	
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	include 'conf/closedb.php';
}


function update_rate($user_id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db ($conn, $dbname);
	$min=get_tutor_min_charge($user_id);
	$max=get_tutor_max_charge($user_id);
	
		
	$query = "UPDATE tutor SET
	approve='1',
	min_charge='$min',
	max_charge='$max'
	WHERE user_id='$user_id'";
	mysqli_query ($conn, $query );

	include 'conf/closedb.php';
}


function search_field($user_id, $search_field){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM tutor WHERE user_id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$search_field_old=$row['search_field'];
		$search_field_new=$search_field.', '.$search_field_old;

		$query = "UPDATE tutor SET
		search_field='$search_field_new'
		WHERE user_id='$user_id'";

		mysqli_query($conn, $query);
	}



	include 'conf/closedb.php';
}



function get_edit_tutor_detail_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	
	$result = mysqli_query ( $conn, "SELECT * FROM tutorDetail WHERE user_id='$id'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}

function get_tutor_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$result = mysqli_query ( $conn, "SELECT * FROM tutor WHERE id='$id'" );
	while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
		return $row;
	}

}

function update_search_field($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';


	$result=mysqli_query($conn, "SELECT * FROM tutorDetail WHERE user_id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$search_field_tutor_details=$row['location_text'].', '.$row['streetAddress'].', '.$row['postalCode'].', '.$row['nic'].', '.$row['birthday'].', '.$row['institution'].', '.$row['teacher_type'].', '.$row['year_of_exp'].','.$row['description'].', '.$teacher_type ;
	}

	$search_field_qualification_new="";
	$result=mysqli_query($conn, "SELECT * FROM qualification WHERE user_id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		$search_field_qualification=$row['institution'].', '.$row['qualification'];
		$search_field_qualification_new=$search_field_qualification.', '.$search_field_qualification_new;
	}
	
	$search_field_subject_new="";
	$result=mysqli_query($conn, "SELECT * FROM tutor_has_subjects WHERE user_id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		$search_field_subject=$row['category'].', '.$row['grade'].', '.$row['subject'];
		$search_field_subject_new=$search_field_subject.', '.$search_field_subject_new;
	}

	$search_field=$search_field_subject_new.', '.$search_field_qualification_new.', '.$search_field_tutor_details;

	
	$query = "UPDATE tutor SET
		search_field='$search_field'
		WHERE user_id='$user_id'";

		mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}