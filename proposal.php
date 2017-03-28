<?php
require_once 'conf/smarty-conf.php';
include 'functions/seeker_functions.php';
include 'functions/proposal_functions.php';
include 'functions/upload_functions.php';
include 'functions/advertisement_functions.php';

if ($_SESSION['login']==1 || $_SESSION['investor_login']==1 ){
	
	if ($_REQUEST['job']=="create"){
		unset($_SESSION['ref_no']);
		
		$smarty->assign('page','Post Job');
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('seeker/create_proposal.tpl');
	}
	elseif ($_REQUEST['job']=="save"){
		if ($_REQUEST['ok']=='Update Proposal') {
			$id=$_SESSION['id'];
			$info=get_job_info($id);

			$job_title=$_POST['job_title'];
			$catagory=$_POST['catagory'];
			$closing_date=$_POST['closing_date'];
			$contact_mail_id=$_POST['contact_mail_id'];
			$ref_no=$info['ref_no'];
			$main_catagory=$_POST['main_catagory'];
			$keywords=$_POST['keywords'];
			$timing=$_POST['timing'];
			$detail_text=$_POST['detail'];
			
			
				
			update_job($id, $job_title, $detail, $detail_text, $catagory, $closing_date, $contact_mail_id, $main_catagory, $keywords, $timing);
			
		}
		
		else{
				
			$_SESSION['ref_no']=$ref_no=get_proposal_ref_no();
			$_SESSION['title']=$title=$_POST['title'];
			$_SESSION['detail']=$detail=$_POST['detail'];
			echo  $detail;
			$_SESSION['catagory']=$catagory=$_POST['catagory'];
			$_SESSION['investor_type']=$investor_type=$_POST['investor_type'];
			$seeker=$_SESSION['user_name'];
			
			$total_images = count($_FILES['images']['name']);

			for($i=0; $i<$total_images; $i++) {
				$filename = stripslashes ($_FILES['images'] ['name'] [$i]);
				//get the extension of the file in a lower case format
				$extension = getExtension ($filename);
				$extension = strtolower ($extension);
				$x=$i+1;
				$file_name=$ref_no.'-'.$x.'.'.$extension;
				$newname="upload/".$file_name;
				move_uploaded_file($_FILES['images'] ['tmp_name'] [$i],$newname);
				
				save_image_detail($ref_no, $newname);
			  
			}
			
			$total_detailed_report = count($_FILES['detailed_report']['name']);

			for($i=0; $i<$total_detailed_report; $i++) {
				$filename = stripslashes ($_FILES['detailed_report'] ['name'] [$i]);
				//get the extension of the file in a lower case format
				$extension = getExtension ($filename);
				$extension = strtolower ($extension);
				$x=$i+1;
				$file_name=$ref_no.'-'.$x.'.'.$extension;
				$newname="upload/".$file_name;
				move_uploaded_file($_FILES['detailed_report'] ['tmp_name'] [$i],$newname);
				
				save_report_detail($ref_no, $newname);
			  
			}
			
			$total_keyword = count($_POST['keyword']);
				 
			for($i=0; $i < $total_keyword; $i++)
			{
				proposal_has_keyword($ref_no, $_POST['keyword'][$i]);
			}

			
			$filename = stripslashes ($_FILES['cover_pic'] ['name']);
				//get the extension of the file in a lower case format
			$extension = getExtension ($filename);
			$extension = strtolower ($extension);
			$file_name=$ref_no.'.'.$extension;
			$newname="upload/".$file_name;
			move_uploaded_file($_FILES['cover_pic'] ['tmp_name'],$newname);
				
			save_proposal($title, $detail, $catagory, $ref_no, $seeker, $investor_type, $newname);
		}


		$smarty->assign('page',"Post Proposal");
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('seeker/view_proposal.tpl');
	}

	elseif ($_REQUEST['job']=="edit_job"){

		$_SESSION['id']=$id=$_REQUEST['id'];
		$info=get_job_info($id);

		$smarty->assign('job_title',$info['job_title']);
		$smarty->assign('catagory',$info['catagory']);
		$smarty->assign('closing_date',$info['closing_date']);
		$smarty->assign('contact_mail_id',$info['contact_mail_id']);
		$smarty->assign('main_catagory',$info['main_catagory']);
		$smarty->assign('keywords',$info['keywords']);
		$smarty->assign('timing',$info['timing']);
		$smarty->assign('detail_text',$info['detail_text']);
		
		$smarty->assign('edit','true');
		$smarty->assign('page',"Edit Job");
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('seeker/proposal.tpl');

	}
	elseif ($_REQUEST['job']=="delete"){
		delete_job($_REQUEST['id']);

		$smarty->assign('page','Post Job');
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('seeker/list_proposal.tpl');
	}

    elseif ($_REQUEST['job']=="invester"){
	    $ref_no=$_REQUEST['ref_no'];
	    $invester=$_POST['invester'];
        remove_proposal($invester,$ref_no);

        $smarty->assign('page','Post Job');
        $smarty->assign('user_name', $_SESSION['user_name']);
        $smarty->display('seeker/seeker_index.tpl');
    }
	
	elseif ($_REQUEST['job']=="restore"){
		restore_job($_REQUEST['id']);

		$smarty->assign('page','Post Job');
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('seeker/list_proposal.tpl');
	}
    
    elseif ($_REQUEST['job']=="view"){
		$_SESSION['id']=$id=$_REQUEST['id'];

		$smarty->assign('page','Post Job');
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('seeker/proposal_display.tpl');
	}
	 elseif ($_REQUEST['job']=="investor_view"){
		$_SESSION['id']=$id=$_REQUEST['id'];

		$smarty->assign('page','Proposal');
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('investor/proposal_display.tpl');
	}
	else{

		$smarty->assign('page',"Proposal");
		$smarty->assign('user_name', $_SESSION['user_name']);
		$smarty->display('seeker/list_proposal.tpl');
	}
}

else{
	$smarty->assign('error',"Please Login.");
	$smarty->assign('page',"Login");
	$smarty->display('seeker/login.tpl');
}