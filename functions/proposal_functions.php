<?php

function list_keywords($ref_no){
	if($ref_no) {
		$info = get_proposal_info($ref_no);
	}
	include 'conf/config.php';
	include 'conf/opendb.php';

	if($ref_no) {
		$result = mysqli_query($conn, "SELECT * FROM proposal_has_keywords WHERE ref_no='$ref_no' ORDER BY keyword ASC");
		while ($row = mysql_fetch_array($result, MYSQLI_ASSOC)) {
			echo '<option value="' . $row[keyword] . '" selected>' . $row[keyword] . '</option>';
		}
	}
	$result1=mysqli_query($conn, "SELECT * FROM keyword WHERE keyword.keyword NOT IN (SELECT keyword FROM proposal_has_keywords WHERE ref_no='$ref_no') ORDER BY keyword ASC");
	while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC))
	{
		echo'<option value="'.$row1[keyword].'">'.$row1[keyword].'</option>';
	}
}

function get_proposal_ref_no(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT MAX(id) FROM proposal");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$no=$row['MAX(id)']+1;
		$date = date("Y-m");
		return "P-$date-$no";
	}

	include 'conf/closedb.php';
}

function save_image_detail($ref_no, $new_name){
	include 'conf/config.php';
	include 'conf/opendb.php';
	 
	$query = "INSERT INTO proposal_has_image (`id`, `ref_no`, `image`)
		VALUES ('', '$ref_no', '$new_name')";
	mysqli_query($conn, $query) or die (mysqli_error());
}

function save_report_detail($ref_no, $new_name){
	include 'conf/config.php';
	include 'conf/opendb.php';
	 
	$query = "INSERT INTO proposal_has_report (`id`, `ref_no`, `report`)
		VALUES ('', '$ref_no', '$new_name')";
	mysqli_query($conn, $query) or die (mysqli_error());
}

function proposal_has_keyword($ref_no, $keyword){
	include 'conf/config.php';
	include 'conf/opendb.php';
	 
	$query = "INSERT INTO proposal_has_keywords (`id`, `ref_no`, `keyword`)
		VALUES ('', '$ref_no', '$keyword')";
	mysqli_query($conn, $query) or die (mysqli_error());
}

function save_proposal($title, $detail, $catagory, $ref_no, $seeker, $investor_type, $cover_image) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO proposal (id, title, detail, catagory, ref_no, seeker, investor_type, cover_image)
	VALUES ('', '$title', '$detail', '$catagory', '$ref_no', '$seeker', '$investor_type', '$cover_image')";
	mysqli_query($conn, $query) or die (mysqli_error());

}

function list_proposals($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="row">';

	$result=mysqli_query($conn, "SELECT * FROM proposal WHERE seeker='$user_name' ORDER BY id  DESC");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '<style>
		.box {
    border-style: thumbnail;
    border-color: white;
    border-width: 5px;
    text-align: center;
	padding-bottom: 40px;
	margin : 10px;
  }
  </style>
  
<div class="col-lg-6">
				<div class="box">
				
				<a href="proposal.php?job=view&id='.$row[ref_no].'">
					<img src="'.$row[cover_image].'"  class="img-responsive"/>
				</a>
				
				<a href="proposal.php?job=view&id='.$row[ref_no].'"><h4>Software Company Project</h4></a>';
				if($row['bulbs']>0){					
					echo '<div class="btn btn-primary col-lg-3"><h3 style="margin-top: -1px; margin-bottom: -1px;"><i class="fa fa-lightbulb-o fa-lg"></i> '.$row[bulbs].'</h3></div>';
				}
				else{					
					echo '<div class="btn btn-primary col-lg-6"><h3 style="margin-top: -1px; margin-bottom: -1px;"><i class="fa fa-lightbulb-o fa-lg"></i> Not Yet</h3></div>';
				}
				if($row['done']==1){					
					echo '<div class="btn btn-success col-lg-2" style="margin-left: 5px;"><h3 style="margin-top: -1px; margin-bottom: -1px;"><i class="fa fa-trophy fa-lg"></i></h3></div>';
				}
				
				if($row['scam']==1){					
					echo '<div class="btn btn-danger col-lg-2" style="margin-left: 5px;"><h3 style="margin-top: -1px; margin-bottom: -1px;"><i class="fa fa-ban fa-lg"></i></h3></div>';
				}
				echo'
				
			</div>
			</div>
			';

	}

	echo"</div>";


	include 'conf/closedb.php';
}

