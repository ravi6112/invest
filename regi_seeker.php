<?php
include 'functions/advertisement_functions.php';
require_once 'conf/smarty-conf.php';
include 'functions/register_functions.php';
include 'libs/class.phpmailer.php';

if ($_REQUEST['job']=="register_form"){

	$smarty->assign('page',"Register");
	$smarty->display('seeker/register.tpl');
}

elseif ($_REQUEST['job']=="register"){

	$_SESSION['user_name']=$user_name=$_POST['user_name'];
	$_SESSION['email']=$email=$_POST['email'];
	$_SESSION['password']=$password=$_POST['password'];
	$_SESSION['password_rep']=$password_rep=$_POST['password_rep'];
	$activation_code=rand(10000,100000);;

	if($password == $password_rep && user_name_check($user_name)==0){
		$code=$password;
		$password=md5($password);

		register($user_name, $password, $email, $activation_code);
		send_mail_for_activation($full_name, $user_name, $email, $activation_code);
		create_seeker_entry($user_name);
		
		$smarty->assign('error',"Thank you for registering. Please check Your mail to activate your account.");
		$smarty->assign('email', $email);
		$smarty->display('seeker/activate.tpl');
		
	}
	else{
		$smarty->assign('error','Password doesn\'t match with repeated password or you entered an invalid username');
		$smarty->display('seeker/register.tpl');
		
	}


}

elseif ($_REQUEST['job']=="activate"){
	
	$email=$_POST['email'];
	$activation_code=$_POST['activation_code'];
	
	activate_account($email, $activation_code);
	$smarty->assign('error',"Your Activation Is Sucessful You Can Login Now");
	
	$smarty->display('seeker/login.tpl');
		
	
}


else{
	$smarty->assign('page',"Register");
	$smarty->display('seeker/register.tpl');
}


