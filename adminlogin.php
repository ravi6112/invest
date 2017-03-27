<?php
include 'functions/advertisement_functions.php';
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';

if ($_REQUEST['job']=="login"){

	$login=$_POST['login'];
	$passcode=$_POST['password'];

	if (check_admin_login($login, $passcode)==1){

		$user_info=get_admin_info($login);
		$_SESSION['admin_login']=1;
		$_SESSION['user_name']=$login;
		$_SESSION['user_id']=$user_info['id'];

		$smarty->assign('page',"Login");
		$smarty->display('admin/admin_index.tpl');
	}

	else {

		$smarty->assign('error',"Incorrect Login Details!");
		$smarty->display('admin/login.tpl');
	}

}

elseif ($_REQUEST['job']=="logout"){

	unset($_SESSION['admin_login']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_id']);
	
	$smarty->display('admin/login.tpl');

}

else{
	$smarty->display('admin/login.tpl');
}