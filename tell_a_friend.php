<?php
require_once 'conf/smarty-conf.php';
include 'functions/job_functions.php';
require 'libs/class.phpmailer.php';
include 'functions/advertisement_functions.php';

if($_REQUEST['job']=="tell"){

	$ref_no=$_SESSION['ref_no'];
	$info=get_job_info_by_ref_no($ref_no);
	$your_name=$_POST['your_name'];
	$your_email=$_POST['your_email'];
	$friend_name=$_POST['friend_name'];
	$friend_email=$_POST['friend_email'];
	$job_title=$info['job_title'];
	$company_name=$info['company_name'];

	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "mail.imperialmyspace.com";                 // specify main and backup server
	$mail->SMTPAuth = true;                             // turn on SMTP authentication
	$mail->Username = "admin+imperialmyspace.com";         // SMTP username
	$mail->Password = "adminimp";                     // SMTP password

	$mail->From = "admin@imperialmyspace.com";
	$mail->FromName = "$your_name";
	$mail->AddAddress("$friend_email", "$friend_name");
	//$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("", "Information");

	$mail->WordWrap = 50;                                    // set word wrap to 50 characters
	//$mail->AddAttachment("$newname");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "$job_title Needed for $company_name.";
	$mail->Body    = "Hi <strong>$friend_name, This Mail is sent By Your friend $your_name.<br />
			For full Detail <a href='www.mycimajobs.com/view_job.php?job=display&ref_no=$ref_no'>Click Here</a>
			</strong>";
	$mail->AltBody = "Hi $friend_name, This Mail is sent By Your friend $your_name.
		For full Detail go to www.mycimajobs.com/view_job.php?job=display&ref_no=$ref_no";

	if(!$mail->Send()){
		exit;
	}

	$smarty->assign('page', "Home");
		$smarty->assign('error', "Information Sent to your Friend");
	$smarty->display('job/view_job.tpl');

}
elseif($_REQUEST['job']=="fill_to_tell"){
	$_SESSION['ref_no']=$ref_no=$_REQUEST['ref_no'];
	if($_SESSION['email']){
		$smarty->assign('your_email', "$_SESSION[email]");
		$smarty->assign('your_name', "$_SESSION[full_name]");
	}


	$smarty->assign('page', "Tell a Friend");
	$smarty->display('job/view_job.tpl');
}

else{
	$smarty->assign('page', "Tell a Friend");
	$smarty->display('job/view_job.tpl');
}