function view_proposal($ref_no) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="row">';

	$result=mysqli_query($conn, "SELECT * FROM proposal WHERE ref_no='$ref_no'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '<div class="col-lg-12 thumbnail">
				
				<a href="proposal.php?job=view&id='.$row[ref_no].'">
					<img src="'.$row[cover_image].'"  class="img-responsive" />
				</a>
				
				<a href="proposal.php?job=view&id='.$row[ref_no].'"><h4>Software Company Project</h4></a>';
				if($row['bulbs']>0){					
					echo '<div class="btn btn-primary col-lg-3"><h3 style="margin-top: -1px; margin-bottom: -1px;"><i class="fa fa-lightbulb-o fa-lg"></i> '.$row[bulbs].'</h3></div>';
				}
				else{					
					echo '<div class="btn btn-primary col-lg-6"><h3 style="margin-top: -1px; margin-bottom: -1px;"><i class="fa fa-lightbulb-o fa-lg"></i> Not Yet</h3></div>';
				}
				if($row['done']==1){					
					echo '<div class="btn btn-success col-lg-2" style="margin-left: 5px;"><h3 style="margin-top: -1px; margin-bottom: -1px;"><i class="fa fa-trophy fa-lg"></i></h3></div>';
				}
				
				if($row['scam']==1){					
					echo '<div class="btn btn-danger col-lg-2" style="margin-left: 5px;"><h3 style="margin-top: -1px; margin-bottom: -1px;"><i class="fa fa-ban fa-lg"></i></h3></div>';
				}
				echo'				
			</div>
			';

	}

	echo"</div>";


	include 'conf/closedb.php';
}

function get_job_info($id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE id='$id'");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

	{
		return $row;
	}

	include 'conf/closedb.php';
}

function update_job($id, $job_title, $detail, $detail_text, $catagory, $closing_date, $contact_mail_id, $main_catagory, $keywords, $timing) {
	$date_formated = date("Y-m-d", strtotime($closing_date));

	include 'conf/config.php';
	include 'conf/opendb.php';

	$keywords_lower=strtolower("$keywords");

	 
	$query = "UPDATE jobs SET
	job_title='$job_title',
	detail='$detail',
	detail_text='$detail_text',
	catagory='$catagory',
	closing_date='$date_formated',
	contact_mail_id='$contact_mail_id',
	main_catagory='$main_catagory',
	keywords='$keywords_lower',
	timing='$timing'
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function update_with_out_file($id, $job_title, $detail_text, $catagory, $closing_date, $contact_mail_id, $main_catagory, $keywords, $timing){
	$date_formated = date("Y-m-d", strtotime($closing_date));

	include 'conf/config.php';
	include 'conf/opendb.php';

	$keywords_lower=strtolower("$keywords");

	 
	$query = "UPDATE jobs SET
	job_title='$job_title',
	detail_text='$detail_text',
	catagory='$catagory',
	closing_date='$date_formated',
	contact_mail_id='$contact_mail_id',
	main_catagory='$main_catagory',
	keywords='$keywords_lower',
	timing='$timing'
	WHERE id='$id'";

	mysqli_query($conn, $query);

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

function restore_job($id) {

	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE jobs SET
	cancel_status='0'
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function list_jobs_in_home(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$date = date("Y-m-d");

	echo "<div class='job_home'>";
	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE closing_date >='$date' AND active='1' AND cancel_status='0' AND employer!='cimadivision' ORDER BY id  DESC LIMIT 40");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo "<div class='one_job'><b>$row[company_name]</b> <br /><a href='view_job.php?job=display&ref_no=".$row[ref_no]."'>$row[job_title]</a></div>";
	}

	include 'conf/closedb.php';
}

function display_job_detail($ref_no){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE ref_no='$ref_no' ORDER BY id  DESC");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$post_date=date("Y-m-d", strtotime($row[post_date]));
		
		echo '<div class="col-lg-12" style="background-color:'.$bgcolor.'; box-shadow: 0 35px 20px #777; margin:10px;">
					<br /><br />
					<div class="col-lg-3 text-center"><a href="apply_job.php?job=non_member&ref_no='.$ref_no.'#apply" class="btn btn-xl">Apply now</a></div>
					<div class="col-lg-3 text-center" style="margin-left: -40px; margin-right: 10px;"><a href="apply_job.php?job=member&ref_no='.$ref_no.'#apply" class="btn btn-xl">Apply as a member</a></div>
					<div class="col-lg-3 text-center" style="margin-right: 20px;"><a href="apply_job.php?job=later&ref_no='.$ref_no.'" class="btn btn-xl">Flag and Apply Later</a></div>
					<div class="col-lg-3 text-center"><a href="tell_a_friend.php?job=fill_to_tell&ref_no='.$ref_no.'#tell" class="btn btn-xl">Tell a Friend</a></div>

			<br /><br /><br /><br /><br /><br />
			<a href="view_job.php?job=display&ref_no='.$row[ref_no].'" style="color: black;" ><h2 class="section-heading">'.$row[job_title].'</h2></a>

			<table class="table table-striped table-bordered table-hover" style="text-align: left;">
				<tr>
					<td>Job Reference No</td>
					<td>'.$row[ref_no].'</td>
				</tr>
				<tr>
					<td>Keywords</td>
					<td>'.$row[keywords].'</td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td>'.$row[company_name].'</td>
				</tr>
				<tr>
					<td>Posted Date</td>
					<td>'.$post_date.'</td>
				</tr>
				<tr>
					<td>Closing Date</td>
					<td>'.$row[closing_date].'</td>
				</tr>
				<tr>
					<td>Job Type</td>
					<td>'.$row[main_catagory].'</td>
				</tr>
				<tr>
					<td>Job Category</td>
					<td>'.$row[catagory].'</td>
				</tr>
				<tr>
					<td>Part time/ Full time</td>
					<td>'.$row[timing].'</td>
				</tr>
				<tr>
					<td>Details</td>
					<td>'.$row[detail_text].'</td>
				</tr>
			</table>

			<br />
              		<img src="'.$row[detail].'" class="img-responsive"/>
              </div>';
	}

	

	include 'conf/closedb.php';

}


function get_job_info_by_ref_no($ref_no){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE ref_no='$ref_no'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}

	include 'conf/closedb.php';
}

