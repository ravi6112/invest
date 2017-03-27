<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';

if($_REQUEST['job']=="search_mini"){
	
	$_SESSION['main_catagory']=$main_catagory=$_POST['main_catagory'];
	$_SESSION['timing']=$timing=$_POST['timing'];
	$_SESSION['keyword']=$keyword=$_POST['keyword'];
	


	$smarty->assign('main_catagory',"$main_catagory");
	$smarty->assign('timing',"$timing");
	$smarty->assign('keyword',"$keyword");
	$smarty->assign('page',"Search Jobs");
	$smarty->assign('employee_display',2);
	$smarty->assign('job',5);
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('employee_home/employee_index.tpl');
}

elseif($_REQUEST['job']=="search_mini_page"){
	
	$_SESSION['main_catagory']=$main_catagory=$_REQUEST['main_catagory'];
	$_SESSION['timing']=$timing=$_REQUEST['timing'];
	$_SESSION['keyword']=$keyword=$_REQUEST['keyword'];
	


	$smarty->assign('main_catagory',"$main_catagory");
	$smarty->assign('timing',"$timing");
	$smarty->assign('keyword',"$keyword");
	$smarty->assign('page',"Search Jobs");
	$smarty->assign('employee_display',2);
	$smarty->assign('job',5);
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('employee_home/employee_index.tpl');
}

elseif($_REQUEST['job']=="search_by_ref_no"){
	$_SESSION['ref_no']=$ref_no=$_POST['ref_no'];

	
	$smarty->assign('page','Job Detail');
	$smarty->display('job/view_job.tpl');
}

else{
	$smarty->assign('page',"Flaged Jobs");
	$smarty->assign('employee_display',2);
	$smarty->assign('job',6);
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('employee_home/employee_index.tpl');
}