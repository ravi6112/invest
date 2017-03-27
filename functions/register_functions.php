<?php

function user_name_check($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM user WHERE user_name = '$user_name'"))){
		return 1;
	}
	else{
		return 0;
	}

	include 'conf/closedb.php';
}

function register($user_name, $password, $email, $activation_code) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO user (id, user_name, password, email, activation_code, type)
	VALUES ('', '$user_name', '$password', '$email', '$activation_code', 'Seeker')";

	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function waiting_investor($user_name){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO waiting_investor (id, investor)
	VALUES ('', '$user_name')";

	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function send_mail_for_activation($full_name, $user_name, $email, $activation_code){


	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "mail.imperialjobhub.com";                 // specify main and backup server
	$mail->SMTPAuth = true;                             // turn on SMTP authentication
	$mail->Username = "noreply+imperialjobhub.com";         // SMTP username
	$mail->Password = "noreply2016";                    // SMTP password

	$mail->From = "noreply@imperialjobhub.com";
	$mail->FromName = "Activation Code";
	$mail->AddAddress("$email", "$full_name");
	//$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("admin@imperialjobhub.com", "Information");

	$mail->WordWrap = 50;                                    // set word wrap to 50 characters
	//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Mail for activate your account";
	$mail->Body    = "Dear Investment Seeker,<br />
					Congratulations..!!! Welcome to Invest.LK “The World of Opportunities for your Career and Success”<br />
					To complete your registration process and enjoy our full benefits, please activate your profile by using the following information given below.<br />
					We wish you all the best and good luck for your career.<br />
					<br />
					Your Username - $user_name<br />
					Your Password - **********<br />
					Activation Code - $activation_code<br />
					Activation Link - <a href='www.imperialjobhub.com/activate.php'>Activate</a> ";
	
	$mail->AltBody = "Dear Investment Seeker,
					Congratulations..!!! Welcome to invest.LK “The World of Opportunities for your Career and Success”
					To complete your registration process and enjoy our full benefits, please activate your profile by using the following information given below.
					We wish you all the best and good luck for your career.
					Your Username - $user_name
					Your Password - **********
					Activation Code - $activation_code
					Activation Link - www.imperialjobhub.com/activate.php ";
	if(!$mail->Send())
	{

		exit;
	}

}

function activate_account($email, $activation_code){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE user SET
	active='1'  
	WHERE email='$email' AND activation_code='$activation_code'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function send_mail_for_password_reset($email){
	
$user_info=get_user_info_by_email($email);
$full_name=$user_info[full_name];
$user_name=$user_info[user_name];
$activation_code=$user_info[activation_code];



	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "gator4192.hostgator.com";                 // specify main and backup server
	$mail->SMTPAuth = true;                             // turn on SMTP authentication
	$mail->Username = "noreply@imperialjobhub.com";         // SMTP username
	$mail->Password = "noreply_123";                    // SMTP password
	$mail->Port = 465;
	$mail->Debug = 1;
	$mail->SMTPSecure = 'ssl';
	$mail->From = "noreply@imperialjobhub.com";
	$mail->FromName = "Password Reset Code";
	$mail->AddAddress("$email", "$full_name");
	//$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("noreply@imperialjobhub.com", "Information");

			
	$mail->WordWrap = 50;                                    // set word wrap to 50 characters
	//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Mail for reset your account password";
	$mail->Body    = "Hi <strong>$full_name, <br />
			Your Username - $user_name <br />
			Code - $activation_code<br />
			Reset Link - <a href='www.imperialjobhub.com/forget.php?job=forget'>Reset</a>
			</strong>";
	$mail->AltBody = "Your Username - $user_name
			Code - $activation_code
			Reset Link - www.imperialjobhub.com/forget.php?job=forget";
	if(!$mail->Send())
	{
echo "Mailer Error: " . $mail->ErrorInfo;
		exit;
	}

}

function check_mail_and_code($email, $code){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
		if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM user WHERE email = '$email' AND activation_code='$code'"))){

			return 1;
		}
		else{
			return 0;
		}

	include 'conf/closedb.php';
	
}

function update_password($email, $password){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE user SET
	password='$password'  
	WHERE email='$email' AND active='1'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function register_investor($user_name, $password, $company_name, $email, $activation_code, $address, $telephone_no, $contact_person, $city, $country) {
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "INSERT INTO user (id, user_name, password, company_name, email, activation_code, address, telephone_no, contact_person, city, country)
	VALUES ('', '$user_name', '$password', '$company_name', '$email', '$activation_code', '$address', '$telephone_no', '$contact_person', '$city', '$country')";
	
	mysqli_query($conn, $query) or die (mysqli_error());

	include 'conf/closedb.php';
}

function send_mail_for_activation_to_investor($company_name, $user_name, $email, $activation_code){


	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "mail.imperialjobhub.com";                 // specify main and backup server
	$mail->SMTPAuth = true;                             // turn on SMTP authentication
	$mail->Username = "noreply+imperialjobhub.com";         // SMTP username
	$mail->Password = "noreply2016";                    // SMTP password

	$mail->From = "noreply@imperialjobhub.com";
	$mail->FromName = "Activation Guide";
	$mail->AddAddress("$email", "$company_name");
	//$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("admin@imperialjobhub.com", "Information");

	$mail->WordWrap = 50;                                    // set word wrap to 50 characters
	//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Mail for activate your account";
	$mail->Body    = "Dear Investor,<br />
					blaa blaa blaaaaa,<br /><br />
					$company_name,<br /><br />
					Your Username - $user_name <br />
					Your Password - ********** <br /><br />
					bla bla blaaaaa";
	$mail->AltBody = "Dear investor,
					bla bla blaaaaa,
					 
					$company_name,
					Your Username - $user_name 
					Your Password - ********** 
					bla bla blaaaaa";
	if(!$mail->Send())
	{

		exit;
	}

}

function activate_employer_account($email, $activation_code){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE user SET
	active='1'  
	WHERE email='$email' AND activation_code='$activation_code'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}

function send_mail_for_password_reset_to_employer($email){
	
$user_info=get_employer_info_by_email($email);
$company_name=$user_info[company_name];
$user_name=$user_info[user_name];
$activation_code=$user_info[activation_code];


	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "mail.imperialjobhub.com";                 // specify main and backup server
	$mail->SMTPAuth = true;                             // turn on SMTP authentication
	$mail->Username = "noreply+imperialjobhub.com";         // SMTP username
	$mail->Password = "noreply2016";                    // SMTP password

	$mail->From = "noreply@imperialjobhub.com";
	$mail->FromName = "Password Reset Code";
	$mail->AddAddress("$email", "$company_name");
	//$mail->AddAddress("ellen@example.com");                   // name is optional
	$mail->AddReplyTo("admin@imperialjobhub.com", "Information");

	$mail->WordWrap = 50;                                    // set word wrap to 50 characters
	//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Mail for reset your account password";
	$mail->Body    = "Hi <strong>$company_name, <br />
			Your Username - $user_name <br />
			Code - $activation_code<br />
			Reset Link - <a href='www.imperialjobhub.com/employer_forget.php?job=forget'>Activate</a>
			</strong>";
	$mail->AltBody = "Your Username - $user_name
			Code - $activation_code
			Reset Link - www.imperialjobhub.com/employer_forget.php?job=forget";
	if(!$mail->Send())
	{

		exit;
	}

}

function check_mail_and_code_for_employer($email, $code){
	include 'conf/config.php';
	include 'conf/opendb.php';
	
		if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM user WHERE email = '$email' AND activation_code='$code'"))){

			return 1;
		}
		else{
			return 0;
		}

	include 'conf/closedb.php';
	
}

function update_password_for_employer($email, $password){
	include 'conf/config.php';
	include 'conf/opendb.php';

	 
	$query = "UPDATE user SET
	password='$password'  
	WHERE email='$email' AND active='1'";

	mysqli_query($conn, $query);

	include 'conf/closedb.php';
}
