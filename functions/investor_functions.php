<?php
function check_investor_login($login, $password) {

	$password=md5($password);
	include 'conf/config.php';
	include 'conf/opendb.php';

	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM investor WHERE user_name = '$login' AND password= '$password' AND active='1'"))){
		return 1;
	}
	else{
		return 0;
	}

	$investor_info=get_investor_info($user_name);
	$_SESSION['user_id']=$investor_info['id'];

	include 'conf/closedb.php';
}


function get_investor_info($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM investor WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
		
	}
	include 'conf/closedb.php';
}

function get_investor_home_page_info($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM investor_home_page WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
		
	}
	include 'conf/closedb.php';
}

function get_investor_info_by_email($email) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM investor WHERE email='$email'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function get_investor_info_id($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM investor WHERE id='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function display_investor_detail($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM investor WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo "<table style='margin-left:25px;'>
			<tr>
				<td width='100'><strong>Full Name</strong></td>
				<td><strong>: $row[company_name]</td>
			</tr>
			<tr>
				<td><strong>User Name</strong></td>
				<td><strong>: $row[user_name]</strong></td>
			</tr>
		</table>";
	}
	include 'conf/closedb.php';
}

function list_full_cv($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result1=mysqli_query($conn, "SELECT COUNT(*) as total FROM investor_bought_cv WHERE investor='$user_name' AND paid='1'");
	while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC))
	{
		$total=$row[total];
	}




	if($_REQUEST['page_no']){
		$limit=($_REQUEST['page_no']-1)*10;
		$page_no=$_REQUEST['page_no'];
		$current_page_no=$_REQUEST['page_no'];
		$next_page=$_REQUEST['page_no']+1;
		$pre_page=$_REQUEST['page_no']-1;
		$previous='<a href="check_bought_cv.php?page_no='.$pre_page.'">Previous . . </a>';
	}
	else{
		$limit=0;
		$next_page=$_REQUEST['page_no']+2;
		$current_page_no=1;
		$previous='';
	}
	if($_REQUEST['page_no']==1){
		$previous='';
	}

	if(($total/10)<=$current_page_no){
		$next="";
	}
	else{
		$next='<a href="check_bought_cv.php?page_no='.$next_page.'"> . . Next</a>';
	}


	echo '
	<p style="text-align: justify;">
	Total Result is : '.$total.'</p>
	<p style="text-align: right; margin-top: -30px; margin-right:10px;">
	'.$previous.'
	<a href="check_bought_cv.php?page_no='.$current_page_no.'"> '.$current_page_no.' </a>
	'.$next.'</p>
	<table class="job_table" border="1" cellpadding="5">
	<thead>
	<th>View Full CV</th>
	<th>Jobseeker Name</th>
	<th>Download Original CV</th>
	</thead>
	<tbody>';


	$result=mysqli_query($conn, "SELECT * FROM investor_bought_cv WHERE investor='$user_name' AND paid='1' ORDER BY id  DESC LIMIT $limit, 10");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$applicant_id=$row1[applicant_id];
		$info=get_employee_info_by_id($row[applicant_id]);
			
		echo '<tr>
				<td>
				<a href="view_employee.php?job=view_profile_full&id='.$row[applicant_id].'"  ><img src="img/view.png" alt="View" /></a>
				</td>
				<td>'.$info[full_name].'
				</td>
				<td><a href="'.$info[file_destination].'"><img src="img/download.png" alt="Downoad" /></a> </td>
			</tr>';
			
	}
	echo '</tbody></table>
	<p style="text-align: center;">'.$previous.'<a href="check_bought_cv.php?page_no='.$current_page_no.'"> '.$current_page_no.' </a>
	'.$next.'</p>
	';

	include 'conf/closedb.php';
}

function get_home_page_details($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM investor_home_page WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function save_home_page($user_name, $title, $sub_title, $detail, $logo){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE investor_home_page SET
	title='$title',
	sub_title='$sub_title',
	logo='$logo',
	detail='$detail'
	WHERE user_name='$user_name'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function color_change($skin,$user_name){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $query = "UPDATE investor SET
	theme='$skin'
	WHERE user_name='$user_name'";

    mysqli_query($conn, $query);

    include 'conf/closedb.php';
}


function get_color_info($user_name){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT * FROM investor WHERE user_name='$user_name'");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        return $row;
    }
    include 'conf/closedb.php';
}

