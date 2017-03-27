<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page','Payment Method');
$smarty->display('payment_method/payment_method.tpl');