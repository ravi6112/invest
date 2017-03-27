<?php

function save_activation_request($email, $ref_no){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO activation_requests (`id`, `email`, `ref_no`)
	VALUES ('', '$email', '$ref_no')";
	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';


}

function save_admin($user_name, $password, $full_name, $email, $telephone, $address, $code) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO admins (id, user_name, password, full_name, email, telephone, address, code)
	VALUES ('', '$user_name', '$password', '$full_name', '$email', '$telephone', '$address', '$code')";

	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function list_admins() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesCapable">
	<thead>
	<th>Edit</th>
	<th>#</th>
	<th>User Name</th>
	<th>Full Name</th>
	<th>Email</th>
	<th>Telephone</th>
	<th>Delete</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT * FROM admins ORDER BY id DESC");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
		<tr>
		<td>
		<a href="add_admin.php?job=edit&id='.$row[id].'"  ><img src="img/edit.png" alt="Edit" /></a>
		</td>

		<td>
		'.$row[id].'
		</td>

		<td>
		 '.$row[user_name].'
		</td>

		<td>
		 '.$row[full_name].'
		</td>
		
		<td>
		 '.$row[email].'
		</td>
		
		<td>
		 '.$row[telephone].'
		</td>
	
		<td>
		<a href="add_admin.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><img src="img/close.png" alt="Delete" /></a>
		</td>
	
		</tr>
		';
	}
	echo '</tbody>
	</table>
	</div></div>';
	include 'conf/closedb.php';
}

function update_admin($id, $user_name, $password, $full_name, $email, $telephone, $address, $code) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE admins SET
	user_name='$user_name',
	password='$password',
	full_name='$full_name',
	email='$email',
	telephone='$telephone',
	address='$address',
	code='$code'  
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function delete_admin($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "DELETE FROM admins WHERE id='$id'";
	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function check_admin_login($login, $passcode) {
	$passcode=md5($passcode);
	include 'conf/config.php';
	include 'conf/opendb.php';

	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM admins WHERE user_name = '$login' AND password= '$passcode'"))){
		return 1;
	}
	else{
		return 0;
	}

	$user_info=get_admin_info($user_name);
	$_SESSION['user_id']=$user_info['id'];

	include 'conf/closedb.php';
}


function get_admin_info($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM admins WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}

function get_admin_info_id($user_id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM admins WHERE id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}

function list_employers(){
	include 'conf/config.php';
	include 'conf/opendb.php';
	


	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesCapable">
	<thead>
	<th>User Name</th>
	<th>Company Name</th>
	<th>Email</th>
	<th>Telephone</th>
	<th>Contact Person</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT * FROM employer WHERE active='1' ORDER BY id  DESC");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
		<tr>

		<td>
		 '.$row[user_name].'
		</td>

		<td>
		 '.$row[company_name].'
		</td>
		
		<td>
		 '.$row[email].'
		</td>
		
		<td>
		 '.$row[telephone_no].'
		</td>
	
		<td>
		'.$row[contact_person].'
		</td>
	
		</tr>
		';
	}
	echo"</tbody>
	</table>
	</div></div>";
	
	include 'conf/closedb.php';
}

function list_employees(){
	include 'conf/config.php';
	include 'conf/opendb.php';


	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesCapable">
	<thead>
	<th>View CV</th>
	<th>User Name</th>
	<th>Full Name</th>
	<th>Email</th>
	<th>Telephone</th>
	<th>Address</th>
	<th>Current Rating</th>
	<th>Update Rating</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT * FROM employee WHERE active='1' ORDER BY id  DESC");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
		<tr>
		<td>
		<a href="view_employee.php?job=view_profile_full_as_admin&id='.$row[id].'" target="_blank" ><img src="img/view.png" alt="View" /></a>
		</td>
		<td>
		 '.$row[user_name].'
		</td>

		<td>
		 '.$row[full_name].'
		</td>

		<td>
		 '.$row[email].'
		</td>

		<td>
		 '.$row[telephone_no_1].'
		</td>

		<td>
		'.$row[address].'
		</td>
		<td>
		'.$row[rank].'
		</td>
			<form name="rank" action="all_employees.php?job=rank&id='.$row[id].'" method="POST">
		<td>
		 <input name="rank" value="'.$row[rank].'" size="5" type="text" />

		<input class="btn btn-danger" name="ok" value="Rank" type="submit" />
		</td>
		</form>
		</tr>
		';
	}
	echo"</tbody>
	</table>
	</div></div>";
	
	include 'conf/closedb.php';
}

