<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';
include 'functions/advertise_functions.php';
include 'functions/status_functions.php';


$module_no=6;

if ($_SESSION['login']==1) {
    if (check_access($module_no, $_SESSION ['user_id']) == 1) {

        $smarty->assign('page',"Status");
        $smarty->display('seeker/seeker_status.tpl');
    }
    else{
        $smarty->assign ( 'error_report', "on" );
        $smarty->assign ( 'error_message', "Dear $_SESSION[user_name], you don't have permission to Seeker Status." );
        $smarty->assign ( 'page', "Access Error" );
        $smarty->display ( 'user_home/access_error.tpl' );
    }
}


else {

    $smarty->assign ( 'error', "Incorrect Login Details!" );
    $smarty->display('login.tpl');
}