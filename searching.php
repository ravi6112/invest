<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/employee_functions.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';
if ($_SESSION['employer_login']==1){

	if ($_REQUEST['job']=="search"){
		
		$_SESSION['keyword_for_search']=$keyword_for_search=$_POST['keyword_for_search'];
		$_SESSION['qual_for_search']=$qual_for_search=$_POST['qual_for_search'];
		$_SESSION['gender']=$gender=$_POST['gender'];
		$_SESSION['city']=$city=$_POST['city'];
		$_SESSION['country']=$country=$_POST['country'];
		$_SESSION['age']=$age=$_POST['age'];
		$_SESSION['language']=$language=$_POST['language'];
		$_SESSION['experience']=$experience=$_POST['experience'];
		
		$smarty->assign('keyword_for_search',$keyword_for_search);
		$smarty->assign('qual_for_search',$qual_for_search);
		$smarty->assign('gender',$gender);
		$smarty->assign('age',$age);
		$smarty->assign('city',$city);
		$smarty->assign('country',$country);
		$smarty->assign('language',$language);
		$smarty->assign('experience',$experience);
		$smarty->assign('page',"Search Employee");
		$smarty->display('employer_home/employee_search.tpl');
	}


	else{

		unset($_SESSION['keyword_for_search']);
		unset($_SESSION['qual_for_search']);
		unset($_SESSION['gender']);
		unset($_SESSION['city']);
		unset($_SESSION['country']);
		unset($_SESSION['age']);
		unset($_SESSION['language']);
		unset($_SESSION['experience']);

		$smarty->assign('page',"Search Employee");
		$smarty->display('employer_home/employee_search.tpl');
	}
}

else{
	$smarty->assign('error',"Please Login.");
	$smarty->assign('page',"Home");
	$smarty->display('employer_home/login.tpl');
}