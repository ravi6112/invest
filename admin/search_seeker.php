<?php
require_once 'conf/smarty-conf.php';
include 'functions/search_functions.php';
include 'functions/edit_functions.php';
include 'libs/class.phpmailer.php';
include 'libs/class.pop3.php';

if($_SESSION['login']==1){
    $smarty->assign('login', 1);
}

if ($_REQUEST ['job'] == "search") {	
	$_SESSION ['user_id'] = $_REQUEST ['user_id'];
  
	$smarty->assign ( 'page', "Search Tutor" );
	$smarty->assign ( 'search', "on" );
	$smarty->display ( 'tutor/search_tutor.tpl' );
}

elseif ($_REQUEST ['job'] == "basic_detail") {
	$smarty->assign ( 'page', "Search Seeker" );
	$smarty->assign ( 'search', "on" );
	$smarty->display ( 'seeker/basic_seeker_search.tpl' );
}

elseif ($_REQUEST ['job'] == "edit_tutor") {	
	$_SESSION ['user_id'] = $_REQUEST ['user_id'];
  
	$smarty->assign ( 'category_names', list_category() );
	$smarty->assign ( 'grade_names', list_grade() );
	$smarty->assign ( 'subject_names', list_subject() );
	$smarty->assign ( 'teacher_type_names', list_teacher_type() );
	$smarty->assign('teacher_type',$teacher_type);
	$smarty->assign ( 'page', "Edit Tutor" );
	$smarty->display('tutor/edit_tutor.tpl');
			
}



elseif ($_REQUEST ['job'] == 'approve') {
	$id = $_REQUEST ['id'];
	$approve = $_POST ['approve'];

	update_approve($id, $approve);
	$smarty->assign ( 'page', "Search Tutor" );
	$smarty->display ( 'tutor/search_tutor.tpl' );

}

elseif ($_REQUEST ['job'] == 'reject') {
	$id = $_REQUEST ['id'];
	$approve = $_POST ['approve'];

	update_reject($id, $approve );
	$smarty->assign ( 'page', "Search Tutor" );
	$smarty->display ( 'tutor/search_tutor.tpl' );

}

elseif ($_REQUEST ['job'] == 'delete') {
	$id = $_REQUEST ['id'];
	$table = 'tutor';
	
	$tutor_info=get_tutor_info($_REQUEST['id']);
	
	cancel($table, $id);
	cancel_related_details($tutor_info['user_id']);
	
	$smarty->assign ( 'page', "Search Tutor" );
	$smarty->display ( 'tutor/basic_tutor_search.tpl' );
}

else{
	unset($_SESSION ['user_id']);
	$smarty->assign ( 'page', "Search Tutor" );
	$smarty->display ( 'tutor/search_tutor.tpl' );
}