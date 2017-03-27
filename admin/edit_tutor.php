<?php
require_once 'conf/smarty-conf.php';
include 'functions/edit_functions.php';
include 'functions/search_functions.php';
include 'libs/class.phpmailer.php';
include 'libs/class.pop3.php';

if($_SESSION['login']==1){
		
	if ($_REQUEST['job']=="update"){
	
		$id = $_SESSION ['id'];
		$user_id = $_SESSION ['user_id'];
		$title = $_POST ['title'];
		$first_name = $_POST ['first_name'];
		$last_name = $_POST ['last_name'];
		$email= $_POST ['email'];
		$contact_number = $_POST ['contactnum'];
		$streetAddress = $_POST ['streetAddress'];
		$postalCode = $_POST ['postalCode'];
		$nic = $_POST ['nic'];
		$birthday= $_POST ['birthday'];
		$institution = $_POST ['institution'];
		$year_of_exp = $_POST ['year_of_exp'];
		$description = addslashes ( $_POST ['description'] );
		$teacher_type = $_POST ['teacher_type'];
		
		$location = $_POST ['location'];
		$nlocation = count($location);
		if($location[0]=="All Locations"){
			add_all_location($user_id);
			$location_text=get_location_text();
		}
		else{
			for($i=0; $i < $nlocation; $i++)
			{
			add_tutor_has_location($user_id, $location[$i]);
			$location_text=$location[$i].', '.$location_text;
			}
		}
		
		save_location($user_id, $location_text);
		update_tutor($id, $title, $first_name, $last_name, $email, $contact_number);
		update_tutor_basic($user_id, $streetAddress, $postalCode, $nic, $birthday, $institution, $teacher_type, $year_of_exp,$description);
		
		
		$tutor_info=get_tutor_info($id);
		$info=get_edit_tutor_detail_info($user_id);
	
		$smarty->assign('title',$tutor_info['title']);
		$smarty->assign('first_name',$tutor_info['first_name']);
		$smarty->assign('last_name',$tutor_info['last_name']);
		$smarty->assign('email',$tutor_info['email']);
		$smarty->assign('contactnum',$tutor_info['contact_number']);
		$smarty->assign('streetAddress',$info['streetAddress']);
		$smarty->assign('postalCode',$info['postalCode']);
		$smarty->assign('nic',$info['nic']);
		$smarty->assign('birthday',$info['birthday']);
		$smarty->assign('institution',$info['institution']);
		$smarty->assign('year_of_exp',$info['year_of_exp']);
		$smarty->assign('description',$info['description']);
		$smarty->assign('image',$info['image']);	
		$smarty->assign('teacher_type',$info['teacher_type']);		
		
		$smarty->assign ( 'category_names', list_category() );
		$smarty->assign ( 'location_names', list_location_detail() );
		$smarty->assign ( 'teacher_type_names', list_teacher_type() );
		$smarty->assign('page', "Edit");
		$smarty->display('seeker/edit_tutor.tpl');
	
	}
	
	
	
	elseif ($_REQUEST['job']=='edit'){
		$_SESSION['id']=$_REQUEST['id'];
		$tutor_info=get_tutor_info($_REQUEST['id']);
		$info=get_edit_tutor_detail_info($tutor_info['user_id']);
		unset($_SESSION['user_id']);
		
		$_SESSION['user_id']=$tutor_info['user_id'];
	
		$smarty->assign('title',$tutor_info['title']);
		$smarty->assign('first_name',$tutor_info['first_name']);
		$smarty->assign('last_name',$tutor_info['last_name']);
		$smarty->assign('email',$tutor_info['email']);
		$smarty->assign('contactnum',$tutor_info['contact_number']);
		$smarty->assign('streetAddress',$info['streetAddress']);
		$smarty->assign('postalCode',$info['postalCode']);
		$smarty->assign('nic',$info['nic']);
		$smarty->assign('birthday',$info['birthday']);
		$smarty->assign('institution',$info['institution']);
		$smarty->assign('year_of_exp',$info['year_of_exp']);
		$smarty->assign('description',$info['description']);
		$smarty->assign('image',$info['image']);	
		$smarty->assign('teacher_type',$info['teacher_type']);
		
		$smarty->assign ( 'category_names', list_category() );
		$smarty->assign ( 'teacher_type_names', list_teacher_type() );
		$smarty->assign ( 'location_names', list_location_detail() );	
		
	
		$smarty->assign ( 'page', "Edit Tutor" );
		$smarty->display ( 'seeker/edit_tutor.tpl' );
	}
		
	
		
	elseif ($_REQUEST['job']=="delete_subjects"){
		cancel_subjects($_REQUEST['id']);
		
		$tutor_info=get_tutor_info($_SESSION['id']);
		$info=get_edit_tutor_detail_info($tutor_info['user_id']);
	
		$smarty->assign('title',$tutor_info['title']);
		$smarty->assign('first_name',$tutor_info['first_name']);
		$smarty->assign('last_name',$tutor_info['last_name']);
		$smarty->assign('email',$tutor_info['email']);
		$smarty->assign('contactnum',$tutor_info['contact_number']);
		$smarty->assign('streetAddress',$info['streetAddress']);
		$smarty->assign('postalCode',$info['postalCode']);
		$smarty->assign('nic',$info['nic']);
		$smarty->assign('birthday',$info['birthday']);
		$smarty->assign('institution',$info['institution']);
		$smarty->assign('year_of_exp',$info['year_of_exp']);
		$smarty->assign('description',$info['description']);
		$smarty->assign('image',$info['image']);	
		$smarty->assign('teacher_type',$info['teacher_type']);
		
		$smarty->assign ( 'category_names', list_category() );
		$smarty->assign ( 'teacher_type_names', list_teacher_type() );
		$smarty->assign ( 'location_names', list_location_detail() );	
		$smarty->assign('page', "Edit");
		$smarty->display('seeker/edit_tutor.tpl');
	}
		
	elseif ($_REQUEST['job']=="delete_location"){
		cancel_location($_REQUEST['id']);
	
		$tutor_info=get_tutor_info($_SESSION['id']);
		$info=get_edit_tutor_detail_info($tutor_info['user_id']);
	
		$smarty->assign('title',$tutor_info['title']);
		$smarty->assign('first_name',$tutor_info['first_name']);
		$smarty->assign('last_name',$tutor_info['last_name']);
		$smarty->assign('email',$tutor_info['email']);
		$smarty->assign('contactnum',$tutor_info['contact_number']);
		$smarty->assign('streetAddress',$info['streetAddress']);
		$smarty->assign('postalCode',$info['postalCode']);
		$smarty->assign('nic',$info['nic']);
		$smarty->assign('birthday',$info['birthday']);
		$smarty->assign('institution',$info['institution']);
		$smarty->assign('year_of_exp',$info['year_of_exp']);
		$smarty->assign('description',$info['description']);
		$smarty->assign('image',$info['image']);	
		$smarty->assign('teacher_type',$info['teacher_type']);
			
		$smarty->assign('category_names', list_category() );
		$smarty->assign('teacher_type_names', list_teacher_type() );		
		$smarty->assign ( 'location_names', list_location_detail() );	
		$smarty->assign('page', "Edit");
		$smarty->display('seeker/edit_tutor.tpl');
	}
	
	elseif ($_REQUEST['job']=="delete_qualification"){
		cancel_qualification($_REQUEST['id']);
		
		$tutor_info=get_tutor_info($_SESSION['id']);
		$info=get_edit_tutor_detail_info($tutor_info['user_id']);
	
		$smarty->assign('title',$tutor_info['title']);
		$smarty->assign('first_name',$tutor_info['first_name']);
		$smarty->assign('last_name',$tutor_info['last_name']);
		$smarty->assign('email',$tutor_info['email']);
		$smarty->assign('contactnum',$tutor_info['contact_number']);
		$smarty->assign('streetAddress',$info['streetAddress']);
		$smarty->assign('postalCode',$info['postalCode']);
		$smarty->assign('nic',$info['nic']);
		$smarty->assign('birthday',$info['birthday']);
		$smarty->assign('institution',$info['institution']);
		$smarty->assign('year_of_exp',$info['year_of_exp']);
		$smarty->assign('description',$info['description']);
		$smarty->assign('image',$info['image']);	
		$smarty->assign('teacher_type',$info['teacher_type']);
		
		$smarty->assign ( 'category_names', list_category() );
		$smarty->assign ( 'teacher_type_names', list_teacher_type() );
		$smarty->assign ( 'location_names', list_location_detail() );	
		$smarty->assign('page', "Edit");
		$smarty->display('seeker/edit_tutor.tpl');
	}
		
		
		
	elseif ($_REQUEST['job']=="qualification"){
	
		$institution = $_POST ['institution'];
		$qualification = $_POST ['qualification'];
	
	
		$user_id=$_SESSION['user_id'];
		
		$filename = stripslashes ($_FILES['certificate'] ['name']);
		if($filename){
			$file_name=$user_id.'.'.$filename;
			$certificate="../certificate_docs/".$file_name;			
			$certificate_db="certificate_docs/".$file_name;
			$copied = copy($_FILES['certificate']['tmp_name'], $certificate);
		}
		else{
			$certificate="";
		}
	
		save_tutor_qualification($user_id, $institution, $qualification, $certificate_db);
		
		$tutor_info=get_tutor_info($_SESSION['id']);
		$info=get_edit_tutor_detail_info($tutor_info['user_id']);
	
		$smarty->assign('title',$tutor_info['title']);
		$smarty->assign('first_name',$tutor_info['first_name']);
		$smarty->assign('last_name',$tutor_info['last_name']);
		$smarty->assign('email',$tutor_info['email']);
		$smarty->assign('contactnum',$tutor_info['contact_number']);
		$smarty->assign('streetAddress',$info['streetAddress']);
		$smarty->assign('postalCode',$info['postalCode']);
		$smarty->assign('nic',$info['nic']);
		$smarty->assign('birthday',$info['birthday']);
		$smarty->assign('institution',$info['institution']);
		$smarty->assign('year_of_exp',$info['year_of_exp']);
		$smarty->assign('description',$info['description']);
		$smarty->assign('image',$info['image']);	
		$smarty->assign('teacher_type',$info['teacher_type']);
	
		$smarty->assign ( 'category_names', list_category() );
		$smarty->assign ( 'location_names', list_location_detail() );			
		$smarty->assign ( 'teacher_type_names', list_teacher_type() );
		$smarty->assign ( 'page', "Edit Tutor" );
		$smarty->display ( 'seeker/edit_tutor.tpl' );
	}
	
	elseif ($_REQUEST['job']=="profile_pic"){
	
		$user_id=$_SESSION['user_id'];
		
		$filename = stripslashes ($_FILES['profile'] ['name']);
		if($filename){
			$file_name=$user_id.'.'.$filename;
			$profile="../profile/".$file_name;
			$profile_db="/profile/".$file_name;
			$copied = copy($_FILES['profile']['tmp_name'], $profile);
		}
		else{
			$profile_db="";
		}
	
		update_profile($user_id, $profile_db);
		
		$tutor_info=get_tutor_info($_SESSION['id']);
		$info=get_edit_tutor_detail_info($tutor_info['user_id']);
	
		$smarty->assign('title',$tutor_info['title']);
		$smarty->assign('first_name',$tutor_info['first_name']);
		$smarty->assign('last_name',$tutor_info['last_name']);
		$smarty->assign('email',$tutor_info['email']);
		$smarty->assign('contactnum',$tutor_info['contact_number']);
		$smarty->assign('streetAddress',$info['streetAddress']);
		$smarty->assign('postalCode',$info['postalCode']);
		$smarty->assign('nic',$info['nic']);
		$smarty->assign('birthday',$info['birthday']);
		$smarty->assign('institution',$info['institution']);
		$smarty->assign('year_of_exp',$info['year_of_exp']);
		$smarty->assign('description',$info['description']);
		$smarty->assign('image',$info['image']);	
		$smarty->assign('teacher_type',$info['teacher_type']);
	
		$smarty->assign ( 'category_names', list_category() );
		$smarty->assign ( 'location_names', list_location_detail() );			
		$smarty->assign ( 'teacher_type_names', list_teacher_type() );
		$smarty->assign ( 'page', "Edit Tutor" );
		$smarty->display ( 'seeker/edit_tutor.tpl' );
	}
	
	elseif ($_REQUEST['job']=="save_subject"){
	
		$category= $_POST['category'];
		$grade= $_POST['grade'];
		$subject=$_POST['subject'];
		$min_rate=$_POST['min_rate'];		
		$max_rate=$_POST['max_rate'];
		$user_id=$_SESSION['user_id'];
		
		foreach ($grade AS $value){
			if($grade_to_save){
				$grade_to_save=$value.", ".$grade_to_save;
			}
			else{
				$grade_to_save=$value;
			}
			
		}
		
		foreach ($subject AS $value){
			if($subject_to_save){
				$subject_to_save=$value.", ".$subject_to_save;
			}
			else{
				$subject_to_save=$value;
			}
		
		}
		
		save_tutor_fees($user_id, $category, $grade_to_save, $subject_to_save, $min_rate, $max_rate);
		
		
		$tutor_info=get_tutor_info($_SESSION['id']);
		$info=get_edit_tutor_detail_info($tutor_info['user_id']);
	
		$smarty->assign('title',$tutor_info['title']);
		$smarty->assign('first_name',$tutor_info['first_name']);
		$smarty->assign('last_name',$tutor_info['last_name']);
		$smarty->assign('email',$tutor_info['email']);
		$smarty->assign('contactnum',$tutor_info['contact_number']);
		$smarty->assign('streetAddress',$info['streetAddress']);
		$smarty->assign('postalCode',$info['postalCode']);
		$smarty->assign('nic',$info['nic']);
		$smarty->assign('birthday',$info['birthday']);
		$smarty->assign('institution',$info['institution']);
		$smarty->assign('year_of_exp',$info['year_of_exp']);
		$smarty->assign('description',$info['description']);
		$smarty->assign('image',$info['image']);	
		$smarty->assign('teacher_type',$info['teacher_type']);
		
		$smarty->assign ( 'category_names', list_category() );
		$smarty->assign ( 'teacher_type_names', list_teacher_type() );
		$smarty->assign ( 'location_names', list_location_detail() );	
		$smarty->assign ( 'page', "Edit Tutor" );
		$smarty->display ( 'seeker/edit_tutor.tpl' );
		
	}
	
	elseif ($_REQUEST['job']=="done"){
		$user_id=$_SESSION['user_id'];
	
		update_search_field($user_id);
		update_rate($user_id);
		
		
		$smarty->assign('page',"Tutor");
		$smarty->display('seeker/basic_tutor_search.tpl');
	
	}
	else{
		$smarty->assign ( 'page', "Edit Tutor" );
		$smarty->display ( 'seeker/edit_tutor.tpl' );
	}
}
else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}