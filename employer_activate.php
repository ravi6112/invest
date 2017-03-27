<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/advertisement_functions.php';


	$smarty->assign('page',"Activate Here");
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('employer_regi/activate.tpl');