function save_application($ref_no, $name, $mail_id, $message){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$date = date("Y-m-d");

	$result=mysqli_query($conn, "SELECT * FROM employee WHERE email='$mail_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$applicant_id=$row['id'];

		 
		$query = "INSERT INTO job_has_applications (`id`, `ref_no`, `applicant_name`, `applicant_email`, `applicant_message`, `applied_date`, `applicant_id`)
	VALUES ('', '$ref_no', '$name', '$mail_id', '$message', '$date', '$applicant_id')";
		mysqli_query($conn, $query) or die (mysqli_error());

	}

	 
	$query1 = "UPDATE jobs SET
	applied='1'
	WHERE ref_no='$ref_no'";

	mysqli_query($query1);

	include 'conf/closedb.php';

}

function save_applied_job($user_name, $ref_no, $message){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$date = date("Y-m-d");

	 
	$query = "INSERT INTO employee_apply_jobs (`id`, `ref_no`, `user_name`, `message`, `applied_date`)
	VALUES ('', '$ref_no', '$user_name', '$message', '$date')";
	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function display_job_with_applications($ref_no){
	include 'conf/config.php';
	include 'conf/opendb.php';


	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE ref_no='$ref_no' ORDER BY id  DESC");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '<div class="col-lg-9"><h3 class="page-header">Applications Received For The Job - '.$row[job_title].'</h3></div><div class="col-lg-3" style="margin-top: 30px;"><a href="check_old_jobs.php" class="btn btn-success">Back To All Jobs</a></div>';

		echo '<div class="row">
              <div class="dataTables_wrapper">
				<table  class="table table-striped table-bordered table-hover" id="tablesApplicants">
					<thead>
						<th>View Details</th>
						<th>Applicant Name</th>
						<th>Applicant Message</th>
					</thead>
				<tbody>';
		$result1=mysqli_query($conn, "SELECT * FROM job_has_applications WHERE ref_no='$ref_no' ORDER BY id  DESC");
		while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC))
		{
			echo '		<tr>
		<td>
		<a href="view_employee.php?job=view_profile&id='.$row1[applicant_id].'" target="_blank" ><img src="img/view.png" alt="View" /></a>
		</td>
		
		<td>'.$row1[applicant_name].'
		</td>
		
		<td style="max-width: 300px;" class="job_td">'.$row1[applicant_message].'
		</td>

		</tr>';
		}

		echo"</tbody>
	</table>
	</div></div>";
	}

	include 'conf/closedb.php';
}

function list_flagged_jobs($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';




	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesFlag">
	<thead>
	<th>Unflag</th>
	<th>View and Apply</th>
	<th>Job Title</th>
	<th>Company Name</th>
	<th>Closing Date</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT * FROM flaged_jobs WHERE employee='$user_name' ORDER BY id  DESC");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$ref_no=$row[ref_no];
		$info=get_job_info_by_ref_no($ref_no);

		echo '
		<tr>
		<td>
		<a href="flaged_jobs.php?job=unflag&id='.$row[id].'" ><img src="img/flag.png" alt="Unflag" width="20" height="20"/></a>
		</td>

		<td>
		<a href="view_job.php?job=display&ref_no='.$ref_no.'" target="_blank" ><img src="img/view.png" alt="View" /></a>
		</td>

		<td>
		 '.$info[job_title].'
		 </td>

		<td>
		 '.$info[employer].'
		 </td>

		<td>
		 '.$info[closing_date].'
		 </td>
		 </tr>
		';
	}

	echo"</tbody>
	</table>
	</div></div>";

	include 'conf/closedb.php';
}

