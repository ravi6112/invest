<?php

function list_tutor_count(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$i=0;
	$result=mysqli_query($conn, "SELECT * FROM tutor" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{


		$i++;

	}

	echo "<h3>$i</h3>";


}

function list_contact_tutor(){
	include 'conf/config.php';
	include 'conf/opendb.php';


	echo '<div class="table-responsive">
              <table class="table">
               <thead>
                       <tr>
                           <td colspan="2" class="danger">Tutor</td>
                            <td colspan="4" class="success">Parent</td>
                   
                       </tr>
                  </thead>
              
                  <thead>
                       <tr>
                           <th>User Id</th>
                            <th>Contact</th>
                            <th>Email</th>
                           <th>Name</th>
                           <th> Contact</th>
                           <th>Booking Time</th>
                                                    
                           

                       </tr>
                  </thead>
                  <tbody>';



	$result=mysqli_query($conn, "SELECT * FROM booking WHERE done='1' " );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
            $tutor_info=get_tutor_info_by_user_id($row['user_id']);
              $parent_info=get_parent_info_by_user_id($row['email']);

		echo '
		
						<td>'.$row[user_id].'</td>
                    <td>'.$tutor_info[contact_number].'</td>
					<td>'.$row[email].'</td>
                    <td>'.$parent_info[title].' '.$parent_info[first_name].'</td>
                    <td>'.$parent_info[contact_number].'</td>
                      <td>'.$row[booking_time].'</td>
					


		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}



function list_pending_contact_tutor(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
               <thead>
                       <tr>
                           <td colspan="2" class="danger">Tutor</td>
                            <td colspan="4" class="success">Parent</td>
                            <td colspan="1" class="warning">Done</td>
                       </tr>
                  </thead>
              
                  <thead>
                       <tr>
                           <th>User Id</th>
                            <th>Contact</th>
                            <th>Email</th>
                           <th>Name</th>
                           <th> Contact</th>
                           <th>Booking Time</th>
                            <th>Done</th>                           
                           

                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM booking WHERE done='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
            $tutor_info=get_tutor_info_by_user_id($row['user_id']);
             $parent_info=get_parent_info_by_user_id($row['email']);

		echo '
		
					<td>'.$row[user_id].'</td>
                    <td>'.$tutor_info[contact_number].'</td>
					<td>'.$row[email].'</td>
                    <td>'.$parent_info[title].' '.$parent_info[first_name].'</td>
                    <td>'.$parent_info[contact_number].'</td>
                      <td>'.$row[booking_time].'</td>
					
		<td><a href="booking_tutor.php?job=change_contact&id='.$row[id].'" ><div class="btn btn-primary">Done</div></a></td>

		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}



function list_pending_contact_tutor_basic(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
               
                  <thead>
                       <tr>
                           <th>User Id</th>
                            <th>Contact</th>
                      
                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM booking WHERE done='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
            $tutor_info=get_tutor_info_by_user_id($row['user_id']);
             $parent_info=get_parent_info_by_user_id($row['email']);

		echo '
		
					<td>'.$row[user_id].'</td>
                    <td>'.$tutor_info[contact_number].'</td>
					
			

		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}


function change_contact_type($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	mysqli_select_db($conn, $dbname);
	$query = "UPDATE booking SET
	done='1'
	WHERE id='$id'";
	mysqli_query($conn, $query);



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

function get_parent_info_by_user_id($email){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM parent WHERE email='$email'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}



function list_unread_basic_message(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="table-responsive">
              <table class="table">
                  <thead>
                       <tr>

                           <th>name</th>
                           <th>subject</th>
						  

                       </tr>
                  </thead>
                  <tbody>';



	$i=1;
	$result=mysqli_query($conn, "SELECT * FROM contact_us_messages WHERE status='0'" );
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		
					<td>'.$row[name].'</td>
					<td>'.$row[subject].'</td>
					
			

		</tr>';

		$i++;

	}

	echo '</tbody>
          </table>
          </div>';


}