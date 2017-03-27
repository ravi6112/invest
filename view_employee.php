<?php
require_once 'conf/smarty-conf.php';
include 'functions/job_functions.php';
include 'functions/employee_functions.php';
include 'functions/advertisement_functions.php';
if ($_SESSION['login']==1 || $_SESSION['employer_login']==1 || $_SESSION['admin_login']==1){
	if ($_REQUEST['job']=="view_profile"){
	
		$id=$_REQUEST['id'];
		$info=get_employee_info_by_id($id);

		$smarty->assign('full_name',"$info[full_name]");
		$smarty->assign('name_with_initial',"$info[name_with_initial]");
		$smarty->assign('high_edu_qualification',"$info[high_edu_qualification]");
		$smarty->assign('prof_qualification',"$info[prof_qualification]");
		$smarty->assign('area_interest',"$info[area_interest]");
		$smarty->assign('area_capable',"$info[area_capable]");
		$smarty->assign('language_skill',"$info[language_skill]");
		$smarty->assign('latest_experience',"$info[latest_experience]");
		$smarty->assign('dob',"$info[dob]");
		$smarty->assign('gender',"$info[gender]");
		$smarty->assign('email',"$info[email]");
		$smarty->assign('address',"$info[address]");
		$smarty->assign('city',"$info[city]");
		$smarty->assign('country',"$info[country]");
		$smarty->assign('telephone_no_1',"$info[telephone_no_1]");
		$smarty->assign('telephone_no_2',"$info[telephone_no_2]");
		$smarty->assign('page',"Welcome To jobseeker home.");
		$smarty->display('employer_home/view_profile.tpl');
	}
	
	elseif ($_REQUEST['job']=="view_profile_full"){
	
		$id=$_REQUEST['id'];
		$info=get_employee_info_by_id($id);
	
		$smarty->assign('full_name',"$info[full_name]");
		$smarty->assign('name_with_initial',"$info[name_with_initial]");
		$smarty->assign('high_edu_qualification',"$info[high_edu_qualification]");
		$smarty->assign('prof_qualification',"$info[prof_qualification]");
		$smarty->assign('area_interest',"$info[area_interest]");
		$smarty->assign('area_capable',"$info[area_capable]");
		$smarty->assign('language_skill',"$info[language_skill]");
		$smarty->assign('latest_experience',"$info[latest_experience]");
		$smarty->assign('dob',"$info[dob]");
		$smarty->assign('gender',"$info[gender]");
		$smarty->assign('email',"$info[email]");
		$smarty->assign('address',"$info[address]");
		$smarty->assign('city',"$info[city]");
		$smarty->assign('country',"$info[country]");
		$smarty->assign('telephone_no_1',"$info[telephone_no_1]");
		$smarty->assign('telephone_no_2',"$info[telephone_no_2]");
		

		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->assign('page',"Welcome To jobseeker home.");
		$smarty->display('employee_home/view_profile.tpl');
	}
	
	elseif ($_REQUEST['job']=="view_profile_full_as_admin"){
	
		$id=$_REQUEST['id'];
		$info=get_employee_info_by_id($id);
	
		$smarty->assign('full_name',"$info[full_name]");
		$smarty->assign('name_with_initial',"$info[name_with_initial]");
		$smarty->assign('high_edu_qualification',"$info[high_edu_qualification]");
		$smarty->assign('prof_qualification',"$info[prof_qualification]");
		$smarty->assign('area_interest',"$info[area_interest]");
		$smarty->assign('area_capable',"$info[area_capable]");
		$smarty->assign('language_skill',"$info[language_skill]");
		$smarty->assign('latest_experience',"$info[latest_experience]");
		$smarty->assign('dob',"$info[dob]");
		$smarty->assign('gender',"$info[gender]");
		$smarty->assign('email',"$info[email]");
		$smarty->assign('address',"$info[address]");
		$smarty->assign('city',"$info[city]");
		$smarty->assign('country',"$info[country]");
		$smarty->assign('telephone_no_1',"$info[telephone_no_1]");
		$smarty->assign('telephone_no_2',"$info[telephone_no_2]");
	
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->assign('page',"Job Seeker's Detail");
		$smarty->display('admin/view_profile.tpl');
	}
	
	else{
	}
}
else{
	$smarty->assign('error',"Please Login");
	$smarty->assign('page',"Welcome To jobseeker home.");
	$smarty->display('employee_home/employee_index.tpl');
}