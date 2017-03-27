<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/advertisement_functions.php';

if ($_SESSION['admin_login']==1){
	if ($_REQUEST['job']=="rank"){
		$id=$_REQUEST['id'];
		$rank=$_POST['rank'];
		
		update_rank($rank, $id);	
		
		$smarty->assign('page','List All Employees');
		$smarty->display('admin/all_employees.tpl');
	
	}
	else{
	$smarty->assign('page','List All Employees');
	$smarty->display('admin/all_employees.tpl');
	}
}


else{
	$smarty->assign('page',"Please Login.");
	$smarty->display('admin/login.tpl');
}