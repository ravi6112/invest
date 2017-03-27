<?php
require_once 'conf/smarty-conf.php';
include 'functions/booking_functions.php';
include 'libs/class.phpmailer.php';
include 'libs/class.pop3.php';

if($_SESSION['login']==1){
    $smarty->assign('login', 1);
}

if ($_REQUEST ['job'] == "contact_tutor") {
			
          
			$smarty->assign ( 'page', "Booking" );
			$smarty->assign ( 'search', "on" );
			$smarty->display ( 'booking_tutor/contact.tpl' );
		}
        
        elseif ($_REQUEST ['job'] == "pending") {
			
		
          
			$smarty->assign ( 'page', "Booking" );
			$smarty->assign ( 'search', "on" );
			$smarty->display ( 'booking_tutor/pending.tpl' );
		}
		
		
		
		
        
        elseif ($_REQUEST['job']=='change_contact'){
			change_contact_type($_REQUEST['id']);
		
			
            $smarty->assign ( 'page', "Booking" );
			$smarty->display ( 'booking_tutor/pending.tpl' );
		}
		
		

else{
          $smarty->assign ( 'page', "Booking" );
		$smarty->display ( 'booking_tutor/contact.tpl' );
}