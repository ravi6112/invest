<?php
function list_tutor_detail($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	
	$result=mysqli_query($conn, "SELECT * FROM tutor WHERE cancelstatus='0' AND user_id='$user_id' ");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		$tutordetail_info=get_tutordetail_info_by_user_id($row['user_id']);
		$location=get_tutor_has_location_info_by_user_id($row['user_id']);
		//$subject=get_tutor_has_subjects_info_by_user_id($row['user_id']);
		$time_table_info=get_tutor_time_table_info_by_user_id($row['user_id']);
		$qualification_info=get_qualification_info_by_user_id($row['user_id']);
		
	
		echo '
		
		<div class="col-lg-12" style="margin-top: 10px; margin-bottom: 50px;  padding-bottom: 30px; padding-top: 30px; background-color: #ecf0f1;">
			<div class="col-lg-3" >
			<div class="row">
			
			<div class="col-lg-11" >
					 <img src="http://www.tiancaitutors.com/'.$tutordetail_info['image'].'" width=100% height=100% style="border: solid 5px #34495e; border-bottom: solid 50px #34495e; margin-left: 5px;"/> 
			
			</div></div>
			<div class="row">
			<div class="col-lg-11" >';
			if ($row [approve] == '0'){
					echo'<a href="search_tutor.php?job=approve&id='.$row[id].'" )"> <div class="btn btn-lg btn-block" style="color: white; background-color: #26A65B; margin-top: 25px;"> Approve </div></a>';
					}
					else{
						echo'<a href="search_tutor.php?job=reject&id='.$row[id].'" )"> <div class="btn btn-lg btn-block" style="color: white; background-color: #96281B; margin-top: 25px;"> Reject </div></a>';
					}
			echo'		
			</div>
			</div>
			</div>
			
			
			
			
			<div class="col-lg-8" style="margin-left:30px;">
			<div class="row"><div class="col-lg-6">
			<div class="row">
			<h1>'.$row[title].' '.$row[first_name].' '.$row[last_name].'</h1>
			</div>
			
			<div class="row">
			<h4>Address : '.$tutordetail_info['streetAddress'].' '.$tutordetail_info['postalCode'].'</h4>
			<h4>Telephone : '.$row[contact_number].'</h4>
			<h4>Email : '.$row[email].'</h4>
			</div>
			
			<div class="row">
			<h4>'.$tutordetail_info['institution'].'</h4>
			</div>
			
			<div class="row">
			<h4>'.$tutordetail_info['type'].'</h4>
			</div>
			
			<div class="row">
			<h4><b>Teaching Locations </b></h4><h5>'.$location.'</h5>
			</div>
			
			</div>
			</div>
			
			 <div class="row" >
						<h3> Information </h3>
						<div class="col-lg-12">'.$tutordetail_info['description'].'</div>
			</div>
		 
			<div class="row">
			<h3 style="text-align: center;"> Subjects, Rates and Levels taught </h3>
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
					<td>' . $row[subject] . '</td>';
					if($row[max_rate]==0){
						echo'<td>S$ ' . $row[min_rate] .' per hour</td>';
					}else{
						echo'<td>S$ ' . $row[min_rate] . '-'.$row[max_rate].' per hour</td>';
					}
					echo'</tr>';	
		
		
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
								<th>Certificate</th>
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
					</tr>';	
		
		
		}
			echo'</tbody></table> </div></div></div>
			
			
			
			<div class="row">
			<h3 style="text-align: center;"> Tutor Has Booking </h3>
			<div class="col-lg-12">
			<div class="table-responsive" >
              <table class="table table-bordered table-striped">
								<thead>
								<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Contect No</th>
								
								
								
								</tr>
								</thead>';
			
			$result=mysqli_query($conn, "SELECT * FROM booking WHERE user_id='$user_id' ORDER BY id DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$parent_info=get_parent_info_by_email($row['email']);

			echo '<div class="row">
		
					<tr>
					<td>' . $parent_info[title] . ' ' . $parent_info[first_name] . '</td>					
					<td>' . $row[email] . '</td>
					<td> ' . $parent_info[contact_number] . '</td>					
						
					
					
					</tr>';	
		
		
		}
			echo'</tbody></table> </div></div></div>
		
		</div></div>

			</div>';

	}

	include 'conf/closedb.php';
}


