<?php

function add_to_temp_table($applicant_id, $user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO temp_employer_bought_cv (`id`, `employer`, `applicant_id`)
	VALUES ('', '$user_name', '$applicant_id')";
	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';


}

function check_empoyer_bought_cv($user_name, $applicant_id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM employer_bought_cv WHERE employer= '$user_name' AND applicant_id= '$applicant_id'"))){
		return 1;
	}
	else{
		return 0;
	}

	include 'conf/closedb.php';
}

function check_temp_empoyer_bought_cv($user_name, $applicant_id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM temp_employer_bought_cv WHERE employer= '$user_name' AND applicant_id= '$applicant_id'"))){
		return 1;
	}
	else{
		return 0;
	}

	include 'conf/closedb.php';
}

function list_applicants($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';


	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE employer='$user_name' AND applied='1' ", $conn);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		$i=1;
		if($i==1){


			echo '<div class="row" style="margin-top: 20px;">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover">
				<h4>Applications recieved for - '.$row[job_title].'</h4>
				<thead>
				<th>View Details</th>
				<th>Applicant Name</th>
				<th>Add to cart</th>
				</thead>
				<tbody>';
		}
		else{

		}
		$i++;
		$result1=mysqli_query($conn, "SELECT DISTINCT applicant_id FROM job_has_applications WHERE ref_no='$row[ref_no]'");
		while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC))
		{
			$applicant_id=$row1[applicant_id];
			$info=get_employee_info_by_id($row1[applicant_id]);

			if(check_empoyer_bought_cv($user_name, $applicant_id)==1){
			}
			elseif(check_temp_empoyer_bought_cv($user_name, $applicant_id)==1){
			}
			else{


				echo '<tr>
				<td>
				<a href="view_employee.php?job=view_profile&id='.$row1[applicant_id].'"  ><img src="img/view.png" alt="View" /></a>
				</td>
		
				<td>'.$info[full_name].'
				</td>
		
				<td><a href="pay_to_view.php?job=add_to_pay&id='.$row1[applicant_id].'"><div class="select_button">Buy</div></a></td>

				</tr>';
			}
		}
		echo '</tbody></table></div></div>';
	}

	$x=1;
		if($x==1){

			echo '<div class="row" style="margin-top: 20px;">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesJob">
				<h4>All Job Seekers</h4>
				<thead>
				<th>View Details</th>
				<th>Applicant Name</th>
				<th>Add to cart</th>
				</thead>
				<tbody>';
		}
		else{

		}
		$x++;
		$result2=mysqli_query($conn, "SELECT * FROM employee");
		while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
		{
			$applicant_id=$row2[id];
			$info=get_employee_info_by_id($applicant_id);

			if(check_empoyer_bought_cv($user_name, $applicant_id)==1){
			}
			elseif(check_temp_empoyer_bought_cv($user_name, $applicant_id)==1){
			}
			else{


				echo '<tr>
				<td>
				<a href="view_employee.php?job=view_profile&id='.$row2[id].'"  ><img src="img/view.png" alt="View" /></a>
				</td>
		
				<td>'.$info[full_name].'
				</td>
		
				<td><a href="pay_to_view.php?job=add_to_pay&id='.$row2[id].'"><div class="select_button">Buy</div></a></td>

				</tr>';
			}
		}
	echo '</tbody></table></div></div>';
		

}

function list_selected_applicants($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="row" style="margin-top: 20px;">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover">
	<thead>
	<th>Applicant Name</th>
	<th>Remove</th>
	</thead>
	<tbody>';


	$result=mysqli_query($conn, "SELECT * FROM temp_employer_bought_cv WHERE employer='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$applicant_id=$row1[applicant_id];
		$info=get_employee_info_by_id($row[applicant_id]);
			
		echo '<tr>
	
				<td>'.$info[full_name].'
				</td>
		
				<td><a href="pay_to_view.php?job=remove&id='.$row[applicant_id].'"><div class="select_button">Remove.</div></a></td>

				</tr>';
			
	}
	echo '</tbody></table>
<a href="pay_to_view.php?job=buy"><div class="buy_button">Checkout</div></a>';

	include 'conf/closedb.php';
}

function remove_from_temp_table($applicant_id, $user_name){

	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "DELETE FROM temp_employer_bought_cv WHERE employer='$user_name' AND applicant_id='$applicant_id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function list_pending_applicants($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="row" style="margin-top: 20px;">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover">
	<thead>
	<th>Applicant Name</th>
	</thead>
	<tbody>';


	$result=mysqli_query($conn, "SELECT * FROM employer_bought_cv WHERE employer='$user_name' AND paid='0'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$applicant_id=$row1[applicant_id];
		$info=get_employee_info_by_id($row[applicant_id]);
			
		echo '<tr>
	
				<td>'.$info[full_name].'
				</td>
			</tr>';
			
	}
	echo '</tbody></table></div></div>';

	include 'conf/closedb.php';
}

function request_to_buy($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT applicant_id FROM temp_employer_bought_cv WHERE employer='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$applicant_id=$row[applicant_id];
		 
		$query = "INSERT INTO request_cv (`id`, `employer`, `applicant_id`)
		VALUES ('', '$user_name', '$applicant_id')";
		mysqli_query($conn, $query) or die (mysqli_error());
	}

	include 'conf/closedb.php';
}

function add_as_pending($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT applicant_id FROM temp_employer_bought_cv WHERE employer='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$applicant_id=$row[applicant_id];
		 
		$query = "INSERT INTO employer_bought_cv (`id`, `employer`, `applicant_id`, `paid`)
		VALUES ('', '$user_name', '$applicant_id', '0')";
		mysqli_query($conn, $query) or die (mysqli_error());
	}

	include 'conf/closedb.php';
}


function delete_temp_table($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "DELETE FROM temp_employer_bought_cv WHERE employer='$user_name'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function payment_total($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT COUNT(*) as total FROM employer_bought_cv WHERE employer='$user_name' AND paid='0'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$total=$row[total];
		return $total;
	}
	include 'conf/closedb.php';
}