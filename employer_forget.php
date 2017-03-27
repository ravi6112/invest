<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/register_functions.php';
require 'libs/class.phpmailer.php';
include 'functions/advertisement_functions.php';

if ($_REQUEST['job']=="forget"){

	$email=$_POST['email'];

	send_mail_for_password_reset_to_employer($email);

	$smarty->assign('error', "Please Check Your Mail.");
	$smarty->display('employer_regi/forget_enter_code.tpl');
}

elseif ($_REQUEST['job']=="check"){

	$email=$_POST['email'];
	$code=$_POST['code'];
	$password=$_POST['password'];
	$password_rep=$_POST['password_rep'];


	if (check_mail_and_code_for_employer($email, $code)==1){

		if($password==$password_rep){
			$password=md5($password);
			update_password_for_employer($email, $password);
		}
		else{
		}
		$smarty->assign('error', "Login with your new PASSWORD.");
		$smarty->assign('page',"Forgot Password");
		$smarty->display('employer_home/login.tpl');

	}

	else{
		$smarty->assign('error', "Wrong Code or Email ID.");
		$smarty->assign('page',"Forgot Password");
		$smarty->display('employer_regi/forget_enter_code.tpl');
	}

}

else{
	$smarty->assign('error', "Enter your E-mail Id.");
	$smarty->assign('page',"Forgot Password");
	$smarty->display('employer_regi/forget.tpl');
}