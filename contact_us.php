<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page','Contact Us');
$smarty->display('contact_us/contact_us.tpl');