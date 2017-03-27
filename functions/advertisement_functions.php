<?php
function rotating_advertisement(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo'<div id="container">
		<div id="example">
			<div id="slides">
				<div class="slides_container">
			';
	$result=mysqli_query($conn, "SELECT * FROM ads WHERE active='1' AND ad_type='ROTATING ADS' ORDER BY id DESC");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '<a href="http://'.$row[link].'"><img src="'.$row[image].'" width="600" height="90" /></a>';
	}
	echo '</div>

		</div>
	</div>
	</div>';
	include 'conf/closedb.php';
}

function small_advertisement(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM ads WHERE active='1' AND ad_type='SMALL ADS' ORDER BY id DESC limit 1");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '<a href="http://'.$row[link].'"><img src="'.$row[image].'" width="140" height="90" /></a>';
	}

	include 'conf/closedb.php';
}

function save_ad($company_name, $link, $email, $telephone_no, $image, $ad_type, $active){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO ads (id, company_name, link, email, telephone_no, image, ad_type, active)
	VALUES ('', '$company_name', '$link', '$email', '$telephone_no', '$image', '$ad_type', '$active')";

	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function list_ads() {
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<table class="job_table" border="1" cellpadding="5">
	<thead>
	<th width="10">Edit</th>
	<th width="100">Ad Type</th>
	<th width="200">Company Name</th>
	<th width="100">Email</th>
	<th width="50">Telephone</th>
	<th width="10">Delete</th>
	</thead>
	<tbody>';

	$result=mysqli_query($conn, "SELECT * FROM ads ORDER BY id DESC");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo '
		<tr>
		<td>
		<a href="add_ads.php?job=edit&id='.$row[id].'"  ><img src="img/edit.png" alt="Edit" /></a>
		</td>

		<td>
		 '.$row[ad_type].'
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
		<a href="add_ads.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><img src="img/close.png" alt="Delete" /></a>
		</td>
	
		</tr>
		';
	}
	echo '</tbody></table>';
	include 'conf/closedb.php';
}

function update_ad($id, $company_name, $link, $email, $telephone_no, $image, $ad_type, $active){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE ads SET
	company_name='$company_name',
	link='$link',
	email='$email',
	telephone_no='$telephone_no',
	image='$image',
	ad_type='$ad_type',
	active='$active'  
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function delete_ad($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "DELETE FROM ads WHERE id='$id'";
	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function get_ad_info($id) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM ads WHERE id='$id'");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return $row;
	}
}

function get_ad_id(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT MAX(id) FROM jobs");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$no=$row['MAX(id)']+1;
		return $no;
	}

	include 'conf/closedb.php';
}

function update_ad_with_out_file($id, $company_name, $link, $email, $telephone_no, $ad_type, $active){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE admins SET
	company_name='$company_name',
	link='$link',
	email='$email',
	telephone_no='$telephone_no',
	ad_type='$ad_type',
	active='$active'  
	WHERE id='$id'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
} 

function featured_employers(){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
	$result=mysqli_query($conn, "SELECT * FROM employer_home_page");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		echo '<div class="col-lg-2" style="margin: 5px;">
                            <div class="timeline-image">
                                <a href="employer_home_page.php?job=display&employer='.$row[user_name].'"><img src="'.$row[logo].'" width="200" height="100" class="img-responsive"/></a>
                            </div>
                            <div class="timeline-image" style="text-align: center;">
                                <h5>'.$row[title].'</h5>
                            </div>
                       
              </div>';
	}

	include 'conf/closedb.php';
}

function featured_employees(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT * FROM employee ORDER by rank DESC LIMIT 20");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{

		echo '<div class="col-lg-12" style="margin-bottom: 10px;">
                <div class="col-lg-3 timeline-image">
                    <a href="view_employee.php?job=view_profile&id='.$row[id].'" target="_blank">';
                    if($row['gender']=="MALE"){
                    echo'<img src="img/man.png" width="200" height="200" class="img-responsive"/></a>';
                    }
                    else {
                        echo'<img src="img/woman.png" width="200" height="200" class="img-responsive"/></a>';
                    }

                echo'</div>
                <div class="timeline-image">
                   <h5><strong>Name: </strong>'.$row[full_name].'</h5>
                   <h5><strong>Edu Qualification: </strong>'.$row[high_edu_qualification].'</h5>
                   <h5><strong>Rating: </strong>'.$row[rank].'</h5>
                </div>
            
              </div>';
	}

	include 'conf/closedb.php';
}

function featured_employers_page(){
		include 'conf/config.php';
	include 'conf/opendb.php';
	echo '<h5>Featured Employers</h5>';
	$result=mysqli_query($conn, "SELECT * FROM employer_home_page");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		
		echo '<a href="employer_home_page.php?job=display&employer='.$row[user_name].'"><img src="'.$row[logo].'" width="140" height="80" style="margin-bottom: 10px; margin-right: 10px;"/></a>';
	}

	include 'conf/closedb.php';
}

function stats(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	echo '<table class="stats_table" cellpadding="5">
	<thead bgcolor="#84C8E5">
	<th>Rank</th>
	<th width="190">Employer</th>
	<th width="220">Employer Status</th>
	<th width="60">Vacancies</th>
	<th width="50" align="center">%</th>
	</thead>
	<tbody>';
	
	$sum=job_count();

	$i=1;

	$result=mysqli_query($conn, "SELECT * FROM stats ORDER BY count DESC");	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		if($i%2==1){
			$bgcolor="#FFFFFF";
		}
		else{
			$bgcolor="#CDE3ED";
		}
		
		if ($row[regi]==1) {
		$status="REGISTERED EMPLOYER";
		}
		else{
		$status="NON REGISTERED EMPLOYER";
		}

		echo '
		<tr bgcolor="'.$bgcolor.'">
		
		<td>'.$i.'</td>
		
		<td>'.$row[employer].'</td>
		

		<td>'.$status.'</td>
		
		<td align="center">'.$row[count].'</td>
		
		<td align="center">'.round(($row[count]/$sum)*100, 2).'</td>
		
		</tr>
		';

		$i++;
	}

	echo '</tbody></table>
	<div style="position: absolute; top: '.($i*25+500).'px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
	';
	
	include 'conf/closedb.php';
}

function job_count(){
	include 'conf/config.php';
	include 'conf/opendb.php';

	$result=mysqli_query($conn, "SELECT sum(count) as sum FROM stats");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		return "$row[sum]";
	}
	
	include 'conf/closedb.php';
}

function list_advertise(){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT * FROM advertise");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo '  <h4 style="text-align: center"><strong>'.$row[title].'</strong></h4>
                <h5>'.$row[text].'</h5>
                <a href="https://'.$row[url].'"><img src="admin/'.$row[image].'" href="'.$row[url].'" alt =" ads on koders" style="width: 6.6cm;"/></a>';
    }

    include 'conf/closedb.php';
}