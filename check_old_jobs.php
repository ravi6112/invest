<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';

if ($_SESSION['employer_login']==1){

	if ($_REQUEST['job']=="jobs_in_detail"){

		$smarty->assign('page',"Check Old Jobs");
		$smarty->display('employer_home/employer_check_old_jobs.tpl');
	}


	else{

		$smarty->assign('page',"Check Old Jobs");
		$smarty->display('employer_home/employer_check_old_jobs.tpl');
	}
}

else{
	$smarty->assign('error',"Please Login.");
	$smarty->assign('page',"Home");
	$smarty->display('employer_home/login.tpl');
}