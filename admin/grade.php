<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/grade_functions.php';

$module_no = 21;
if ($_SESSION['login'] == 1) {

		if ($_REQUEST ['job'] == 'grade_form') {
		
			$smarty->assign ( 'category_names', list_category () );
				$smarty->assign('page', "grade");
				$smarty->display('grade/grade.tpl');
		} 
		
		
		elseif ($_REQUEST['job'] == 'save') {
		
			if($_REQUEST['ok']=='Save'){
			
				$category = $_POST['category'];
				$grade = $_POST['grade'];
				save_grade($category, $grade);
				
				$smarty->assign('category_names', list_category());
				
				$smarty->assign('page', "grade");
				$smarty->display('grade/grade.tpl');
			}
			
			else {
				$id = $_SESSION ['id'];
				$category = $_POST['category'];
				$grade = $_POST['grade'];
	
				update_grade($id, $category, $grade);
				
				
				$smarty->assign('page', "grade");
				$smarty->display('grade/grade.tpl');
			}
		}
		elseif ($_REQUEST['job']=='edit'){
			$info=get_grade_info($_REQUEST['id']);
			$_SESSION['id']=$_REQUEST['id'];
			$smarty->assign('category',$info['category']);
			$smarty->assign('grade',$info['grade']);
			
			$smarty->assign('category_names', list_category());
			$smarty->assign('edit',"on");
			$smarty->assign('page', "grade");
			$smarty->display('grade/grade.tpl');
		}
		elseif ($_REQUEST['job']=='delete'){
			cancel_grade($_REQUEST['id']);
		
			
			$smarty->assign('page', "grade");
				$smarty->display('grade/grade.tpl');
		}
		elseif($_REQUEST['job']=='search'){
			$_SESSION['grade_search']=$_POST['search'];
		
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('search',"$_SESSION[grade_search]");
			$smarty->assign('search_mode',"on");
			$smarty->assign('page', "grade");
				$smarty->display('grade/grade.tpl');
		}
		else{
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page', "grade");
				$smarty->display('grade/grade.tpl');
		}
	} 

 else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}