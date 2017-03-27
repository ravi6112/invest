<?php
require_once 'conf/smarty-conf.php';
include 'functions/employee_functions.php';
include 'functions/advertisement_functions.php';
if ($_SESSION['login']==1){
	
}

else{
	$smarty->assign('error',"Please Login.");
	$smarty->assign('page',"Home");
	$smarty->display('home/index.tpl');
}