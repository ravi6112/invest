<?php
require_once 'conf/smarty-conf.php';
include 'functions/advertisement_functions.php';
include 'functions/proposal_functions.php';
include 'functions/seeker_functions.php';
include 'admin/functions/advertise_functions.php';

    if($_REQUEST['job']== 'ad_delete'){
        
        $id=$_REQUEST['id'];
        ad_delete($id);
        $smarty->assign('page','Advertise');
        $smarty->display('seeker/seeker_index.tpl');
    }
    else {
        $smarty->assign('page', 'Advertise');
        $smarty->display('advertise/advertise.tpl');
    }