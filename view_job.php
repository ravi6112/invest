<?php
require_once 'conf/smarty-conf.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';
if ($_REQUEST['job']=="display"){
	$_SESSION['ref_no']=$ref_no=$_REQUEST['ref_no'];

	
	$smarty->assign('page','Job Detail');
	$smarty->display('job/view_job.tpl');
}

elseif ($_REQUEST['job']=="display_applications"){
	
	$_SESSION['ref_no']=$ref_no=$_REQUEST['ref_no'];

		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('job/view_job_with_applications.tpl');
}
else{

	$smarty->assign('page','Job Detail');
	$smarty->display('job/view_job.tpl');
}