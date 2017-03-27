<?php
require_once 'conf/smarty-conf.php';
include 'functions/job_functions.php';
include 'functions/employee_functions.php';
include 'functions/advertisement_functions.php';

if ($_REQUEST['job']=="my_interest"){
	$cima=$_SESSION['cima'];
	$smarty->assign('cima', "$cima");
	$smarty->assign('page','Jobs I Like');
	$smarty->display('employee_home/jobs_i_like.tpl');
}

elseif ($_REQUEST['job']=="capable_jobs"){
	$cima=$_SESSION['cima'];
	$smarty->assign('cima', "$cima");
	$smarty->assign('page','Jobs I Can Do');
	$smarty->display('employee_home/jobs_i_can_do.tpl');
}

else{
	$cima=$_SESSION['cima'];
	$smarty->assign('cima', "$cima");
	$smarty->assign('page',"Welcome To jobseeker home.");
	$smarty->display('employee_home/employee_index.tpl');
}