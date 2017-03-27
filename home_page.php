<?php
require_once 'conf/smarty-conf.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';
include 'functions/upload_functions.php';
include 'functions/invester_functions.php';

if ($_SESSION['employer_login']==1){
	if($_REQUEST['job']=="save"){
		$user_name=$_SESSION['user_name'];
		$title=$_POST['title'];
		$sub_title=$_POST['sub_title'];
		$detail=$_POST['detail'];
		
		//get the original name of the file from the clients machine
		$filename = stripslashes ($_FILES['logo'] ['name']);
		//get the extension of the file in a lower case format
		$extension = getExtension ($filename);
		$extension = strtolower ($extension);

		$file_name='logo_'.$user_name.'.'.$extension;
		$newname="upload/".$file_name;
		$copied = copy($_FILES['logo']['tmp_name'],$newname);
		$logo=$newname;

		save_home_page($user_name, $title, $sub_title, $detail, $logo);
		$info=get_home_page_details($user_name);

		$smarty->assign('title',$info[title]);
		$smarty->assign('sub_title',$info[sub_title]);
		$smarty->assign('logo',"<img src='$info[logo]' alt='Logo' width='140' height='80' />");
		$smarty->assign('detail',$info[detail]);

		$smarty->assign('page',"Create Home Page");
		$smarty->display('employer_home/create_home_page.tpl');
	}

	else{
		$user_name=$_SESSION['user_name'];
		$info=get_home_page_details($user_name);

		$smarty->assign('title',$info[title]);
		$smarty->assign('sub_title',$info[sub_title]);
		$smarty->assign('logo',"<img src='$info[logo]' alt='Logo' width='140' height='80' />");
		$smarty->assign('detail',$info[detail]);

		$smarty->assign('page',"Create Home Page");
		$smarty->display('employer_home/create_home_page.tpl');
	}
}
else{
	$smarty->assign('error',"Please Login.");
	$smarty->assign('page',"Login");
	$smarty->display('employer_home/login.tpl');
}