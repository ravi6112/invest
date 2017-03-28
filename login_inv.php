<?php
include 'functions/advertisement_functions.php';
require_once 'conf/smarty-conf.php';
include 'functions/investor_functions.php';
include 'functions/proposal_functions.php';
include 'admin/functions/advertise_functions.php';
include 'functions/seeker_functions.php';
//include 'functions/job_functions.php';

if ($_REQUEST['job']=="login"){

	$login=$_POST['login'];
	$password=$_POST['password'];
	if (check_investor_login($login, $password)==1){

		$user_info=get_investor_info($login);
		$_SESSION['investor_login']=1;
		$_SESSION['user_name']=$login;
		$_SESSION['user_id']=$user_info['id'];
		$_SESSION['full_name']=$user_info['full_name'];
		$_SESSION['email']=$user_info['email'];

		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('investor/investor_index.tpl');
	}

	else {

		$smarty->assign('error',"Incorrect Login Details Or Inactivate Account.");
		$smarty->display('investor/login.tpl');
	}

}

elseif ($_REQUEST['job']=="logout"){

	unset($_SESSION['login']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_id']);
	
	header('location: index.php');

}

else{
		$smarty->display('investor/login.tpl');
}