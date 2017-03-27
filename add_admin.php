<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/advertisement_functions.php';

if ($_SESSION['admin_login']==1){
	if ($_REQUEST['job']=="add_admin_form"){

		$smarty->assign('page',"Add admin");
		$smarty->display('admin/add_admin.tpl');
	}
	elseif ($_REQUEST['job']=="save"){

		if ($_REQUEST['ok']=='Update') {

			$id=$_SESSION['id'];
			$info=get_admin_info($id);

			$user_name=$_POST['user_name'];
			$full_name=$_POST['full_name'];
			$email=$_POST['email'];
			$telephone=$_POST['telephone'];
			$mobile=$_POST['mobile'];
			$address=$_POST['address'];
			$password=$_POST['password'];
			$password_rep=$_POST['password_rep'];

			if($user_name AND $password AND $password_rep){
				if($password == $password_rep){
					$code=$password;
					$password=md5($password);

					update_admin($id, $user_name, $password, $full_name, $email, $telephone, $address, $code);
				}
				else{
					$smarty->assign('notice','Password doesn\'t match with repeated password');
				}
			}
			else{
				$smarty->assign('notice','User Name, Password and Repeat Password are mandatory fields');
			}
		}
		else{
			$_SESSION['user_name']=$user_name=$_POST['user_name'];
			$_SESSION['full_name']=$full_name=$_POST['full_name'];
			$_SESSION['email']=$email=$_POST['email'];
			$_SESSION['telephone']=$telephone=$_POST['telephone'];
			$_SESSION['address']=$address=$_POST['address'];
			$_SESSION['password']=$password=$_POST['password'];
			$_SESSION['password_rep']=$password_rep=$_POST['password_rep'];

			if($user_name AND $password AND $password_rep){
				if($password == $password_rep){
					$code=$password;
					$password=md5($password);

					save_admin($user_name, $password, $full_name, $email, $telephone, $address, $code);
				}
				else{
					$smarty->assign('notice','Password doesn\'t match with repeated password');
				}
			}
			else{
				$smarty->assign('notice','User Name, Password and Repeat Password are mandatory fields');
			}
		}

		$smarty->assign('page','Add Admin');
		$smarty->display('admin/add_admin.tpl');
	}
	elseif ($_REQUEST['job']=="edit"){

		$_SESSION['id']=$id=$_REQUEST['id'];
		$info=get_admin_info_id($id);

		$smarty->assign('user_name',$info['user_name']);
		$smarty->assign('password',$info['code']);
		$smarty->assign('password_rep',$info['code']);
		$smarty->assign('full_name',$info['full_name']);
		$smarty->assign('email',$info['email']);
		$smarty->assign('telephone',$info['telephone']);
		$smarty->assign('address',$info['address']);

		$smarty->assign('edit','true');

		$smarty->assign('page','Add Admin');
		$smarty->display('admin/add_admin.tpl');

	}
	elseif ($_REQUEST['job']=="delete"){

		delete_admin($_REQUEST['id']);

		$smarty->assign('page','Add Admin');
		$smarty->display('admin/add_admin.tpl');
	}
	else{
		$smarty->assign('page','Add Admin');
		$smarty->display('admin/add_admin.tpl');

	}
}

else{

	$smarty->assign('error',"Incorrect Login Details!");
	$smarty->display('admin/login.tpl');

}