function unflag_job($id){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "DELETE FROM flaged_jobs WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function list_job_by_catagory($catagory){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$date = date("Y-m-d");
	
	echo '<h4 class="page-header">'.$catagory.'</h4><div class="row">
              <div class="dataTables_wrapper">
					<table  class="table table-striped table-bordered table-hover" id="tablesCatagory">
						<thead>
							<th>#</th>
							<th>Reference No</th>
							<th>Job Title</th>
							<th>Keywords about job</th>
							<th>Posted Date</th>
							<th>Closing Date</th>
						</thead>
						<tbody>';

	$i=1;
	if($catagory){
		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE catagory='$catagory' AND active='1' AND closing_date >='$date' AND cancel_status='0' ORDER BY id  DESC");
	}
	else{
		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND closing_date >='$date' AND cancel_status='0' ORDER BY id  DESC");
	}

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$post_date = date("Y-m-d", strtotime($row[post_date]));

		echo '<tr>

			 <td>'.$i.'</td>

			 <td>'.$row[ref_no].'</td>

			 <td><a href="view_job.php?job=display&ref_no='.$row[ref_no].'" target="_blank" >'.$row[job_title].'</a></td>

			 <td>'.$row[keywords].'</td>

			 <td>'.$post_date.'</td>

			 <td>'.$row[closing_date].'</td>

			 </tr>';

		$i++;
	}

echo"</tbody>
	</table>
	</div></div>";

	include 'conf/closedb.php';
}

function list_job_for_mini_searching($main_catagory, $timing, $keyword){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$date = date("Y-m-d");

	if($main_catagory!='Any' && $timing!='Any'){
		$result1=mysqli_query($conn, "SELECT COUNT(*) as total FROM jobs WHERE main_catagory='$main_catagory' AND active='1' AND cancel_status='0' AND closing_date >='$date' AND keywords LIKE '%$keyword%' AND timing='$timing' ORDER BY id  DESC");
	}
	elseif($main_catagory=='Any' && $timing=='Any'){
		$result1=mysqli_query($conn, "SELECT COUNT(*) as total FROM jobs WHERE active='1' AND closing_date >='$date' AND cancel_status='0' AND keywords LIKE '%$keyword%' ORDER BY id  DESC");
	}

	elseif($timing=='Any'){
		$result1=mysqli_query($conn, "SELECT COUNT(*) as total FROM jobs WHERE main_catagory='$main_catagory' AND cancel_status='0' AND active='1' AND closing_date >='$date' AND keywords LIKE '%$keyword%' ORDER BY id  DESC");
	}

	elseif($main_catagory=='Any'){
		$result1=mysqli_query($conn, "SELECT COUNT(*) as total FROM jobs WHERE active='1' AND closing_date >='$date' AND cancel_status='0' AND keywords LIKE '%$keyword%' AND timing='$timing' ORDER BY id  DESC");
	}

	while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC))
	{
		$total=$row[total];
	}
	
	
	

	if($_REQUEST['page_no']){
		$limit=($_REQUEST['page_no']-1)*20;
		$page_no=$_REQUEST['page_no'];
		$current_page_no=$_REQUEST['page_no'];
		$next_page=$_REQUEST['page_no']+1;
		$pre_page=$_REQUEST['page_no']-1;
		$previous='<a href="mini_searching.php?job=search_mini_page&main_catagory='.$main_catagory.'&timing='.$timing.'&keyword='.$keyword.'&page_no='.$pre_page.'">Previous . . </a>';
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
	
	if(($total/20)<=$current_page_no){
		$next="";
	}
	else{
		$next='<a href="mini_searching.php?job=search_mini_page&main_catagory='.$main_catagory.'&timing='.$timing.'&keyword='.$keyword.'&page_no='.$next_page.'"> . . Next</a>';
	}
	

	echo '
	<p style="text-align: justify;">
	Total Result is : '.$total.'</p>
	<p style="text-align: right; margin-top: -30px; margin-right:10px;">
	'.$previous.'
	<a href="mini_searching.php?job=search_mini_page&main_catagory='.$main_catagory.'&timing='.$timing.'&keyword='.$keyword.'&page_no='.$current_page_no.'"> '.$current_page_no.' </a>
	'.$next.'</p><table class="job_table_full" cellpadding="5">
	<thead bgcolor="#84C8E5">
	<th width="30">#</th>
	<th>Job Reffence No</th>
	<th width="190">Job Title</th>
	<th width="490">Keywords about job</th>
	<th width="100">Posted Date</th>
	<th width="100">Closing Date</th>
	<th>View Job</th>
	</thead>
	<tbody>';

	$i=(($current_page_no-1)*20)+1;
	if($main_catagory!='Any' && $timing!='Any'){
		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE main_catagory='$main_catagory' AND active='1' AND cancel_status='0' AND closing_date >='$date' AND keywords LIKE '%$keyword%' AND timing='$timing' ORDER BY id  DESC LIMIT $limit, 20");
	}
	elseif($main_catagory=='Any' && $timing=='Any'){
		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND closing_date >='$date' AND cancel_status='0' AND keywords LIKE '%$keyword%' ORDER BY id  DESC LIMIT $limit, 20");
	}

	elseif($timing=='Any'){
		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE main_catagory='$main_catagory' AND cancel_status='0' AND active='1' AND closing_date >='$date' AND keywords LIKE '%$keyword%' ORDER BY id  DESC LIMIT $limit, 20");
	}

	elseif($main_catagory=='Any'){
		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND closing_date >='$date' AND cancel_status='0' AND keywords LIKE '%$keyword%' AND timing='$timing' ORDER BY id  DESC LIMIT $limit, 20");
	}



	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{


		$post_date = date("Y-m-d", strtotime($row[post_date]));
		if($i%2==1){
			$bgcolor="#FFFFFF";
		}
		else{
			$bgcolor="#CDE3ED";
		}

		echo '
		<tr bgcolor="'.$bgcolor.'">

		<td>'.$i.'</td>

		<td>'.$row[ref_no].'</td>

		<td>
		<a href="view_job.php?job=display&ref_no='.$row[ref_no].'" target="_blank" >'.$row[job_title].'</a>
		</td>

		<td>'.$row[keywords].'</td>

		<td>'.$post_date.'</td>

		<td>'.$row[closing_date].'</td>

		<td align="center">
		<a href="view_job.php?job=display&ref_no='.$row[ref_no].'" target="_blank" ><img src="img/view.png" alt="View" /></a>
		</td>


		</tr>
		';

		$i++;
	}

	echo '</tbody></table>
		<p  style="text-align: center;">'.$previous.'<a href="mini_searching.php?job=search_mini_page&main_catagory='.$main_catagory.'&timing='.$timing.'&keyword='.$keyword.'&page_no='.$current_page_no.'"> '.$current_page_no.' </a>
	'.$next.'</p>
	';

	include 'conf/closedb.php';
}

