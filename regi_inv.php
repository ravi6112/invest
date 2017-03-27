<?php
require_once 'conf/smarty-conf.php';
include 'functions/register_functions.php';
require 'libs/class.phpmailer.php';

if ($_REQUEST['job']=="register"){

	$_SESSION['user_name']=$user_name=$_POST['user_name'];
	$_SESSION['company_name']=$company_name=$_POST['company_name'];
	$_SESSION['email']=$email=$_POST['email'];
	$_SESSION['telephone_no']=$telephone_no=$_POST['telephone_no'];
	$_SESSION['address']=$address=addslashes($_POST['address']);
	$_SESSION['city']=$city=$_POST['city'];
	$_SESSION['country']=$country=$_POST['country'];
	$_SESSION['contact_person']=$contact_person=$_POST['contact_person'];
	$_SESSION['password']=$password=$_POST['password'];
	$_SESSION['password_rep']=$password_rep=$_POST['password_rep'];
	$activation_code=rand(10000,100000);;

	if($password == $password_rep){
		$code=$password;
		$password=md5($password);

		//register_investor($user_name, $password, $company_name, $email, $activation_code, $address, $telephone_no, $contact_person, $city, $country);
		//send_mail_for_activation_to_investor($company_name, $user_name, $email, $activation_code);
		//waiting_investor($user_name);
		$smarty->assign('error',"Thank you for registering. please check Your mail to activate your account.");
	
	$smarty->assign('page',"Activate");
	$smarty->display('investor/activate.tpl');
	}
	else{
		$smarty->assign('error','Password doesn\'t match with repeated password');
		
		$smarty->assign('page',"Register");
	$smarty->display('investor/register.tpl');
	}


}

else{
	
	$smarty->assign('page',"Register");
	$smarty->display('investor/register.tpl');
}


