<?php
require_once 'conf/smarty-conf.php';
include 'functions/job_functions.php';
require 'libs/class.phpmailer.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page',"Post A Job Now");
$smarty->display('job/post_job.tpl');