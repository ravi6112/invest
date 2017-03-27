<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/advertisement_functions.php';
include 'functions/upload_functions.php';

if ($_SESSION['admin_login']==1){
	if ($_REQUEST['job']=="add_ads_form"){

		$smarty->assign('page',"Add Ads");
		$smarty->display('admin/add_ads.tpl');
	}
	elseif ($_REQUEST['job']=="save"){

		if ($_REQUEST['ok']=='Update') {

			$id=$_SESSION['id'];
			$info=get_ad_info($id);

			$company_name=$_POST['company_name'];
			$link=$_POST['link'];
			$email=$_POST['email'];
			$telephone_no=$_POST['telephone_no'];
			$ad_type=$_POST['ad_type'];
			$active=1;

			
			if($_FILES['image'] ['name']){
			//get the original name of the file from the clients machine
			$filename = stripslashes ($_FILES['image'] ['name']);
			
			//get the extension of the file in a lower case format
			$extension = getExtension ($filename);
			$extension = strtolower ($extension);

			$file_name='ad'.$id.'.'.$extension;
			$newname="upload/".$file_name;
			$copied = copy($_FILES['image']['tmp_name'],$newname);
			$image=$newname;
				
			update_ad($id, $company_name, $link, $email, $telephone_no, $image, $ad_type, $active);
			}
			
			else{
			update_ad_with_out_file($id, $company_name, $link, $email, $telephone_no, $ad_type, $active);
			}

		}
		else{
			$_SESSION['company_name']=$company_name=$_POST['company_name'];
			$_SESSION['link']=$link=$_POST['link'];
			$_SESSION['email']=$email=$_POST['email'];
			$_SESSION['telephone_no']=$telephone_no=$_POST['telephone_no'];
			$_SESSION['ad_type']=$ad_type=$_POST['ad_type'];
			$_SESSION['active']=$active=1;

			$id=get_ad_id();
			//get the original name of the file from the clients machine
			$filename = stripslashes ($_FILES['image'] ['name']);
			
			//get the extension of the file in a lower case format
			$extension = getExtension ($filename);
			$extension = strtolower ($extension);

			$file_name='ad'.$id.'.'.$extension;
			$newname="upload/".$file_name;
			$copied = copy($_FILES['image']['tmp_name'],$newname);
			$image=$newname;
			
					save_ad($company_name, $link, $email, $telephone_no, $image, $ad_type, $active);

		}

		$smarty->assign('page','Add Ads');
		$smarty->display('admin/add_ads.tpl');
	}
	elseif ($_REQUEST['job']=="edit"){

		$_SESSION['id']=$id=$_REQUEST['id'];
		$info=get_ad_info($id);

		$smarty->assign('company_name',$info['company_name']);
		$smarty->assign('link',$info['link']);
		$smarty->assign('email',$info['email']);
		$smarty->assign('telephone_no',$info['telephone_no']);
		$smarty->assign('ad_type',$info['ad_type']);
		$smarty->assign('edit','true');

		$smarty->assign('page','Add Ads');
		$smarty->display('admin/add_ads.tpl');

	}
	elseif ($_REQUEST['job']=="delete"){

		delete_ad($_REQUEST['id']);

		$smarty->assign('page','Add Ads');
		$smarty->display('admin/add_ads.tpl');
	}
	else{
		$smarty->assign('page','Add Ads');
		$smarty->display('admin/add_ads.tpl');

	}
}

else{

	$smarty->assign('error',"Incorrect Login Details!");
	$smarty->display('admin/login.tpl');

}