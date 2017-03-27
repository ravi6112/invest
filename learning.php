<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';

$smarty->assign('page','Learning & Development');
$smarty->display('learning/learning.tpl');