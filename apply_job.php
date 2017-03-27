<?php
require_once 'conf/smarty-conf.php';
include 'functions/invester_functions.php';
include 'functions/employee_functions.php';
include 'functions/job_functions.php';
require 'libs/class.phpmailer.php';
include 'functions/advertisement_functions.php';

if($_REQUEST['job']=="non_member"){
	$_SESSION['ref_no']=$ref_no=$_REQUEST['ref_no'];

	$info=get_job_info_by_ref_no($ref_no);
	$_SESSION['regi_emp']=$info['regi_emp'];

	$smarty->assign('company_name',"$info[company_name]");
	$smarty->assign('ref_no',"$info[ref_no]");
	$smarty->assign('job_title',"$info[job_title]");
	$smarty->assign('contact_mail_id',"$info[contact_mail_id]");
	$smarty->assign('page',"Apply Now");
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('job/view_job.tpl');
}
elseif($_REQUEST['job']=="apply_non_member"){
	$info=get_job_info_by_ref_no($_SESSION['ref_no']);
	$company_name=$info['company_name'];
	$job_title=$info['job_title'];
	$ref_no=$_SESSION['ref_no'];
	$contact_mail_id=$info['contact_mail_id'];

	$name=$_POST['name'];
	$mail_id=$_POST['mail_id'];
	$message=$_POST['message'];

	$allowedExts = array("pdf", "doc", "docx");
	$extension = end(explode(".", $_FILES["cv_upload"]["name"]));

	if ($_FILES["cv_upload"]["name"] && ($_FILES["cv_upload"]["size"] < 1100000) && in_array($extension, $allowedExts)){

		$path_name="upload/temp_".$_FILES["cv_upload"]["name"];
		$copied = copy($_FILES['cv_upload']['tmp_name'],$path_name);

		$mail = new PHPMailer();

		$mail->IsSMTP();                                      // set mailer to use SMTP
		$mail->Host = "mail.imperialjobhub.com";                 // specify main and backup server
		$mail->SMTPAuth = true;                             // turn on SMTP authentication
		$mail->Username = "noreply+imperialjobhub.com";         // SMTP username
		$mail->Password = "noreply2016";                    // SMTP password

		$mail->From = "noreply@imperialjobhub.com";
		$mail->FromName = "Application For $job_title";
		$mail->AddAddress("$contact_mail_id", "$name");
		//$mail->AddAddress("ellen@example.com");                  // name is optional
		$mail->AddReplyTo("$mail_id", "Information");

		$mail->WordWrap = 50;                                    // set word wrap to 50 characters
		$mail->AddAttachment("$path_name");         // add attachments
		//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   // optional name
		$mail->IsHTML(true);                                  // set email format to HTML

		$mail->Subject = "Application For $job_title";
		$mail->Body    = "Dear $company_name, <br /><br /><br />
		You have received the following applications for your vacancy posted in our website. You can retrieve the CV from the attachment. <br /><br />
		Applicant Name  : $name <br />
		Email Id 		: $mail_id <br />
		Message 		: $message <br /><br />
		<b>This email is sent through imperialjobhub.com, please do not reply this email.</b>";

		$mail->AltBody = "Dear $company_name,
		You have received the following applications for your vacancy posted in our website. You can retrieve the CV from the attachment. 
		Applicant Name : $name 
		Email Id : $mail_id 
		Message : $message 
		This email is sent through imperialjobhub.com, please do not reply this email.";

		if(!$mail->Send()){

			exit;
		}

		if($_SESSION['regi_emp']==1){

			save_application($ref_no, $name, $mail_id, $message);

		}

		unlink($path_name);
		$smarty->assign('error',"Application Sent.");
		$smarty->assign('page',"JOB Home");
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('job/view_job.tpl');

	}
	else {
		$smarty->assign('notice',"Cv format must be pdf or doc or docx.");
		$smarty->assign('page',"JOB Home");
	$smarty->assign('user_name', $_SESSION['user_name']);
	$smarty->display('job/view_job.tpl');
	}

}

