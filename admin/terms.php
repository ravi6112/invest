<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/terms_functions.php';

$module_no = 21;

if ($_SESSION['login'] == 1) {

		if ($_REQUEST['job'] == 'update') {
			
				$id = $_SESSION ['id'];
				$terms = $_POST['terms'];
	
				update_terms($id, $terms);
				
			
				$smarty->assign('page', "terms");
				$smarty->display('terms/terms.tpl');
			
		}
		elseif ($_REQUEST['job']=='edit'){
			$info=get_terms_info();
			$_SESSION['id']=$info['id'];
		
			$smarty->assign('terms',$info['terms']);
			
			
			$smarty->assign('edit',"on");
			$smarty->assign('page', "terms");
				$smarty->display('terms/terms.tpl');
		}
		
		else{
            $info=get_terms_info();
            $smarty->assign('terms',$info['terms']);
            
			$_SESSION['id']=$info['id'];
            
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page', "terms");
				$smarty->display('terms/terms.tpl');
		}
	} 

 else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}