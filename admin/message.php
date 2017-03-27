<?php
require_once 'conf/smarty-conf.php';
include 'functions/search_functions.php';
include 'libs/class.phpmailer.php';
include 'libs/class.pop3.php';

if($_SESSION['login']==1){
    $smarty->assign('login', 1);
}

if ($_REQUEST ['job'] == "read_message") {
			
          
			$smarty->assign ( 'page', "Message" );
			$smarty->display ( 'message/read_message.tpl' );
		}
        
        elseif ($_REQUEST ['job'] == "unread_message") {
			
		
          
			$smarty->assign ( 'page', "Message" );
			$smarty->display ( 'message/unread_message.tpl' );
		}
        
        elseif ($_REQUEST['job']=='change_message'){
			change_message_type($_REQUEST['id']);
		
			
            $smarty->assign ( 'page', "Message" );
			$smarty->display ( 'message/unread_message.tpl' );
		}
		
		elseif ($_REQUEST ['job'] == "search") {
			$_SESSION ['from_date'] = $_POST ['from_date'];
			$_SESSION ['to_date'] = $_POST ['to_date'];

			
			$smarty->assign ( 'from_date', $_SESSION ['from_date'] );
			$smarty->assign ( 'to_date', $_SESSION ['to_date'] );
			 $smarty->assign ( 'page', "Message" );
			$smarty->display ( 'message/read_message.tpl' );
		} 

else{
          	$smarty->assign ( 'page', "Message" );
			$smarty->display ( 'message/read_message.tpl' );
}