elseif ($_REQUEST['job']=="member"){
	$_SESSION['ref_no']=$ref_no=$_REQUEST['ref_no'];

	if($_SESSION['login']==1){
		$user_name=$_SESSION[user_name];
		if(check_cv($user_name)==1){

			$smarty->assign('job',1);
			$smarty->assign('page',"JOB Home");
			$smarty->assign('user_name', $_SESSION['user_name']);
			$smarty->display('job/view_job.tpl');
		}
		else{
			$smarty->assign('error',"Update your profile with your CV.");
			$smarty->display('employee_home/edit_cv.tpl');
		}


	}
	else{
		$smarty->assign('notice',"Please Login.");
		$smarty->assign('page',"Home");
		$smarty->display('employee_home/employee_index.tpl');
	}


}
elseif($_REQUEST['job']=="apply_member"){
	$ref_no=$_SESSION['ref_no'];
	$job_info=get_job_info_by_ref_no($ref_no);
	$job_title=$job_info['job_title'];
	$contact_mail_id=$job_info['contact_mail_id'];
	$company_name=$job_info['company_name'];
	$regi_emp=$job_info['regi_emp'];

	$user_name=$_SESSION[user_name];

	$employee_info=get_employee_info($user_name);
	$name=$employee_info['full_name'];
	$mail_id=$employee_info['email'];


	$message=$_POST['message'];

	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "mail.imperialjobhub.com";                 // specify main and backup server
	$mail->SMTPAuth = true;                             // turn on SMTP authentication
	$mail->Username = "noreply+imperialjobhub.com";         // SMTP username
	$mail->Password = "noreply2016";                    // SMTP password

	$mail->From = "noreply@imperialjobhub.com";
	$mail->FromName = "Application For $job_title";
	$mail->AddAddress("$contact_mail_id", "$name");
	//$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("$mail_id", "Information");

	$mail->WordWrap = 50;                                    // set word wrap to 50 characters
	//$mail->AddAttachment("$cv_path_name");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Application For $job_title";
	$mail->Body    = "Dear $company_name, <br /><br /><br />
	The following applications has been received from the registered jobseekers of imperialjobhub.com  for your vacancy posted in our website.<br /><br /><br />
	
	<table cellpadding='3'>
	<tr valign='top'>
	<th>Full name</th>
	<td>: </td><td>$employee_info[full_name]</td>
	</tr>

	<tr>
	<th>Name with initial</th>
	<td>: </td><td>$employee_info[name_with_initial]</td>
	</tr>

	<tr>
	<th>Gender</th>
	<td>: </td><td>$employee_info[gender]</td>
	</tr>
	
	<tr>
	<th>Date Of Birth</th>
	<td>: </td><td>$employee_info[dob]</td>
	</tr>

	<tr>
	<th>Latest heigher educational qualification</th>
	<td>: </td><td>$employee_info[high_edu_qualification]</td>
	</tr>

	<tr>
	<th>Professional qualifications</th>
	<td>: </td><td>$employee_info[prof_qualification]</td>
	</tr>

	<tr>
	<th>Latest Work Experience</th>
	<td>: </td><td>$employee_info[latest_experience]</td>
	</tr>

	<tr>
	<th>Language skills</th>
	<td>: </td><td>$employee_info[language_skill]</td>
	</tr>

	<tr>
	<th>Area interested in</th>
	<td>: </td><td>$employee_info[area_interest]</td>
	</tr>
	
	<tr>
	<th>Area Capable of</th>
	<td>: </td><td>$employee_info[area_capable]</td>
	</tr>
	
	</table><br /><br />

	To retrieve the full CV of the above candidate please call or SMS the administrator on the following numbers +94 77 237 60 60 or +94 77 22 41 925";


	$mail->AltBody = "Dear $company_name,
	The following applications has been received from the registered jobseekers of mycimajobs.com  for your vacancy posted in our website.
	Full name : $employee_info[full_name]
	Name with initial : $employee_info[name_with_initial]
	Gender : $employee_info[gender]
	Date Of Birth< : $employee_info[dob]
	Latest heigher educational qualification : $employee_info[high_edu_qualification]
	Professional qualifications : $employee_info[prof_qualification]
	Latest Work Experience : $employee_info[latest_experience]
	Language skills : $employee_info[language_skill]
	Area interested in : $employee_info[area_interest]
	Area Capable of : $employee_info[area_capable]
	To retrieve the full CV of the above candidate please call or SMS the administrator on the following numbers +94 77 237 60 60 or +94 77 22 41 925";

	if(!$mail->Send()){

		exit;
	}
	if($regi_emp==1){
		save_application($ref_no, $name, $mail_id, $message);
	}
	save_applied_job($user_name, $ref_no, $message);
	$smarty->assign('error',"Application Sent.");
	$smarty->assign('job',1);
			$smarty->assign('page',"JOB Home");
			$smarty->assign('user_name', $_SESSION['user_name']);
			$smarty->display('job/view_job.tpl');


}

elseif($_REQUEST['job']=="later"){
	$_SESSION['ref_no']=$ref_no=$_REQUEST['ref_no'];

	if($_SESSION['login']==1){
		$user_name=$_SESSION[user_name];

		flag_this_job($ref_no, $user_name);


		$smarty->assign('notice',"Job Flaged for apply later.");
		$smarty->assign('page',"Job Details");
		$smarty->display('job/view_job.tpl');

	}
	else{
		$smarty->assign('notice',"Only for Registered Members, Please Login.");
		$smarty->assign('page',"Login");
		$smarty->display('employee_home/login.tpl');
	}
}

else{

	$smarty->assign('page',"Home");
	$smarty->display('home/index.tpl');
}
