<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';
include 'functions/advertise_functions.php';
include 'functions/post_functions.php';
include '../functions/proposal_functions.php';


$module_no=6;

if ($_SESSION['login']==1) {
    if (check_access($module_no, $_SESSION ['user_id']) == 1) {
        if ($_REQUEST['job']=='block'){
            $ref_no=$_REQUEST['ref_no'];

            block_post($ref_no);

        }

        elseif ($_REQUEST['job']=='approve'){
            $ref_no=$_REQUEST['ref_no'];

            approve_post($ref_no);

        }

        else {
            $smarty->assign('page', 'Post');
            $smarty->display('post/post.tpl');
        }
        $smarty->assign('page', 'Post');
        $smarty->display('post/post.tpl');

    }
    else{
            $smarty->assign ( 'error_report', "on" );
            $smarty->assign ( 'error_message', "Dear $_SESSION[user_name], you don't have permission to Module Management." );
            $smarty->assign ( 'page', "Access Error" );
            $smarty->display ( 'user_home/access_error.tpl' );
        }
    }


    else {

        $smarty->assign ( 'error', "Incorrect Login Details!" );
        $smarty->display('login.tpl');
    }
