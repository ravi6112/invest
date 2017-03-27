<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';

if ($_REQUEST['job']=="list"){
	$_SESSION['catagory']=$catagory=$_REQUEST['catagory'];

	$smarty->assign('page',"Job By Catagory");
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('employee_home/employee_index.tpl');
}

elseif($_REQUEST['job']=="catagory"){
	unset($_SESSION['catagory']);

	$smarty->assign('page',"Jobs");
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('employee_home/employee_index.tpl');
}

else{
	$smarty->assign('page',"Job By Catagory");
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('employee_home/employee_index.tpl');
}