function jobs_i_like($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$info=get_employee_info($user_name);
	$interested_area=$info['area_interest'];
	$search_words=(explode(", ",$interested_area));

	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesLike">
		<thead>
		<th>#</th>
		<th>Reference No</th>
		<th>Job Title</th>
		<th>Keywords about job</th>
		<th>Posted Date</th>
		<th>Closing Date</th>
		<th>View Job</th>
		</thead>
		<tbody>';

	$i=1;


	$size = sizeof($search_words);
	$x=0;
	while($x<=$size-1){

		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND cancel_status='0' AND keywords LIKE '%$search_words[$x]%' ORDER BY id  DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		}

		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND cancel_status='0' AND keywords LIKE '%$search_words[$x]%' ORDER BY id  DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$post_date = date("Y-m-d", strtotime($row[post_date]));

			echo '
			<tr>

			<td>'.$i.'</td>

			<td>'.$row[ref_no].'</td>

			<td>
		 <a href="view_job.php?job=display&ref_no='.$row[ref_no].'" target="_blank" >'.$row[job_title].'</a>
		 </td>

		 <td>'.$row[keywords].'</td>

		 <td>'.$post_date.'</td>

		 <td>'.$row[closing_date].'</td>

		 <td align="center">
		 <a href="view_job.php?job=display&ref_no='.$row[ref_no].'" target="_blank" ><img src="img/view.png" alt="View" /></a>
		 </td>


		 </tr>
		';

			$i++;
		}
		$x++;
	}
	echo"</tbody>
	</table>
	</div></div>";

	include 'conf/closedb.php';
}

function jobs_i_can_do($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$info=get_employee_info($user_name);
	$capable_area=$info['area_capable'];
	$search_words=(explode(", ",$capable_area));

	echo '<div class="row">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesCapable">
		<thead>
		<th>#</th>
		<th>Reference No</th>
		<th>Job Title</th>
		<th>Keywords about job</th>
		<th>Posted Date</th>
		<th>Closing Date</th>
		<th>View Job</th>
		</thead>
		<tbody>';

	$i=1;


	$size = sizeof($search_words);
	$x=0;
	while($x<=$size-1){

		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND cancel_status='0' AND keywords LIKE '%$search_words[$x]%' ORDER BY id  DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{

		}

		$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND cancel_status='0' AND keywords LIKE '%$search_words[$x]%' ORDER BY id  DESC");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$post_date = date("Y-m-d", strtotime($row[post_date]));

			echo '
		
			<tr>

			<td>'.$i.'</td>

			<td>'.$row[ref_no].'</td>

			<td>
		 <a href="view_job.php?job=display&ref_no='.$row[ref_no].'" target="_blank" >'.$row[job_title].'</a>
		 </td>

		 <td>'.$row[keywords].'</td>

		 <td>'.$post_date.'</td>

		 <td>'.$row[closing_date].'</td>

		 <td align="center">
		 <a href="view_job.php?job=display&ref_no='.$row[ref_no].'" target="_blank" ><img src="img/view.png" alt="View" /></a>
		 </td>


		 </tr>
		';

			$i++;
		}
		$x++;
	}
	echo"</tbody>
	</table>
	</div></div>";

	include 'conf/closedb.php';
}


