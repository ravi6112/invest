<?php
include 'functions/advertisement_functions.php';
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';

if ($_REQUEST['job']=="login"){

	$login=$_POST['login'];
	$password=$_POST['password'];

	if (check_employer_login($login, $password)==1){

		$user_info=get_employer_info($login);
		$_SESSION['employer_login']=1;
		$_SESSION['user_name']=$login;
		$_SESSION['user_id']=$user_info['id'];
		$_SESSION['company_name']=$user_info['company_name'];

		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('employer_home/employer_index.tpl');
	}

	else {

		$smarty->assign('error',"Incorrect Login Details Or Inactivate Account.  <a href='employer_forget.php'>Forget Password</a> <a href='employer_activate.php'>Activate</a>");
		$smarty->display('employer_home/employer_index.tpl');
	}

}

elseif ($_REQUEST['job']=="logout"){

	unset($_SESSION['employer_login']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_id']);
	unset($_SESSION['company_name']);
	
	$smarty->assign('page',"Home");
	$smarty->display('home/index.tpl');

}

else{
		$smarty->display('employer_home/login.tpl');
}