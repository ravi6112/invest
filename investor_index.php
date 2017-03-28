<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';
include 'functions/proposal_functions.php';
include 'functions/seeker_functions.php';
include 'admin/functions/advertise_functions.php';

if ($_SESSION['investor_login']==1){

		$smarty->assign('page',"Welcome To Employer home.");
		$smarty->display('investor/investor_index.tpl');
}

else{
	
	if ($_REQUEST['job']=="register"){

		$smarty->assign('page',"Welcome To Employer home.");
		$smarty->display('investor_regi/register.tpl');
	}
	else{
		$smarty->assign('page',"Please Login.");
		$smarty->display('investor/login.tpl');
	}
}