function cima_jobs(){
	include 'conf/config.php';
	include 'conf/opendb.php';
		
	$result1=mysqli_query($conn, "SELECT COUNT(*) as total FROM jobs WHERE active='1' AND cancel_status='0' AND employer='cimadivision'");
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
		$previous='<a href="jobs_for_me.php?job=cima&page_no='.$pre_page.'">Previous . . </a>';
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
		$next='<a href="jobs_for_me.php?job=cima&page_no='.$next_page.'"> . . Next</a>';
	}


	echo '
	<p style="text-align: justify;">
	Total Result is : '.$total.'</p>
	<p style="text-align: right; margin-top: -30px; margin-right:10px;">
	'.$previous.'
	<a href="jobs_for_me.php?job=cima&page_no='.$current_page_no.'"> '.$current_page_no.' </a>
	'.$next.'</p>
	<table class="job_table_full" cellpadding="5">
		 <thead bgcolor="#84C8E5">
		 <th width="30">#</th>
		 <th width="110">Job Reffence No</th>
		 <th width="190">Job Title</th>
		 <th width="475">Keywords about job</th>
		 <th width="100">Posted Date</th>
		 <th width="100">Closing Date</th>
		 <th>View Job</th>
		 </thead>
		 <tbody>';

	$i=(($current_page_no-1)*10)+1;

	$x=0;

	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND cancel_status='0' AND employer='cimadivision' ORDER BY id  DESC LIMIT $limit, 10");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		$post_date = date("Y-m-d", strtotime($row[post_date]));
		if($i%2==1){
			$bgcolor="#FFFFFF";
		}
		else{
			$bgcolor="#CDE3ED";
		}

		echo '
		<tr bgcolor="'.$bgcolor.'">

		<td>'.$i.'</td>

		<td>'.$row[ref_no].'</td>

		<td>
		<a href="view_job.php?job=display&ref_no='.$row[ref_no].'"  >'.$row[job_title].'</a>
		</td>

		<td>'.$row[keywords].'</td>

		<td>'.$post_date.'</td>

		<td>'.$row[closing_date].'</td>

		<td align="center">
		<a href="view_job.php?job=display&ref_no='.$row[ref_no].'"  ><img src="img/view.png" alt="View" /></a>
		</td>
		</tr>
		';

		$i++;
	}

	echo '</tbody></table>
	<p style="text-align: center;">'.$previous.'<a href="jobs_for_me.php?job=cima&page_no='.$current_page_no.'"> '.$current_page_no.' </a>
	'.$next.'</p>
	';

	include 'conf/closedb.php';
}

function company_jobs($employer_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$i=1;

	$x=0;

	$result=mysqli_query($conn, "SELECT * FROM jobs WHERE active='1' AND cancel_status='0' AND employer='$employer_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		$post_date = date("Y-m-d", strtotime($row[post_date]));
		if($i%2==1){
			$bgcolor="#FFFFFF";
		}
		else{
			$bgcolor="#CDE3ED";
		}

		echo '<div class="col-lg-12 text-center" style="background-color:'.$bgcolor.'; box-shadow: 0 35px 20px #777; margin:10px;">
					<br /><br />
                    <a href="view_job.php?job=display&ref_no='.$row[ref_no].'" style="color: black;" ><h2 class="section-heading">'.$row[job_title].'</h2></a>
                    <h3 class="section-subheading text-muted">Job Reffence No : '.$row[ref_no].'</h3>
                    <h3 class="section-subheading text-muted" style="margin-top:-40px;">'.$row[keywords].'</h3>
                    <h3 class="section-subheading text-muted" style="margin-top:-20px;">Posted Date : '.$post_date.' <br />Closing Date : '.$row[closing_date].'</h3>
              		<a href="view_job.php?job=display&ref_no='.$row[ref_no].'" target="blank" class="page-scroll btn btn-xl" style="margin-top:-40px; margin-bottom:40px;">View full Detail</a>  
              </div>';

		$i++;
	}

	echo '</tbody></table>';

	include 'conf/closedb.php';
}

function get_job_count($employer){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT count FROM stats WHERE employer='$employer'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$count=$row[count]+1;
		return "$count";
	}

	include 'conf/closedb.php';

}

function confirm_stats($employer){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT id FROM stats WHERE employer='$employer'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		return "$row[id]";
	}

	include 'conf/closedb.php';

}

