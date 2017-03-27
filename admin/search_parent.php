<?php
require_once 'conf/smarty-conf.php';
include 'functions/search_functions.php';
include 'libs/class.phpmailer.php';
include 'libs/class.pop3.php';

if($_SESSION['login']==1){
    $smarty->assign('login', 1);
}

if ($_REQUEST ['job'] == "basic_detail") {
			
          
			$smarty->assign ( 'page', "Search Parent" );
			$smarty->assign ( 'search', "on" );
			$smarty->display ( 'parent/search_parent.tpl' );
		}
        
        elseif ($_REQUEST ['job'] == "search") {
			
			$_SESSION ['email'] = $_REQUEST ['email'];
				
			
          
			$smarty->assign ( 'page', "Search Parent" );
			$smarty->assign ( 'search', "on" );
			$smarty->display ( 'parent/view_parent.tpl' );
		}

else{
            $smarty->assign ( 'page', "Search Parent" );
			$smarty->display ( 'parent/search_parent.tpl' );
}