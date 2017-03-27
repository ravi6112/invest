<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/assignment_functions.php';
include 'functions/policy_functions.php';

$module_no = 21;

if ($_SESSION['login'] == 1) {

		if ($_REQUEST['job'] == 'assignment') {
			
				$smarty->assign('page', "assignment");
				$smarty->display('assignment/basic_assignment_view.tpl');
			
		}
		elseif ($_REQUEST['job'] == 'booking_assignment') {
				
			$smarty->assign('page', "assignment");
			$smarty->display('assignment/booking_assignment.tpl');
				
		}
		
		elseif ($_REQUEST ['job'] == "more_detail") {
			$_SESSION ['assignment_id'] = $_REQUEST ['assignment_id'];
		
			$smarty->assign ( 'page', "Assignment" );
			$smarty->assign ( 'search', "on" );
			$smarty->display ( 'assignment/assignment_full_view.tpl' );
		}
		
		elseif ($_REQUEST['job']=='delete_assignment'){
		
			$table='assignment';
			delete_assignment($table, $_REQUEST['id']);
		
				$smarty->assign('page', "assignment");
				$smarty->display('assignment/basic_assignment_view.tpl');
		}
		
		elseif ($_REQUEST['job']=='delete_booking_assignment'){
		
			$table='assignment_booking';
			delete_assignment($table, $_REQUEST['id']);
		
			$smarty->assign('page', "assignment");
			$smarty->display('assignment/booking_assignment.tpl');
		}

		elseif ($_REQUEST['job']=='edit_assignment'){
			
			$_SESSION['id']=$_REQUEST['id'];
			
			$assignment_info=get_assignment_info($_REQUEST['id']);
	
			unset($_SESSION['assignment_id']);
		
			$_SESSION['assignment_id']=$assignment_info['assignment_id'];
		
			$smarty->assign('category',$assignment_info['level']);
			$smarty->assign('subject',$assignment_info['subject']);
			$smarty->assign('stu_gender',$assignment_info['stu_gender']);
			$smarty->assign('stu_race',$assignment_info['stu_race']);
			$smarty->assign('rate',$assignment_info['rate']);
			$smarty->assign('no_of_lession',$assignment_info['no_of_lession']);
			$smarty->assign('duration',$assignment_info['duration']);
			$smarty->assign('address',$assignment_info['address']);
			$smarty->assign('location',$assignment_info['location']);
			$smarty->assign('tut_gender',$assignment_info['tut_gender']);
			$smarty->assign('teacher_type',$assignment_info['teacher_type']);
			$smarty->assign('remarks',$assignment_info['remarks']);
			$smarty->assign('tutor_id',$assignment_info['tutor_id']);
					
			$smarty->assign ( 'category_names', list_category() );
			$smarty->assign ( 'grade_names', list_grade() );
			$smarty->assign ( 'subject_names', list_subject() );
			$smarty->assign ( 'location_names', list_location_detail() );
		
			$smarty->assign ( 'teacher_type_names', list_teacher_type() );
							
			$smarty->assign ( 'page', "Edit Assignment" );
			$smarty->display ( 'assignment/edit_assignment.tpl' );
		}
		
		if ($_REQUEST['job']=="update_assignments"){
		
			$id = $_SESSION ['id'];
			$category= $_POST ['category'];
			$subject = $_POST ['subject'];
			$stu_gender = $_POST ['stu_gender'];
			$stu_race= $_POST ['stu_race'];
			$rate = $_POST ['rate'];
			$no_of_lession = $_POST ['no_of_lession'];
			$duration = $_POST ['duration'];
			
			$address = $_POST ['address'];
			$location = $_POST ['location'];
			$tut_gender = $_POST ['tut_gender'];
			
			$teacher_type = $_POST ['teacher_type'];
			$remarks = $_POST ['remarks'];
			
			update_assignment($id, $category, $subject, $stu_gender, $stu_race, $rate, $no_of_lession, $duration, $address, $location, $tut_gender, $teacher_type, $remarks);
			
			$assignment_info=get_assignment_info($id);
		
			$_SESSION['assignment_id']=$assignment_info['assignment_id'];
		
			$smarty->assign('category',$assignment_info['level']);
			$smarty->assign('subject',$assignment_info['subject']);
			$smarty->assign('stu_gender',$assignment_info['stu_gender']);
			$smarty->assign('stu_race',$assignment_info['stu_race']);
			$smarty->assign('rate',$assignment_info['rate']);
			$smarty->assign('no_of_lession',$assignment_info['no_of_lession']);
			$smarty->assign('duration',$assignment_info['duration']);
			$smarty->assign('address',$assignment_info['address']);
			$smarty->assign('location',$assignment_info['location']);
			$smarty->assign('tut_gender',$assignment_info['tut_gender']);
			$smarty->assign('teacher_type',$assignment_info['teacher_type']);
			$smarty->assign('remarks',$assignment_info['remarks']);
			$smarty->assign('tutor_id',$assignment_info['tutor_id']);
					
			$smarty->assign ( 'category_names', list_category() );
			$smarty->assign ( 'grade_names', list_grade() );
			$smarty->assign ( 'subject_names', list_subject() );
			$smarty->assign ( 'location_names', list_location_detail() );
		
			$smarty->assign ( 'teacher_type_names', list_teacher_type() );

			
				
				$smarty->assign ( 'page', "Edit Assignment" );
				$smarty->display ( 'assignment/edit_assignment.tpl' );
		
	}
		
		
		
		
	} 

 else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}