function all_jobs_count(){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$date = date("Y-m-d");

	$result=mysqli_query($conn, "SELECT COUNT(*) as total FROM jobs WHERE active='1' AND cancel_status='0' AND closing_date >='$date'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$total=$row[total];
		return $total;
	}
	include 'conf/closedb.php';
}

function fresh_jobs_count(){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$date = date("Y-m-d");

	$result=mysqli_query($conn, "SELECT COUNT(*) as total FROM jobs WHERE active='1' AND cancel_status='0' AND applied='0' AND closing_date >='$date'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$total=$row[total];
		return $total;
	}
	include 'conf/closedb.php';
}

function proposal_display($id){
    include 'conf/config.php';
	include 'conf/opendb.php';
    
    
    $result=mysqli_query($conn, "SELECT * FROM proposal WHERE ref_no='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
        $info = get_user_info_by_seeker($row[seeker]);
        $pdf=get_pdf_by_ref_no($row[ref_no]);
        $image=get_image_by_ref_no($row[ref_no]);
        
      echo'
      <div class="row">
        <div class="col-md-9" style="width: 76%;">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="'.$info[profile_pic].'" alt="User Image">
                <span class="username"><a href="#">'.$row[seeker].'</a></span>
                <span class="description">Shared publicly</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
              <h5><strong>Proposal</strong> : '.$row[title].'</h5>
              <h5><strong>Catagory</strong> : '.$row[catagory].'</h5>
              <h5><strong>Inverstor As</strong> : '.$row[investor_type].'</h5>
              <p>'.$row[detail].'</p>
              <div class="box-body">
                <img class="img-responsive pad" src="'.$row[cover_image].'" alt="Photo">
               </div>
              <div class="box-footer">
                <ul class="mailbox-attachments clearfix">
                  <li>
                     <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                    <div class="mailbox-attachment-info">
                      <a href="'.$pdf[report].'" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> '.$row[ref_no].'.pdf</a>
                          <span class="mailbox-attachment-size">
                            1,245 KB
                            <a href="'.$pdf[report].'" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                          </span>
                    </div>
                  </li>
                  <li>
                  <span class="mailbox-attachment-icon has-img"><img src="'.$image[image].'" alt="Attachment"></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                        <span class="mailbox-attachment-size">
                          1.9 MB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                    </div>
                </li>
                </ul>
              </div>';
              
              
    }
    
}

function get_user_info_by_seeker($user){
    	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$date = date("Y-m-d");

	$result=mysqli_query($conn, "SELECT * FROM user_detail WHERE user_name='$user'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
        return $row;
	}
	include 'conf/closedb.php';
}

function get_pdf_by_ref_no($ref_no){
    	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$date = date("Y-m-d");

	$result=mysqli_query($conn, "SELECT * FROM proposal_has_report WHERE ref_no='$ref_no'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
        return $row;
	}
	include 'conf/closedb.php';
}

function get_image_by_ref_no($ref_no){
    include 'conf/config.php';
	include 'conf/opendb.php';
	
	$date = date("Y-m-d");

	$result=mysqli_query($conn, "SELECT * FROM proposal_has_image WHERE ref_no='$ref_no'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
        return $row;
	}
	include 'conf/closedb.php';
}
    
function dashboard_display(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $i=0;
        $result=mysqli_query($conn, "SELECT * FROM proposal WHERE cancel_status='0'");
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $info = get_user_info_by_seeker($row[seeker]);
            $like_count=get_like_count($row[ref_no], 1);

            echo '
                        <div class="row">
                    <section class="col-lg-7 connectedSortable" style="width: 76%;">
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-file"></i>
            
                                <h3 class="box-title">Proposals</h3>
            
                                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                    <div class="btn-group" data-toggle="btn-toggle">';
                                    if($_SESSION['user_name'] ==$row[seeker] ){

                                        echo'<span><button href="#" id="remove_'.$i.'" value="'.$row[ref_no].'"  onclick="removeProposal(remove_'.$i.','.$row[ref_no].')" >Remove</button></span>';
                                    }
                                    else{
                                        echo'<a href ="#" class="fa fa-flag">Report</a>';
                                    }
                                    echo'</div>
                                </div>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <img src="' . $info[profile_pic] . '" alt="user image" class="online">
            
                                    <p class="message">
                                        <a href="#" class="name">
                                                ' . $row[seeker] . '
                                        </a><br/>
                                        <p></p>
                                    </p>
                                    <div class="attachment-block clearfix">
                                        <img class="attachment-img" src="' . $row[cover_image] . '" alt="Attachment Image">
                        
                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading"> ' . $row[title] . '</h4>
                        
                                            <div class="attachment-text" style="margin-top: -5px;">
                                                <h4>' . substr($row[detail], 0, 180) . ' <a href="proposal.php?job=view&id=' . $row[ref_no] . '">more</a></div></h4>
                                            </div>
                                          <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </div>
                                    <div class="box-body">
                                     <button type = "button" class="btn btn-default btn-xs" id="btn_'.$i.'" onclick="ajaxCall(this.id,this.value)" name="btn" value="'.$row[ref_no].'"  >';

                                        if(check_like_status($_SESSION['user_name'], $row['ref_no'])==1){
                                            echo'<i class="fa fa-thumbs-up" ></i >';
                                        }
                                        else{
                                            echo'<i class="fa fa-thumbs-o-up" ></i >';
                                        }

                                        echo'<span>'.$like_count.'</span></button >
                                    </div>
                
                                </div>
                            </div>
                        </div>
                       
                        ';
            $i+=1;
        }
                   echo' </section>
                </div>';


}


