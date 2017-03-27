<?php
require_once 'conf/smarty-conf.php';
include 'functions/job_functions.php';
include 'functions/advertisement_functions.php';

		$smarty->assign('page',"Post Job");
		$smarty->display('employer_home/employer_job_type.tpl');