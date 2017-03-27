<?php
require_once 'conf/smarty-conf.php';
//include 'functions/job_functions.php';
include 'functions/seeker_functions.php';
include 'functions/proposal_functions.php';
include 'admin/functions/advertise_functions.php';
include 'functions/advertisement_functions.php';


if ($_SESSION['login']==1){
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->assign('page',"Welcome To Seeker home.");
	$smarty->display('seeker/seeker_index.tpl');
}

else{
	$smarty->assign('page',"Welcome To Seeker home.");
	$smarty->display('seeker/login.tpl');
}