function list_basic_tutor_detail(){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	
	echo' <div class="table-responsive">
              <table class="table">
                    <thead>
                        <tr>
                            <th>Edit</th>
                            <th>Seeker Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>More Detail</th>
                            <th>Delete</th>
                        </tr>
                    </thead>';
	
	$result=mysqli_query($conn, "SELECT * FROM user_detail");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		//$tutordetail_info=get_tutordetail_info_by_user_id($row['user_id']);
		//$location=get_tutor_has_location_info_by_user_id($row['user_id']);
		//$subject_info=get_tutor_has_subjects_info_by_user_id($row['user_id']);
		//$time_table_info=get_tutor_time_table_info_by_user_id($row['user_id']);
		//$qualification_info=get_qualification_info_by_user_id($row['user_id']);
		
		echo '
							
				<tr>
					<td><a href="edit_tutor.php?job=edit&id=' . $row [id] . '"  ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
				
					<td>'.$row[full_name].'</td>
					<td> '.$row[company].'</td>					
					<td>'.$row[mobile].'</td>
					<td><a href="search_tutor.php?job=search&user_id=' . $row ['user_id'] . '" ><div class="btn btn-primary">More Details</div></a>
					</td>
					
					
					<td><a href="search_tutor.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x btn-danger"></i></a></td>

		
					</tr>';	
		
		
		}
			echo'</tbody></table> 
		
				</div>';

	

	include 'conf/closedb.php';
}


function get_tutordetail_info_by_user_id($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM tutorDetail WHERE user_id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}


function get_tutor_has_location_info_by_user_id($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT location FROM tutor_has_location WHERE user_id='$user_id'");
	$i=0;
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		if($i==0){
			$location=$row['location'];
		}
		else{
			$location=$location.', '.$row['location'];
		}
		$i++;
	}
	return $location;
}


function get_tutor_min_charge($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';
	$result=mysqli_query($conn, "SELECT MIN(min_rate) FROM tutor_has_subjects WHERE user_id='$user_id' AND cancelstatus='0'");
	$i=0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row['MIN(min_rate)'];
	}
	
}


function get_tutor_max_charge($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$result=mysqli_query($conn, "SELECT MAX(max_rate) FROM tutor_has_subjects WHERE user_id='$user_id' AND cancelstatus='0'");
	$i=0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		return $row['MAX(max_rate)'];
	}
	
}


function get_tutor_time_table_info_by_user_id($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM tutor_time_table WHERE user_id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}

function get_qualification_info_by_user_id($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM qualification WHERE user_id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}


function cancel($table,$id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	//mysqli_select_db($conn_for_changing_db, $dbname);
	$query="DELETE FROM $table WHERE id='$id'";
	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function cancel_related_details($user_id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	//mysqli_select_db($conn_for_changing_db, $dbname);
	$query="DELETE FROM tutorDetail WHERE user_id='$user_id'";
	mysqli_query($conn, $query);
	
	$query="DELETE FROM qualification WHERE user_id='$user_id'";
	mysqli_query($conn, $query);
	
	$query="DELETE FROM tutor_has_subjects WHERE user_id='$user_id'";
	mysqli_query($conn, $query);
	
	$query="DELETE FROM tutor_has_location WHERE user_id='$user_id'";
	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function save_booking(){
	include 'conf/config.php';
	include 'conf/opendb.php';


	$query =  "INSERT INTO booking (id, user_id, email)
	VALUES ('', '$_SESSION[user_id]', '$_SESSION[email]')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	
	

	include 'conf/closedb.php';
}


function list_parent_detail(){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	
	echo' <div class="table-responsive">
              <table class="table">
				<thead>
				<tr>
					<th>Parent Name</th>
					<th>Email</th>
					<th>Contact Number</th>
				</tr>
				</thead>';
	
	$result=mysqli_query($conn, "SELECT * FROM parent WHERE cancel_status='0' ");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
							
				<tr>
									
					<td>'.$row[title].' '.$row[first_name].'</td>
					<td> '.$row[email].'</td>					
					<td>'.$row[contact_number].'</td>
					<td><a href="search_parent.php?job=search&email=' . $row ['email'] . '" ><div class="btn btn-primary">More Details</div></a>
					
					
					
					</tr>';	
		
		
		}
			echo'</tbody></table> 
		
				</div>';

	

	include 'conf/closedb.php';
}


function view_parent_detail($email){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	
	$result=mysqli_query($conn, "SELECT * FROM parent WHERE cancel_status='0' AND email='$email' ");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	
		echo '
		
		<div class="col-lg-12" style="margin-top: 10px; margin-bottom: 50px;  padding-bottom: 30px; padding-top: 30px; background-color: #ecf0f1;">
			<div class="row">
					
				<div class="col-lg-6" style="margin-left:30px;">
					
					<div class="row">
					<h1>'.$row[title].' '.$row[first_name].' </h1>
					</div>
					
					<div class="row">
					<h4>'.$row[email].'</h4>
					</div>
					
					<div class="row">
					<h4>'.$row[contact_number].'</h4>
					</div>
						
				</div>
				<div class="table-responsive" >
              <table class="table table-bordered table-striped">
								<thead>
								<tr>
								<th>Tutor Id</th>
								<th>Tutor Name</th>
								</tr>
								</thead>';
			
			$result=mysqli_query($conn, "SELECT * FROM booking WHERE email='$email' ORDER BY id DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$tutor_info=get_tutor_info_by_user_id($row['user_id']);
			
			echo '<div class="row">
		
					<tr>
					<td><a href="search_tutor.php?job=search&user_id=' . $row ['user_id'] . '"  target="_blank"> '.$tutor_info['user_id'].'</a></td>
					<td> '.$tutor_info['title'].' '.$tutor_info['first_name'].' '.$tutor_info['last_name'].'</td>								
								
					
					
					</tr>';	
		
		
		}
			echo'</tbody></table> </div>
			</div>
		</div>';
			
	

	include 'conf/closedb.php';
}
}


