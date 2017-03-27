<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/category_functions.php';

$module_no = 21;

if ($_SESSION['login'] == 1) {
	
		if ($_REQUEST['job'] == 'save') {
			if($_REQUEST['ok']=='Save'){
				
				$category = $_POST['category'];
				save_category($category);
				
				$smarty->assign('page', "category");
				$smarty->display('category/category.tpl');
			}
			
			else {
				$id = $_SESSION ['id'];
				$category = $_POST['category'];
	
				update_category($id, $category);
				
			
				$smarty->assign('page', "category");
				$smarty->display('category/category.tpl');
			}
		}
		elseif ($_REQUEST['job']=='edit'){
			$info=get_category_info($_REQUEST['id']);
			$_SESSION['id']=$_REQUEST['id'];
		
			$smarty->assign('category',$info['category']);
			
			
			$smarty->assign('edit',"on");
			$smarty->assign('page', "category");
			$smarty->display('category/category.tpl');
		}
		elseif ($_REQUEST['job']=='delete'){
			cancel_category($_REQUEST['id']);
		
			
			$smarty->assign('page', "category");
				$smarty->display('category/category.tpl');
		}
		elseif($_REQUEST['job']=='search'){
			$_SESSION['category_search']=$_POST['search'];
		
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('search',"$_SESSION[category_search]");
			$smarty->assign('search_mode',"on");
			$smarty->assign('page', "category");
				$smarty->display('category/category.tpl');
		}
		else{
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page', "category");
				$smarty->display('category/category.tpl');
		}
	} 

 else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}