<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/job_functions.php';
include 'functions/upload_functions.php';
require 'libs/class.phpmailer.php';
include 'functions/advertisement_functions.php';

if ($_REQUEST['job']=="save_job"){

	$ref_no=get_job_ref_no();

	//get the original name of the file from the clients machine
	$filename = stripslashes ($_FILES['detail'] ['name']);
	//get the extension of the file in a lower case format
	$extension = getExtension ($filename);
	$extension = strtolower ($extension);

	$file_name=$ref_no.'.'.$extension;
	$newname="upload/".$file_name;
	$copied = copy($_FILES['detail']['tmp_name'],$newname);

	$_SESSION['job_title']=$job_title=$_POST['job_title'];
	$_SESSION['catagory']=$catagory=$_POST['catagory'];
	$_SESSION['closing_date']=$closing_date=$_POST['closing_date'];
	$_SESSION['company_name']=$company_name=$_POST['company_name'];
	$_SESSION['contact_mail_id']=$contact_mail_id=$_POST['contact_mail_id'];
	$detail=$newname;
	$main_catagory=$_POST['main_catagory'];
	$keywords=$_POST['keywords'];
	$timing=$_POST['timing'];
	$detail_text=$_POST['detail_text'];
	
	save_job_non_member($job_title, $detail, $detail_text, $catagory, $closing_date, $ref_no, $company_name, $contact_mail_id, $main_catagory, $keywords, $timing);
	waiting_job($ref_no);
	$mail = new PHPMailer();

	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "mail.imperialjobhub.com";                 // specify main and backup server
	$mail->SMTPAuth = true;                             // turn on SMTP authentication
	$mail->Username = "noreply+imperialjobhub.com";         // SMTP username
	$mail->Password = "noreply2016";                    // SMTP password

	$mail->From = "noreply@imperialjobhub.com";
	$mail->FromName = "$job_title Need an Approval.";
	$mail->AddAddress("$contact_mail_id", "$name");
	//$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("", "Information");

	$mail->WordWrap = 50;                                    // set word wrap to 50 characters
	//$mail->AddAttachment("$newname");        				// add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Application For $job_title";
	$mail->Body    = "Dear Employer,<br /><br />
	Thank you for using imperialjobhub.com to post your vacancy. To display the job in our website please follow the below steps,<br /><br /><br />
	Step 1 : Choose the option for duration of display of your vacancy.<br /><br /><br />
	Option 1:             To display for 14 days (2 Weeks)               3,500/- (Three Thousand Five Hundred)<br /><br />
	Option 2:             To display for 30 days (4 Weeks)               5,000/- (Five Thousand)  - 30% off <br /><br /><br />
	Step 2 : Make the payment to the following bank as per your choice in Step 1,<br /><br /><br />
	Account Name            :ICBS Group of Companies<br /><br />
	Bank                    :Commercial Bank, Kollupitiya, Colombo 03<br /><br />
	Bank A/C No             :1108569701 <br /><br /><br />
	Step 3 : Upon completion of your payment, please call or send a SMS to our administrator in the following numbers for quick activation. In the event if you do not call or SMS your activation will be delayed.<br /><br /><br />
	Contact No                 : +94 75 024 72 45 or +94 77 22 41 925";
	
	$mail->AltBody = "Dear Employer,
	Thank you for using imperialjobhub.com to post your vacancy. To display the job in our website please follow the below steps,
	Step 1 : Choose the option for duration of display of your vacancy.
	Option 1:             To display for 14 days (2 Weeks)               3,500/- (Three Thousand Five Hundred)
	Option 2:             To display for 30 days (4 Weeks)               5,000/- (Five Thousand)  - 30% off 
	Step 2 : Make the payment to the following bank as per your choice in Step 1,
	Account Name            :ICBS Group of Companies
	Bank                    :Commercial Bank, Kollupitiya, Colombo 03
	Bank A/C No             :1108569701 
	Step 3 : Upon completion of your payment, please call or send a SMS to our administrator in the following numbers for quick activation. In the event if you do not call or SMS your activation will be delayed.
	Contact No                 : +94 75 024 72 45 or +94 77 22 41 925";

	if(!$mail->Send()){
		exit;
	}

	$smarty->assign('error',"Job needed an approval, for approval details check your mail.");
	$smarty->assign('page',"Post Job");
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('job/non_member_post_job.tpl');
}

else{
	$smarty->assign('page',"Post Job");
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('job/non_member_post_job.tpl');
}
