<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/booking_functions.php';

if ($_REQUEST['job']=="login"){

	$login=$_POST['user_name'];
	$password=$_POST['password'];

	if (check_login($login, $password)==1){


		$_SESSION['user_name']=$login;

		$user_info=get_user_info($login);
		$_SESSION['login']=1;

		$_SESSION['user_id']=$user_info['id'];
		$_SESSION['full_name']=$user_info['full_name'];
		$_SESSION['email']=$user_info['email'];



			$smarty->assign('page',"User Settings");
			$smarty->display("user_home/user_home.tpl");
		
		
	}

	else {

		$smarty->assign('error_report',"on");
		$smarty->assign('error_message',"Username and password not match");
		$smarty->display('login.tpl');
	}

}

elseif ($_REQUEST['job']=="logout"){

	unset($_SESSION['login']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_id']);
	header('location: index.php');

}

else{
				$smarty->display('login.tpl');
}