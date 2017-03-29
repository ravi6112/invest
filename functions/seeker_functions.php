<?php
function check_seeker_login($email, $password) {

	$password=md5($password);
	include 'conf/config.php';
	include 'conf/opendb.php';

	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM user WHERE email = '$email' AND password= '$password' AND active='1' AND type='Seeker'"))){
		return 1;
	}
	else{
		return 0;
	}

	include 'conf/closedb.php';
}

function update_profile_pic_link($user_name, $newname){
	include 'conf/config.php';
	include 'conf/opendb.php';
	 
	$query = "UPDATE user_detail SET
	profile_pic='$newname'
	WHERE user_name='$user_name'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function create_seeker_entry($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

 
	$query = "INSERT INTO user_detail (`id`, `user_name`)
	VALUES ('', '$user_name')";
	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function get_user_info($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM user WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
		
	}
	include 'conf/closedb.php';
}

function display_profile_pic($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT profile_pic FROM user_detail WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo "<div class='col-12'>
                    <img src='$row[profile_pic]' class='img-responsive'/>
                </div>";
		
	}
	include 'conf/closedb.php';
}

function get_user_detailed_info($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM user_detail WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
		
	}
	include 'conf/closedb.php';
}

function get_user_info_by_id($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
		
	}
	include 'conf/closedb.php';
}

function get_user_info_by_email($email) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function get_user_info_id($user_id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM user WHERE id='$user_id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
	include 'conf/closedb.php';
}

function display_user_detail($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM user WHERE user_name='$user_name'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo "<table style='margin-left:25px;'>
			<tr>
				<td width='100'><strong>Full Name</strong></td>
				<td><strong>: $row[full_name]</td>
			</tr>
			<tr>
				<td><strong>User Name</strong></td>
				<td><strong>: $row[user_name]</strong></td>
			</tr>
		</table>";
	}
	include 'conf/closedb.php';
}

function save_cv($user_name, $full_name, $name_with_initial, $telephone_no_1, $telephone_no_2, $address, $high_edu_qualification, $prof_qualification, $language_sin, $language_tam, $language_eng, $area_interest, $area_capable, $latest_experience, $keywords, $exp_years, $qual_for_search, $dob, $gender, $cimaid, $city, $country){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$dob = date("Y-m-d", strtotime($dob));
	
	if($language_sin==1 && $language_tam==1 && $language_eng==1){
		$language="Sinhala, Tamil and English";
	}
	elseif($language_sin==1 && $language_tam==1){
		$language="Sinhala and Tamil";
	}	
	elseif($language_sin==1 && $language_eng==1){
		$language="Sinhala and English";
	}
	elseif($language_eng==1 && $language_tam==1){
		$language="Tamil and English";
	}
	elseif($language_sin==1){
		$language="Sinhala";
	}
	elseif($language_eng==1){
		$language="English";
	}	
	elseif($language_tam==1){
		$language="Tamil";
	}
	
	$area_interest_lower=strtolower("$area_interest");
	$area_capable_lower=strtolower("$area_capable");
	$keywords_lower=strtolower("$keywords");
	if ($cimaid){
		$cima=1;
	}
	else{
		$cima=0;
	}
	 
	$query = "UPDATE user SET
	full_name='$full_name',
	name_with_initial='$name_with_initial',
	telephone_no_1='$telephone_no_1',
	telephone_no_2='$telephone_no_2',
	address='$address',
	high_edu_qualification='$high_edu_qualification',
	prof_qualification='$prof_qualification',
	language_sin='$language_sin',
	language_tam='$language_tam',
	language_eng='$language_eng',
	language_skill='$language',
	area_interest='$area_interest_lower',
	area_capable='$area_capable_lower',
	latest_experience='$latest_experience',
	filled='1',
	keywords='$keywords_lower',
	exp_years='$exp_years',
	qual_for_search='$qual_for_search',
	dob='$dob', 
	gender='$gender',
	cimaid='$cimaid',
	cima='$cima',
	city='$city',
	country='$country'
	WHERE user_name='$user_name'";

	mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}

function save_cv_with_file($user_name, $full_name, $name_with_initial, $telephone_no_1, $telephone_no_2, $address, $high_edu_qualification, $prof_qualification, $language_sin, $language_tam, $language_eng, $area_interest, $area_capable, $latest_experience, $file_name, $file_destination, $keywords, $exp_years, $qual_for_search, $dob, $gender, $cimaid, $city, $country){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$dob = date("Y-m-d", strtotime($dob));
	
	if($language_sin==1 && $language_tam==1 && $language_eng==1){
		$language="Sinhala, Tamil and English";
	}
	elseif($language_sin==1 && $language_tam==1){
		$language="Sinhala and Tamil";
	}	
	elseif($language_sin==1 && $language_eng==1){
		$language="Sinhala and English";
	}
	elseif($language_eng==1 && $language_tam==1){
		$language="Tamil and English";
	}
	elseif($language_sin==1){
		$language="Sinhala";
	}
	elseif($language_eng==1){
		$language="English";
	}	
	elseif($language_tam==1){
		$language="Tamil";
	}
	
	$area_interest_lower=strtolower("$area_interest");
	$area_capable_lower=strtolower("$area_capable");
	$keywords_lower=strtolower("$keywords");
	if ($cimaid){
		$cima=1;
	}
	else{
		$cima=0;
	}
	
	 
	$query = "UPDATE user SET
	full_name='$full_name',
	name_with_initial='$name_with_initial',
	telephone_no_1='$telephone_no_1',
	telephone_no_2='$telephone_no_2',
	address='$address',
	high_edu_qualification='$high_edu_qualification',
	prof_qualification='$prof_qualification',
	language_sin='$language_sin',
	language_tam='$language_tam',
	language_eng='$language_eng',
	language_skill='$language',
	area_interest='$area_interest_lower',
	area_capable='$area_capable_lower',
	latest_experience='$latest_experience',
	filled='1',
	file='1',
	file_name='$file_name',
	file_destination='$file_destination',
	keywords='$keywords_lower',
	exp_years='$exp_years',
	qual_for_search='$qual_for_search',
	dob='$dob', 
	gender='$gender',
	cimaid='$cimaid',
	cima='$cima',
	city='$city',
	country='$country'
	WHERE user_name='$user_name'";

	mysqli_query($conn, $query);
	
	include 'conf/closedb.php';
}

