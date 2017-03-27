<?php
require_once 'conf/smarty-conf.php';
include 'functions/employee_functions.php';
include 'functions/advertisement_functions.php';

$smarty->assign('notice',"your registration is need a activation please check Your mail.");
$smarty->assign('email', $email);
$smarty->display('employee_home/employee_activate.tpl');
