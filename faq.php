<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page','Faq');
$smarty->display('faq/faq.tpl');