function check_cv($user_name) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM user WHERE user_name = '$user_name' AND file= '1'"))){
		return 1;
	}
	else{
		return 0;
	}

	include 'conf/closedb.php';
}

function flag_this_job($ref_no, $user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO flaged_jobs (`id`, `user`, `ref_no`)
	VALUES ('', '$user_name', '$ref_no')";
	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function list_users($keyword_for_search, $qual_for_search, $experience, $language, $gender, $age, $city, $country) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<div class="row" style="margin-top: 20px;">
              <div class="dataTables_wrapper">
	<table  class="table table-striped table-bordered table-hover" id="tablesJob">
	<thead>
	<th>View CV</th>
	<th>Job Seeker Name</th>
	<th>Edu Qualification</th>
	<th>Exp Years</th>
	<th>Latest Exp</th>
	<th>Rank</th>
	</thead>
	<tbody>';
	
	
	if($city=="ANY"){
		$city_check="";
	}
	elseif($city=="Other Country"){
		$city_check="AND city='Other Country'";
	}
	else {
		$city_check="AND city='$city'";
	}
	
	if($country=="ANY"){
		$country_check="";
	}
	else {
		$country_check="AND country='$country'";
	}
	
	$today=strtotime("now");
	if($age=="18-25"){
		$dob1=date('Y-m-d', $today-567648000);
		$dob2=date('Y-m-d', $today-788400000);
		$age_check="AND dob<'$dob1' AND dob>'$dob2'";
	}
	elseif ($age=="26-35"){
		$dob1=date('Y-m-d', $today-788400000);
		$dob2=date('Y-m-d', $today-1103760000);
		$age_check="AND dob<'$dob1' AND dob>'$dob2'";
	}
	elseif ($age=="36-45"){
		$dob1=date('Y-m-d', $today-1103760000);
		$dob2=date('Y-m-d', $today-1419120000);
		$age_check="AND dob<'$dob1' AND dob>'$dob2'";
	}
	elseif ($age=="45+"){
		$dob1=date('Y-m-d', $today-1419120000);
		$age_check="AND dob<'$dob1'";
	}
	elseif ($age=="ANY"){
		$age_check="";
	}
	

	if($experience=="Above 5 Years"){
		$exp_check=6;
	}
	elseif($experience=="ANY"){
		$exp_check=0;
	}
	else{
		$exp_check=$experience;
	}
	
	if($qual_for_search=="ANY"){
		$qual_check="";
	}
	elseif($qual_for_search=="UNDER GRADUATE"){
		$qual_check="AND qual_for_search='UNDER GRADUATE' OR qual_for_search='POST GRADUATE'";
	}
	else{
		$qual_check="AND qual_for_search='POST GRADUATE'";
	}
	
	if($gender=="ANY"){
		$gender_check="";
	}
	else{
		$gender_check="AND gender='$gender'";
	}
	
	if($language=="Sinhala, Tamil and English"){
		$lan_check="AND language_sin='1 AND language_tam='1' AND language_eng'1'";
	}
	elseif($language=="Sinhala and Tamil"){
		$lan_check="AND language_sin='1 AND language_tam='1'";
	}	
	elseif($language=="Sinhala and English"){
		$lan_check="AND language_sin='1 AND language_eng'1'";
	}
	elseif($language=="Tamil and English"){
		$lan_check="AND language_tam='1' AND language_eng'1'";
	}
	elseif($language=="Sinhala"){
		$lan_check="AND language_sin='1'";
	}
	elseif($language=="English"){
		$lan_check="AND language_eng='1'";
	}	
	elseif($language=="Tamil"){
		$lan_check="AND language_tam='1'";
	}
	
	$result=mysqli_query($conn, "SELECT * FROM user WHERE keywords LIKE '%$keyword_for_search%' AND exp_years>='$exp_check' $qual_check $gender_check $lan_check $age_check $city_check $country_check ORDER BY cima  DESC");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '
		<tr>
		
		<td>
		<a href="view_user.php?job=view_profile&id='.$row[id].'" target="_blank" ><img src="img/view.png" alt="View" /></a>
		</td>

		<td>
		 '.$row[full_name].'
		</td>

		<td>
		 '.$row[high_edu_qualification].'
		</td>

		<td>
		 '.$row[exp_years].'
		</td>

		<td>
		 '.$row[latest_experience].'
		</td>

		<td>
		 '.$row[rank].'
		</td>

		</tr>
		';
	}

	echo '</tbody></table></div></div>';

	include 'conf/closedb.php';
}

function color_change_seeker($skin,$user_name){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $query = "UPDATE user SET
	theme='$skin'
	WHERE user_name='$user_name'";

    mysqli_query($conn, $query);

    include 'conf/closedb.php';
}

function get_color_info_seeker($user_name){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT * FROM user WHERE user_name='$user_name'");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        return $row;
    }
    include 'conf/closedb.php';
}
