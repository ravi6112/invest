<?php
require_once 'conf/smarty-conf.php';
include 'functions/user_functions.php';
include 'functions/grade_functions.php';

$module_no = 21;
if ($_SESSION['login'] == 1) {
		if ($_REQUEST ['job'] == 'category_form') {

			$smarty->assign ( 'category_names', list_category() );
			$smarty->assign('page', "subject");
			$smarty->display('subject/subject.tpl');
		}

		
		elseif ($_REQUEST['job']=="save_category"){
			
			$category = $_POST['category'];
			$subject = $_POST['subject'];

			save_subject($category, $subject);
			

			$smarty->assign ( 'category_names', list_category() );

			$smarty->assign('page', "subject");
			$smarty->display('subject/subject.tpl');
		}
		
		
		elseif ($_REQUEST['job'] == 'save_grade') {

			if($_REQUEST['ok']=='Save'){
				
				$category=$_SESSION['category'];
				//$grade = $_POST['grade'];
				$subject = $_POST['subject'];
				save_subject($category, $subject);

				$smarty->assign('category_names', list_category());
				//$smarty->assign('grade_names', list_grade_by_category($_SESSION['category']));
				$smarty->assign('category', "$_SESSION[category]");
				$smarty->assign('page', "subject");
				$smarty->display('subject/subject.tpl');
			}
				
			else {
				$id = $_SESSION ['id'];
				$category=$_SESSION['category'];
				$grade = $_POST['grade'];
				$subject = $_POST['subject'];
				update_subject($id, $category, $grade, $subject);

				$smarty->assign('category_names', list_category());
				$smarty->assign('grade_names', list_grade_by_category($_SESSION['category']));
				$smarty->assign('page', "subject");
				$smarty->display('subject/subject.tpl');
			}
		}
		elseif ($_REQUEST['job']=='edit'){
			$info=get_subject_info($_REQUEST['id']);
			$_SESSION['id']=$_REQUEST['id'];
			$smarty->assign('category',$info['category']);
			$smarty->assign('grade',$info['grade']);
			$smarty->assign('subject',$info['subject']);
			
			$smarty->assign('category_names', list_category());
			$smarty->assign('grade_names', list_grade_by_category($_SESSION['category']));
			$smarty->assign('edit',"on");
			$smarty->assign('page', "subject");
			$smarty->display('subject/subject.tpl');
		}
		elseif ($_REQUEST['job']=='delete'){
			cancel_subject($_REQUEST['id']);

				
			$smarty->assign('page', "subject");
			$smarty->display('subject/subject.tpl');
		}
		elseif($_REQUEST['job']=='search'){
			$_SESSION['grade_search']=$_POST['search'];

			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('search',"$_SESSION[grade_search]");
			$smarty->assign('search_mode',"on");
			$smarty->assign('page', "grade");
			$smarty->display('grade/grade.tpl');
		}
		else{
			$smarty->assign('user_name',"$_SESSION[user_name]");
			$smarty->assign('page', "grade");
			$smarty->display('grade/grade.tpl');
		}
	}
	
else {
	$smarty->assign('error', "<p>Incorrect Login Details!</p>");
	$smarty->display('login.tpl');
}