function list_non_activated_employers(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesCapable">
	<thead>
	<th>User Name</th>
	<th>Company Name</th>
	<th>Email</th>
	<th>Telephone</th>
	<th>Contact Person</th>
	<th>Activate</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT * FROM employer WHERE active='0' ORDER BY id DESC");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
		<tr>

		<td>
		 '.$row[user_name].'
		</td>

		<td>
		 '.$row[company_name].'
		</td>
		
		<td>
		 '.$row[email].'
		</td>
		
		<td>
		 '.$row[telephone_no].'
		</td>
	
		<td>
		'.$row[contact_person].'
		</td>
		
		<td>
		<a href="activate_page.php?job=activate_employer&id='.$row[id].'"  ><img src="img/key.png" alt="View" /></a>
		</td>
	
		</tr>
		';
	}
	echo"</tbody>
	</table>
	</div></div>";
	
	include 'conf/closedb.php';
}

function get_employee_info_by_id($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM employee WHERE id='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
		
	}
	include 'conf/closedb.php';
}

function list_non_paid_cvs(){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	echo '<table class="job_table" border="1" cellpadding="5">
	<thead>
	<th width="100">Employer</th>
	<th width="100">CV ID</th>
	<th width="50">Sell</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT * FROM employer_bought_cv WHERE paid='0' ORDER BY employer DESC");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		$info=get_employee_info_by_id($row[applicant_id]);
		echo '
		<tr>

		<td>
		 '.$row[employer].'
		</td>

		<td>
		 '.$info[full_name].'
		</td>
		

		
		<td>
		<a href="sell_cvs.php?job=sell&id='.$row[id].'"  >Sell</a>
		</td>
	
		</tr>
		';
	}
	echo '</tbody></table>';
	
	include 'conf/closedb.php';
}

function activate_employer($id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE employer SET
	active='1'  
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function sell($id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE employer_bought_cv SET
	paid='1'  
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function update_rank($rank, $id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE employee SET
	rank='$rank'
	WHERE id='$id'";
	
	mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}

function list_non_activated_jobs(){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesCapable">
	<thead>
	<th>Job Title</th>
	<th>Company Name</th>
	<th>Contact Email</th>
	<th>activate</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='0' AND cancel_status='0' ORDER BY id DESC");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
		<tr>

		<td>
		 '.$row[job_title].'
		</td>

		<td>
		 '.$row[company_name].'
		</td>
		
		<td>
		 '.$row[contact_mail_id].'
		</td>
		
		<td>
		<a href="activate_page.php?job=activate_job&id='.$row[id].'"  ><img src="img/key.png" alt="View" /></a>
		</td>
	
		</tr>
		';
	}
	echo"</tbody>
	</table>
	</div></div>";
	
	include 'conf/closedb.php';
}

function list_jobs(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesCapable">
	<thead>
	<th>Job Title</th>
	<th>Job Catagory</th>
	<th>Company Name</th>
	<th>Contact Email</th>
	<th>Delete</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT *FROM jobs WHERE cancel_status='0' ORDER BY id DESC");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
		<tr>

		<td align="left">
		 '.$row[job_title].'
		</td>

		<td align="left">
		 '.$row[catagory].'
		</td>
		
		<td align="left">
		 '.$row[company_name].'
		</td>
		
		<td align="left">
		 '.$row[contact_mail_id].'
		</td>
		
		<td>
		<a href="activate_page.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this job?\')"><img src="img/close.png" alt="Delete" /></a>
		</td>
	
		</tr>
		';
	}

	echo"</tbody>
	</table>
	</div></div>";
		
	
	include 'conf/closedb.php';
}

function activate_job($id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE jobs SET
	active='1'  
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function activate_employer_home_page($id){
	
	include 'conf/config.php';
	include 'conf/opendb.php';

	$info=get_employer_info_id($id);
	$user_name=$info['user_name'];
	
	 
	$query = "INSERT INTO employer_home_page (id, user_name)
	VALUES ('', '$user_name')";

	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function delete_job($id) {

	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE jobs SET
	cancel_status='1'
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}