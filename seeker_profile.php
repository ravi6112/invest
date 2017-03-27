<?php
require_once 'conf/smarty-conf.php';
include 'functions/seeker_functions.php';
include 'functions/upload_functions.php';
include 'functions/advertisement_functions.php';

if ($_SESSION['login']==1){
	
	if($_REQUEST['job']=="view"){
			$user_name=$_SESSION['user_name'];
			$info=get_user_detailed_info($user_name);

			$smarty->assign('full_name',$info['full_name']);
            $smarty->assign('email', $info['email']);
			$smarty->assign('mobile',$info['mobile']);
			$smarty->assign('address',$info['address']);
			$smarty->assign('fb',$info['fb']);
            $smarty->assign('twitter', $info['twitter']);
			$smarty->assign('linkedin',$info['linkedin']);
			$smarty->assign('google_plus',$info['google_plus']);			
			$smarty->assign('company',$info['company']);
			$smarty->assign('designation',$info['designation']);
			$smarty->assign('company_telephone',$info['company_telephone']);
			$smarty->assign('company_email',$info['company_email']);
			$smarty->assign('company_address',$info['company_address']);			
			$smarty->assign('image',$info['profile_pic']);
			
			$smarty->assign('page',"Fill Your Details");
			$smarty->display('seeker/view_profile.tpl');

	}
	
	elseif($_REQUEST['job']=="save_pic"){
			$user_name=$_SESSION['user_name'];
			
			
			$filename = stripslashes ($_FILES['profile_pic'] ['name']);
			//get the extension of the file in a lower case format
			$extension = getExtension ($filename);
			$extension = strtolower ($extension);
			$strtime=strtotime("now");
			$file_name=$user_name.'-'.$strtime.'.'.$extension;								
			$newname="images/profile/".$file_name;
			$copied = copy($_FILES['profile_pic']['tmp_name'],$newname);
			
			update_profile_pic_link($user_name, $newname);
						
			$info=get_user_detailed_info($user_name);

			$smarty->assign('full_name',$info['full_name']);
            $smarty->assign('email', $info['email']);
			$smarty->assign('mobile',$info['mobile']);
			$smarty->assign('address',$info['address']);
			$smarty->assign('fb',$info['fb']);
            $smarty->assign('twitter', $info['twitter']);
			$smarty->assign('linkedin',$info['linkedin']);
			$smarty->assign('google_plus',$info['google_plus']);			
			$smarty->assign('company',$info['company']);
			$smarty->assign('designation',$info['designation']);
			$smarty->assign('company_telephone',$info['company_telephone']);
			$smarty->assign('company_email',$info['company_email']);
			$smarty->assign('company_address',$info['company_address']);			
			$smarty->assign('image',$info['profile_pic']);
			
			$smarty->assign('page',"Fill Your Details");
			$smarty->display('seeker/view_profile.tpl');

	}
	elseif($_REQUEST['job']=="edit_profile_pic"){
		
		$smarty->assign('page',"Fill Your Details");
		$smarty->display('seeker/edit_profile_picture.tpl');
	}
}

else{
	$smarty->assign('error',"Please Login.");
	$smarty->assign('page',"Home");
	$smarty->display('seeker/seeker_index.tpl');
}