<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/policy_functions.php';

$module_no = 21;

if ($_SESSION['login'] == 1) {

		if ($_REQUEST['job'] == 'update') {
			
				$id = $_SESSION ['id'];
				$policy = $_POST['policy'];
	
				update_policy($id, $policy);
				
			
				$smarty->assign('page', "policy");
				$smarty->display('policy/policy.tpl');
			
		}
		elseif ($_REQUEST['job']=='edit'){
			$info=get_policy_info();
			$_SESSION['id']=$info['id'];
		
			$smarty->assign('policy',$info['policy']);
			
			
			$smarty->assign('edit',"on");
			$smarty->assign('page', "policy");
				$smarty->display('policy/policy.tpl');
		}
		
		else{
            $info=get_policy_info();
            $smarty->assign('policy',$info['policy']);
            
			$_SESSION['id']=$info['id'];
            
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page', "policy");
				$smarty->display('policy/policy.tpl');
		}
	} 

 else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}