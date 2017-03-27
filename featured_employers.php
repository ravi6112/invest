<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page','Featured Employers');
$smarty->display('featured_employers/featured_employers.tpl');