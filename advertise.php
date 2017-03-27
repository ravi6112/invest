<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page','Advertise');
$smarty->display('advertise/advertise.tpl');