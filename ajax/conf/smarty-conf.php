<?php
session_start();
ini_set("session.gc_maxlifetime", "18000"); 

require('libs/Smarty.class.php');
$smarty = new Smarty;

ini_set ('displayerrors', true);
error_reporting (E_ALL + E_NOTICE);
