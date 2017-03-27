<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/job_functions.php';
include 'functions/employee_functions.php';
include 'functions/pay_functions.php';
include 'functions/advertisement_functions.php';

$user_name=$_SESSION['user_name'];
if ($_REQUEST['job']=="pay"){

	$count=payment_total($user_name);
	$amount=$count*300;
	if($amount>0){
		$smarty->assign('pending_payment',"Pending Payment is $amount.00/= <br /> <a href='payment_method.php'>Payment Method<a>");
	}
	
	$smarty->assign('page','Post Job');
	$smarty->display('employer_home/select_applicants.tpl');
}

elseif ($_REQUEST['job']=="add_to_pay"){

	$_SESSION['applicant_id']=$applicant_id=$_REQUEST['id'];
	$user_name=$_SESSION['user_name'];
	
	add_to_temp_table($applicant_id, $user_name);
	
	$count=payment_total($user_name);
	$amount=$count*300;
	if($amount>0){
		$smarty->assign('pending_payment',"Pending Payment is $amount.00/= <br /> <a href='payment_method.php'>Payment Method<a>");
	}
	
	$smarty->assign('page','Post Job');
	$smarty->display('employer_home/select_applicants.tpl');
}

elseif ($_REQUEST['job']=="remove"){

	$_SESSION['applicant_id']=$applicant_id=$_REQUEST['id'];
	$user_name=$_SESSION['user_name'];
	
	remove_from_temp_table($applicant_id, $user_name);
	
	$count=payment_total($user_name);
	$amount=$count*300;
	if($amount>0){
		$smarty->assign('pending_payment',"Pending Payment is $amount.00/= <br /> <a href='payment_method.php'>Payment Method<a>");
	}
	$smarty->assign('page','Post Job');
	$smarty->display('employer_home/select_applicants.tpl');
}


elseif ($_REQUEST['job']=="buy"){
	$user_name=$_SESSION['user_name'];
	
	request_to_buy($user_name);
	add_as_pending($user_name);
	delete_temp_table($user_name);
	
	$count=payment_total($user_name);
	$amount=$count*300;
	if($amount>0){
		$smarty->assign('pending_payment',"Pending Payment is $amount.00/= <br /> <a href='payment_method.php'>Payment Method<a>");
	}
	
	$smarty->assign('page','Post Job');
	$smarty->display('employer_home/select_applicants.tpl');
}


else{
	
	$count=payment_total($user_name);
	$amount=$count*300;
	if($amount>0){
		$smarty->assign('pending_payment',"Pending Payment is $amount.00/= <br /> <a href='payment_method.php'>Payment Method<a>");
	}

	$smarty->assign('page','Post Job');
	$smarty->display('employer_home/select_applicants.tpl');
}