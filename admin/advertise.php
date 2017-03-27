<?php
require_once 'conf/smarty-conf.php';
include 'functions/admin_functions.php';
include 'functions/user_functions.php';
include 'functions/modules_functions.php';
include 'functions/advertise_functions.php';


$module_no=6;

if ($_SESSION['login']==1) {
    if (check_access($module_no, $_SESSION ['user_id']) == 1) {
        if($_REQUEST['job']=='add'){
            if($_REQUEST['ok']=='Save'){

                unset($_SESSION['id']);

                $company_name=$_POST['company_name'];
                $title=$_POST['title'];
                $text = $_POST['text'];
                $url = $_POST['url'];
                $start_date=$_POST['start_date'];
                $end_date=$_POST['end_date'];
                $file_name = stripslashes ($_FILES['image'] ['name']);
                //get the extension of the file in a lower case format/var/www/laravel/lara19/var/www/laravel/lara19
                $newname="upload/".$file_name;
                move_uploaded_file($_FILES['image'] ['tmp_name'],$newname);

                save_ads($company_name, $title, $text, $start_date, $end_date,$url,$newname);

                //$smarty->assign('user_name',"$_SESSION[user_name]");
                $smarty->assign('page',"Inventory");
                $smarty->display('advertise/advertise.tpl');
            }

            else{

                $id=$_SESSION['id'];

                $company_name=$_POST['company_name'];
                $title=$_POST['title'];
                $text = $_POST['text'];
                $start_date=$_POST['start_date'];
                $end_date=$_POST['end_date'];
                $url = $_POST['url'];
                $filename = stripslashes ($_FILES['image'] ['name']);
                //get the extension of the file in a lower case format
                $extension = getExtension ($filename);
                $extension = strtolower ($extension);
                $file_name=$ref_no.'.'.$extension;
                $newname="upload/".$file_name;
                move_uploaded_file($_FILES['image'] ['tmp_name'],$newname);

                update_ads($id,$company_name, $title, $text, $email, $start_date, $end_date,$url,$newname);



                $info=get_ads_info($id);


                $smarty->assign('company_name',$info['company_name']);
                $smarty->assign('title',$info['title']);
                $smarty->assign('text',$info['text']);
                $smarty->assign('start_date',$info['start_date']);
                $smarty->assign('end_date',$info['end_date']);
                $smarty->assign('image',$info['image']);

                unset($_SESSION['id']);

                //$smarty->assign('user_name',"$_SESSION[user_name]");
                $smarty->assign('page',"Inventory");
                $smarty->display('advertise/advertise.tpl');
            }
        }
        else {
            $smarty->assign('user_name', "$_SESSION[user_name]");

            $smarty->assign('page', "Inventory");
            $smarty->display('advertise/advertise.tpl');
        }
    }

else{
        $smarty->assign('error_report', "on");
        $smarty->assign('error_message', "Dear $_SESSION[user_name], you don't have permission to Staff Management.");
        $smarty->assign('page', "Access Error");
        $smarty->display('user_home/access_error.tpl');
    }
}

else{
    $smarty->assign('error',"<p>Incorrect Login Details!</p>");
    $smarty->display('login.tpl');
}