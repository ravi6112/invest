<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';

if ($_SESSION['admin_login']==1){
		$smarty->assign('page',"Welcome To jobseeker home.");
		$smarty->display('admin/admin_index.tpl');
}

else{
	$smarty->assign('page',"Please Login.");
	$smarty->display('admin/login.tpl');
}