function get_tutor_info_by_user_id($user_id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM tutor WHERE user_id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}


function get_parent_info_by_email($email){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM parent WHERE email='$email'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}


function list_read_message($from_date, $to_date){
	include 'conf/config.php';
	include 'conf/opendb.php';

	
	
	$new_to_date = date("Y-m-d", strtotime($to_date));
	$new_from_date = date("Y-m-d", strtotime($from_date));

	
	if ($new_to_date && $new_from_date) {
		$date_check = "AND created_time BETWEEN '$new_from_date' AND '$new_to_date'";
	} elseif ($new_from_date) {
		$date_check = "AND created_time>='$new_from_date'";
		$limit = "";
	} elseif ($new_to_date) {
		$date_check = "AND created_time<='$new_to_date'";
		$limit = "";
	} else {
		$date_check = "";
		$limit = "LIMIT 50";
	}
	
	
	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>

                           <th>name</th>
                           <th>email</th>
                           <th>subject</th>
						   <th>message</th>
                           <th>Created Time</th>

                       </tr>
                  </thead>
                  <tbody>';



	$result=mysqli_query($conn, "SELECT * FROM contact_us_messages WHERE status='1' $date_check" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		
					<td>'.$row[name].'</td>
					<td>'.$row[email].'</td>
					<td>'.$row[subject].'</td>
					<td>'.$row[message].'</td>
					<td>'.$row[created_time].'</td>


		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}



function list_unread_message(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>

                           <th>name</th>
                           <th>email</th>
                           <th>subject</th>
						   <th>message</th>
                           <th>Created Time</th>

                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM contact_us_messages WHERE status='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		
					<td>'.$row[name].'</td>
					<td>'.$row[email].'</td>
					<td>'.$row[subject].'</td>
					<td>'.$row[message].'</td>
					<td>'.$row[created_time].'</td>
					
		<td><a href="message.php?job=change_message&id='.$row[id].'" ><i class="fa fa-check-circle"></i></a></td>



		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}


function change_message_type($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE contact_us_messages SET
	status='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);



}


function update_approve($id, $approve) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	
	
	mysqli_select_db ($conn, $dbname);
	$min=get_tutor_min_charge($_SESSION ['user_id']);
	$max=get_tutor_max_charge($_SESSION ['user_id']);
	
		
	$query = "UPDATE tutor SET
	approve='1',
	min_charge='$min',
	max_charge='$max'
	WHERE id='$id'";

	mysqli_query ($conn, $query );

	include 'conf/closedb.php';
}


function update_reject($id, $approve) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db ($conn, $dbname );
	$query = "UPDATE tutor SET
	approve='0'
	WHERE id='$id'";

	mysqli_query ($conn, $query );

	include 'conf/closedb.php';
}




