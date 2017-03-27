<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/location_functions.php';

$module_no = 21;

if ($_SESSION['login'] == 1) {

		if ($_REQUEST['job'] == 'save') {
			if($_REQUEST['ok']=='Save'){
				
				$location = $_POST['location'];
				save_location($location);
				
				$smarty->assign('page', "location");
				$smarty->display('location/location.tpl');
			}
			
			else {
				$id = $_SESSION ['id'];
				$location = $_POST['location'];
	
				update_location($id, $location);
				
			
				$smarty->assign('page', "location");
				$smarty->display('location/location.tpl');
			}
		}
		elseif ($_REQUEST['job']=='edit'){
			$info=get_location_info($_REQUEST['id']);
			$_SESSION['id']=$_REQUEST['id'];
		
			$smarty->assign('location',$info['location']);
			
			
			$smarty->assign('edit',"on");
			$smarty->assign('page', "location");
			$smarty->display('location/location.tpl');
		}
		elseif ($_REQUEST['job']=='delete'){
			cancel_location($_REQUEST['id']);
		
			
			$smarty->assign('page', "location");
				$smarty->display('location/location.tpl');
		}
		elseif($_REQUEST['job']=='search'){
			$_SESSION['location_search']=$_POST['search'];
		
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('search',"$_SESSION[location_search]");
			$smarty->assign('search_mode',"on");
			$smarty->assign('page', "location");
				$smarty->display('location/location.tpl');
		}
		else{
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page', "location");
				$smarty->display('location/location.tpl');
		}
	} 

 else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}