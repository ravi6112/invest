<?php
include 'functions/advertisement_functions.php';
require_once 'conf/smarty-conf.php';
include 'functions/seeker_functions.php';
include 'functions/proposal_functions.php';
include 'admin/functions/advertise_functions.php';

if ($_REQUEST['job']=="login"){

	$email=$_POST['email'];
	$password=$_POST['password'];
	if (check_seeker_login($email, $password)==1){
		
		$user_info=get_user_info_by_email($email);
		$_SESSION['login']=1;
		$_SESSION['user_name']=$user_info['user_name'];
		$_SESSION['user_id']=$user_info['id'];
		$_SESSION['full_name']=$user_info['full_name'];
		$_SESSION['email']=$user_info['email'];

		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('seeker/seeker_index.tpl');
	}

	else {

		$smarty->assign('error',"Incorrect Login Details Or Inactivate Account.");
		$smarty->display('seeker/login.tpl');
	}

}

elseif ($_REQUEST['job']=="logout"){

	unset($_SESSION['login']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_id']);

    header('location: index.php');

}

else{
		$smarty->display('seeker/login.tpl');
}