<?php
require_once 'conf/smarty-conf.php';
include 'functions/seeker_functions.php';
include 'functions/register_functions.php';
require 'libs/class.phpmailer.php';
include 'functions/advertisement_functions.php';

if ($_REQUEST['job']=="forget"){

	$email=$_POST['email'];

	send_mail_for_password_reset($email);
	
	$smarty->assign('error', "Please Check Your Mail for the Code.");
	$smarty->display('seeker/forget_code.tpl');
}

elseif ($_REQUEST['job']=="check"){

	$email=$_POST['email'];
	$code=$_POST['code'];
	$password=$_POST['password'];
	$password_rep=$_POST['password_rep'];


	if (check_mail_and_code($email, $code)==1){

		if($password==$password_rep){
			$password=md5($password);
			update_password($email, $password);
		}
		else{
		}
		$smarty->assign('error', "Login with your new Password.");
		$smarty->assign('page',"Forgot Password");
		$smarty->display('seeker/login.tpl');

	}

	else{
		$smarty->assign('error', "Wrong Code or Email ID.");
		$smarty->assign('page',"Forgot Password");
		$smarty->display('seeker/forget_code.tpl');
	}

}

else{
	$smarty->assign('error', "Enter your E-mail Id.");
	$smarty->assign('page',"Forgot Password");
		$smarty->display('seeker/forget.tpl');
}