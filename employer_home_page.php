<?php
require_once 'conf/smarty-conf.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';
include 'functions/upload_functions.php';
include 'functions/invester_functions.php';

if($_REQUEST['job']=="display"){
		$_SESSION['employer_name']=$employer_name=$_REQUEST['employer'];
		
		$info=get_employer_home_page_info($employer_name);

		$smarty->assign('title',"$info[title]");
		$smarty->assign('sub_title',"$info[sub_title]");
		$smarty->assign('logo',"$info[logo]");
		$smarty->assign('detail',"$info[detail]");
		$smarty->assign('page',"Home Page || $employer_name");
		$smarty->display('employer_home/home_page.tpl');

	}

	else{
		save_detail($user_name, $detail);
		header('location: home_page.php');
	}