function investor_dashboard_display(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $i=0;
        $result=mysqli_query($conn, "SELECT * FROM proposal WHERE cancel_status='0'");
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $info = get_user_info_by_seeker($row[seeker]);
            $like_count=get_like_count($row[ref_no], 1);

            echo '
                        <div class="row">
                    <section class="col-lg-7 connectedSortable" style="width: 76%;">
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-file"></i>
            
                                <h3 class="box-title">Proposals</h3>
            
                                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                    <div class="btn-group" data-toggle="btn-toggle">
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <img src="' . $info[profile_pic] . '" alt="user image" class="online">
            
                                    <p class="message">
                                        <a href="#" class="name">
                                                ' . $row[seeker] . '
                                        </a><br/>
                                        <p></p>
                                    </p>
                                    <div class="attachment-block clearfix">
                                        <img class="attachment-img" src="' . $row[cover_image] . '" alt="Attachment Image">
                        
                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading">' . $row[title] . '</h4>
                        
                                            <div class="attachment-text" style="margin-top: -5px;">
                                                <h4>' . substr($row[detail], 0, 180) . ' <a href="proposal.php?job=investor_view&id=' . $row[ref_no] . '">more</a></div></h4>
                                            </div>
                                          <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </div>
                                    <div class="box-body">
                                     <button type = "button" class="btn btn-default btn-xs" id="btn_'.$i.'" onclick="ajaxCall(this.id,this.value)" name="btn" value="'.$row[ref_no].'"  >';

                                        if(check_like_status($_SESSION['user_name'], $row['ref_no'])==1){
                                            echo'<i class="fa fa-thumbs-up" ></i >';
                                        }
                                        else{
                                            echo'<i class="fa fa-thumbs-o-up" ></i >';
                                        }

                                        echo'<span>'.$like_count.'</span></button >
                                    </div>
                
                                </div>
                            </div>
                        </div>
                       
                        ';
            $i+=1;
        }
                   echo' </section>
                </div>';


}

function check_dislike_status($user_name, $ref_no) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM proposal_like WHERE seeker = '$user_name' AND ref_no= '$ref_no' AND like_type='2'"))){
        return 1;
    }
    else{
        return 0;
    }

    include 'conf/closedb.php';
}


function proposal_like($user_name,$ref_no){
    include 'conf/config.php';
    include 'conf/opendb.php';


    mysqli_select_db($conn, $dbname);
    $query = "INSERT INTO proposal_like (id, seeker,ref_no,like_type)
	VALUES ('', '$user_name','$ref_no','1')";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    include 'conf/closedb.php';
}

function proposal_like_delete($user_name,$ref_no) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db($conn, $dbname);
    $query = "DELETE from proposal_like
	WHERE ref_no='$ref_no' AND seeker = '$user_name'";

    mysqli_query($conn, $query);

    include 'conf/closedb.php';
}

function check_like_status($user_name, $ref_no) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM proposal_like WHERE seeker = '$user_name' AND ref_no= '$ref_no' AND like_type='1'"))){
        return 1;
    }
    else{
        return 0;
    }

    include 'conf/closedb.php';
}

function get_like_count($ref_no, $type) {

    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT COUNT(id) AS count FROM proposal_like WHERE ref_no='$ref_no' AND like_type='$type'");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        return $row['count'];
    }

    include 'conf/closedb.php';
}
function proposal_dislike($user_name,$ref_no){
    include 'conf/config.php';
    include 'conf/opendb.php';


    mysqli_select_db($conn, $dbname);
    $query = "INSERT INTO proposal_like (id, seeker,ref_no,like_type)
	VALUES ('', '$user_name','$ref_no','2')";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    include 'conf/closedb.php';
}
function remove_proposal($invester,$ref_no){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $query = "UPDATE proposal SET
    invester_status='$invester',
	cancel_status='1'
	WHERE ref_no='$ref_no'";

    mysqli_query($conn, $query);

    include 'conf/closedb.php';


}