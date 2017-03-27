<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';

if ($_SESSION['login']==1){

	if($_REQUEST['job']=="unflag"){
		$_SESSION['id']=$id=$_REQUEST['id'];
		unflag_job($id);

		$cima=$_SESSION['cima'];
		$smarty->assign('cima', "$cima");
		$smarty->assign('page',"Flaged Jobs");
		$smarty->display('employee_home/flaged_jobs.tpl');
	}
	
	elseif($_REQUEST['job']=="view"){
		
		$cima=$_SESSION['cima'];
		$smarty->assign('cima', "$cima");
		$smarty->assign('page',"Flaged Jobs");
		$smarty->display('employee_home/flaged_jobs.tpl');
	}
	
	else{
		
		$cima=$_SESSION['cima'];
		$smarty->assign('cima', "$cima");
		$smarty->assign('page',"Flaged Jobs");
		$smarty->display('employee_home/flaged_jobs.tpl');
	}
}

else{
	$smarty->assign('error',"Please Login.");
	$smarty->assign('page',"Login");
	$smarty->display('employee_home/login.tpl');
}