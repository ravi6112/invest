<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page','Statistics');
$smarty->display('statistics/statistics.tpl');