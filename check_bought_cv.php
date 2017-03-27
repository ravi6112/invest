<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/employee_functions.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page','See Full CV');
	$smarty->display('employer_home/see_full_cv.tpl');
