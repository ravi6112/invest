<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/advertisement_functions.php';

if ($_SESSION['admin_login']==1){
	$smarty->assign('page','List All Employers');
	$smarty->display('admin/all_employers.tpl');
	}

else{
	$smarty->assign('page',"Please Login.");
	$smarty->display('admin/login.tpl');
}