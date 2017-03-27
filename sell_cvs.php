<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/advertisement_functions.php';
include 'functions/invester_functions.php';


if ($_SESSION['admin_login']==1){
	
if($_REQUEST['job']=="sell"){	
	$id=$_REQUEST['id'];
	
	sell($id);
	
	$smarty->assign('page','Sell CVs');
	$smarty->display('admin/sell_cv.tpl');
}

else{
	$smarty->assign('page','Sell CVs');
	$smarty->display('admin/sell_cv.tpl');
}

}

else{
	$smarty->assign('page',"Please Login.");
	$smarty->display('admin/login.tpl');
}