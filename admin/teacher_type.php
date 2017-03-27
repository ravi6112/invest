<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/teacher_type_functions.php';

$module_no = 21;

if ($_SESSION['login'] == 1) {

		if ($_REQUEST['job'] == 'save') {
			if($_REQUEST['ok']=='Save'){
				
				$teacher_type = $_POST['teacher_type'];
				save_teacher_type($teacher_type);
				
				$smarty->assign('page', "teacher_type");
				$smarty->display('teacher_type/teacher_type.tpl');
			}
			
			else {
				$id = $_SESSION ['id'];
				$teacher_type = $_POST['teacher_type'];
	
				update_teacher_type($id, $teacher_type);
				
			
				$smarty->assign('page', "teacher_type");
				$smarty->display('teacher_type/teacher_type.tpl');
			}
		}
		elseif ($_REQUEST['job']=='edit'){
			$info=get_teacher_type_info($_REQUEST['id']);
			$_SESSION['id']=$_REQUEST['id'];
		
			$smarty->assign('teacher_type',$info['teacher_type']);
			
			
			$smarty->assign('edit',"on");
			$smarty->assign('page', "teacher_type");
			$smarty->display('teacher_type/teacher_type.tpl');
		}
		elseif ($_REQUEST['job']=='delete'){
			cancel_teacher_type($_REQUEST['id']);
		
			
			$smarty->assign('page', "teacher_type");
				$smarty->display('teacher_type/teacher_type.tpl');
		}
		elseif($_REQUEST['job']=='search'){
			$_SESSION['teacher_type_search']=$_POST['search'];
		
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('search',"$_SESSION[teacher_type_search]");
			$smarty->assign('search_mode',"on");
			$smarty->assign('page', "teacher_type");
				$smarty->display('teacher_type/teacher_type.tpl');
		}
		else{
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page', "teacher_type");
				$smarty->display('teacher_type/teacher_type.tpl');
		}
	} 

 else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}