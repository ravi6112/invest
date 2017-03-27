<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/advertisement_functions.php';
include 'functions/invester_functions.php';

if ($_SESSION['admin_login']==1){
	
if($_REQUEST['job']=="see_employers"){	
	
	$smarty->assign('page','Activate Employers');
	$smarty->display('admin/activate_employers.tpl');
}

elseif($_REQUEST['job']=="activate_employer"){	
	$id=$_REQUEST['id'];
	
	activate_employer($id);
	activate_employer_home_page($id);
	$smarty->assign('page','Activate Employers');
	$smarty->display('admin/activate_employers.tpl');
}

elseif($_REQUEST['job']=="see_jobs"){	
	
	$smarty->assign('page','Activate Jobs');
	$smarty->display('admin/activate_jobs.tpl');
}

elseif($_REQUEST['job']=="all"){	
	
	$smarty->assign('page','All Jobs');
	$smarty->display('admin/all_jobs.tpl');
}

elseif($_REQUEST['job']=="activate_job"){	
	$id=$_REQUEST['id'];
	
	activate_job($id);
	
	$smarty->assign('page','Activate Jobs');
	$smarty->display('admin/activate_jobs.tpl');
}
elseif($_REQUEST['job']=="delete"){	
	$id=$_REQUEST['id'];
	
	delete_job($id);
	
	$smarty->assign('page','All Jobs');
	$smarty->display('admin/all_jobs.tpl');
}

}

else{
	$smarty->assign('page',"Please Login.");
	$smarty->display('admin/login.tpl');
}