{include file="new_header.tpl"}


<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><img alt="logo" src="img/logo.png" width="80" height="50" style="float: left; margin-right: 10px; margin-top: -10px;">Imperial Jobs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#">Employer Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#employees">Top Seekers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#all_employees">Seekers</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#jobs">Post Job</a>
                    </li>
					{if $user_name}
					<li>
                        <a href="employer_login.php?job=logout" style="font-size: -16px;">Logout</a>
                    </li>
					<li>
                        <a style="color: white;">Welcome <font color="yellow">{$user_name}</font></a>
                    </li>
					
					{/if}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-image: url(img/header-bg2.jpg);">
        <div class="container">
            <div class="intro-text" style="padding-top: 200px; padding-bottom: 300px;">
				{if $employer_display==1}
                <div class="row">
				<div class="col-lg-3">
				</div>
                <div class="col-lg-6">



<script>
function showPass1(pass)
{
var xmlhttp;    
if (pass=="")
  {
  document.getElementById("availability_status").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	    var outPut = xmlhttp.responseText;
    document.getElementById("availability_status").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax/query_check_employer_username.php?user_name="+pass,true);
xmlhttp.send();
document.reg.email.focus();

}
</script>

<script>
function passwordStrength(password,passwordStrength,errorField)
{

var desc = new Array();
desc[0] = "  Blank";
desc[1] = "  Very Weak";
desc[2] = "  Week";
desc[3] = "  Better";
desc[4] = "  Medium";
desc[5] = "  Strong";
desc[6] = "  Strongest";

var score   = 0;

//if password bigger than 0 give 1 point
if (password.length > 0) score++;

//if password bigger than 6 give 1 point
if (password.length > 6) score++;

//if password has both lower and uppercase characters give 1 point
if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

//if password has at least one number give 1 point
if (password.match(/\d+/)) score++;

//if password has at least one special caracther give 1 point
if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

//if password bigger than 12 give another 1 point
if (password.length > 12) score++;

passwordStrength.innerHTML = desc[score];
passwordStrength.className = "strength" + score;
}
</script>


<script>
function showPass2(pass)
{
var xmlhttp;    
if (pass=="")
  {
  document.getElementById("emailchecking").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("emailchecking").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax/query_check_employer_email.php?email="+pass,true);
xmlhttp.send();
document.reg.email.focus();

}
</script>
<script>
function comparePassword(){
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password_rep").value;
	
    if (password != confirmPassword)
    	 document.getElementById("PasswordMatch").innerHTML="Both Password must be Same";
    else
    	 document.getElementById("PasswordMatch").innerHTML="Ok! Carry on.";
}
</script>

					<form name="register_form" action="employer_regi.php?job=register" method="post">
						
						<h2>Register</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
									<br />
									<br /><label>User Name</label>
                                    <input type="text" class="form-control" style="text-align: center; height: 50px; font-size: 18px;" name="user_name" id="user_name" onkeyup="showPass1(this.value)" required />
									<span id="availability_status"></span>
                                </div>
                                <div class="form-group"><label>Password</label>
                                    <input type="Password" class="form-control" style="text-align: center; height: 50px; font-size: 18px;" name="password" value="{$password}" id="password" onkeyup="passwordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" required />
									<span id="strendth" ></span>
                                </div>
								<div class="form-group"><label>Password Repeat</label>
									<input type="password" class="form-control" name="password_rep" style="text-align: center; height: 50px; font-size: 18px;"  id="password_rep" onkeyup="comparePassword()" required /><span id="PasswordMatch"></span>
								</div>
								<div class="form-group"><label>Company Name</label>
									<input type="text" class="form-control" name="company_name" value="{$company_name}" required style="text-align: center; height: 50px; font-size: 18px;"/>
								</div>
								<div class="form-group"><label>Email</label>
									<input type="text" class="form-control" name="email" id="email" onkeyup="showPass2(this.value)" required style="text-align: center; height: 50px; font-size: 18px;"/><span id="emailchecking"></span>
                                </div>
                                <div class="form-group"><label>Telephone No</label>
                                    <input type="text" class="form-control" style="text-align: center; height: 50px; font-size: 18px;" name="telephone_no" value="{$telephone_no}" required />
                                </div>
								<div class="form-group"><label>Address</label>
									<input type="text" class="form-control" name="address" value="{$address}"  style="text-align: center; height: 50px; font-size: 18px;"/>
								</div>
								<div class="form-group"><label>City</label>
									<select name="city" class="form-control">
				<option>{$city}</option>
				<option>Other Country</option>
				<option>Ampara</option>
				<option>Anuradhapura</option>
				<option>Badulla</option>
				<option>Batticaloa</option>
				<option>Colombo</option>
				<option>Galle</option>
				<option>Gampaha</option>
				<option>Hambantota</option>
				<option>Jaffna</option>
				<option>Kalutara</option>
				<option>Kandy</option>
				<option>Kegalle</option>
				<option>Kilinochchi</option>
				<option>Kurunegala</option>
				<option>Mannar</option>
				<option>Matale</option>
				<option>Matara</option>
				<option>Moneragala</option>
				<option>Mullaitivu</option>
				<option>Nuwara Eliya</option>
				<option>Polonnaruwa</option>
				<option>Puttalam</option>
				<option>Ratnapura</option>
				<option>Trincomalee</option>
				<option>Vavuniya</option>
			</select>	
				</div>
					<div class="form-group"><label>Country</label>
									<select name="country" class="form-control">
				<option>{$country}</option>
				<option>Afghanistan</option>
				<option>Albania</option>
				<option>Algeria</option>
				<option>American Samoa</option>
				<option>Andorra</option>
				<option>Angola</option>
				<option>Anguilla</option>
				<option>Antarctica</option>
				<option>Antigua and Barbuda</option>
				<option>Argentina</option>
				<option>Armenia</option>
				<option>Aruba</option>
				<option>Australia</option>
				<option>Austria</option>
				<option>Azerbaijan</option>
				<option>Bahamas</option>
				<option>Bahrain</option>
				<option>Bangladesh</option>
				<option>Barbados</option>
				<option>Belarus</option>
				<option>Belgium</option>
				<option>Belize</option>
				<option>Benin</option>
				<option>Bermuda</option>
				<option>Bhutan</option>
				<option>Bolivia</option>
				<option>Botswana</option>
				<option>Bouvet Island</option>
				<option>Brazil</option>
				<option>Brunei Darussalam</option>
				<option>Bulgaria</option>
				<option>Burkina Faso</option>
				<option>Burundi</option>
				<option>Cambodia</option>
				<option>Cameroon</option>
				<option>Canada</option>
				<option>Cape Verde</option>
				<option>Cayman Islands</option>
				<option>Chad</option>
				<option>Chile</option>
				<option>China</option>
				<option>Christmas Island</option>
				<option>Cocos Islands</option>
				<option>Colombia</option>
				<option>Comoros</option>
				<option>Congo</option>
				<option>Cook Islands</option>
				<option>Costa Rica</option>
				<option>Cote D'ivoire</option>
				<option>Croatia</option>
				<option>Cuba</option>
				<option>Cyprus</option>
				<option>Czech Republic</option>
				<option>Denmark</option>
				<option>Djibouti</option>
				<option>Dominica</option>
				<option>Dominican Republic</option>
				<option>Ecuador</option>
				<option>Egypt</option>
				<option>El Salvador</option>
				<option>Equatorial Guinea</option>
				<option>Eritrea</option>
				<option>Estonia</option>
				<option>Ethiopia</option>
				<option>Falkland Islands</option>
				<option>Faroe Islands</option>
				<option>Fiji</option>
				<option>Finland</option>
				<option>France</option>
				<option>French Guiana</option>
				<option>French Polynesia</option>
				<option>Gabon</option>
				<option>Gambia</option>
				<option>Georgia</option>
				<option>Germany</option>
				<option>Ghana</option>
				<option>Gibraltar</option>
				<option>Greece</option>
				<option>Greenland</option>
				<option>Grenada</option>
				<option>Guadeloupe</option>
				<option>Guam</option>
				<option>Guatemala</option>
				<option>Guinea</option>
				<option>Guinea-bissau</option>
				<option>Guyana</option>
				<option>Haiti</option>
				<option>Honduras</option>
				<option>Hong Kong</option>
				<option>Hungary</option>
				<option>Iceland</option>
				<option>India</option>
				<option>Indonesia</option>
				<option>Iran</option>
				<option>Iraq</option>
				<option>Ireland</option>
				<option>Israel</option>
				<option>Italy</option>
				<option>Jamaica</option>
				<option>Japan</option>
				<option>Jordan</option>
				<option>Kazakhstan</option>
				<option>Kenya</option>
				<option>Kiribati</option>
				<option>North Korea</option>
				<option>South Korea</option>
				<option>Kuwait</option>
				<option>Kyrgyzstan</option>
				<option>Latvia</option>
				<option>Lebanon</option>
				<option>Lesotho</option>
				<option>Liberia</option>
				<option>Libyan Arab Jamahiriya</option>
				<option>Liechtenstein</option>
				<option>Lithuania</option>
				<option>Luxembourg</option>
				<option>Macao</option>
				<option>Madagascar</option>
				<option>Malawi</option>
				<option>Malaysia</option>
				<option>Maldives</option>
				<option>Mali</option>
				<option>Malta</option>
				<option>Marshall Islands</option>
				<option>Martinique</option>
				<option>Mauritania</option>
				<option>Mauritius</option>
				<option>Mayotte</option>
				<option>Mexico</option>
				<option>Moldova</option>
				<option>Monaco</option>
				<option>Mongolia</option>
				<option>Montserrat</option>
				<option>Morocco</option>
				<option>Mozambique</option>
				<option>Myanmar</option>
				<option>Namibia</option>
				<option>Nauru</option>
				<option>Nepal</option>
				<option>Netherlands</option>
				<option>Netherlands Antilles</option>
				<option>New Caledonia</option>
				<option>New Zealand</option>
				<option>Nicaragua</option>
				<option>Niger</option>
				<option>Nigeria</option>
				<option>Niue</option>
				<option>Norfolk Island</option>
				<option>Northern Mariana Islands</option>
				<option>Norway</option>
				<option>Oman</option>
				<option>Pakistan</option>
				<option>Palau</option>
				<option>Palestinian Territory</option>
				<option>Panama</option>
				<option>Papua New Guinea</option>
				<option>Paraguay</option>
				<option>Peru</option>
				<option>Philippines</option>
				<option>Pitcairn</option>
				<option>Poland</option>
				<option>Portugal</option>
				<option>Puerto Rico</option>
				<option>Qatar</option>
				<option>Reunion</option>
				<option>Romania</option>
				<option>Russian Federation</option>
				<option>Rwanda</option>
				<option>Saint Helena</option>
				<option>Saint Kitts and Nevis</option>
				<option>Saint Lucia</option>
				<option>Saint Pierre and Miquelon</option>
				<option>Samoa</option>
				<option>San Marino</option>
				<option>Sao Tome and Principe</option>
				<option>Saudi Arabia</option>
				<option>Senegal</option>
				<option>Serbia and Montenegro</option>
				<option>Seychelles</option>
				<option>Sierra Leone</option>
				<option>Singapore</option>
				<option>Slovakia</option>
				<option>Slovenia</option>
				<option>Solomon Islands</option>
				<option>Somalia</option>
				<option>South Africa</option>
				<option>Spain</option>
				<option>Sri Lanka</option>
				<option>Sudan</option>
				<option>Suriname</option>
				<option>Svalbard and Jan Mayen</option>
				<option>Swaziland</option>
				<option>Sweden</option>
				<option>Switzerland</option>
				<option>Syrian Arab Republic</option>
				<option>Taiwan</option>
				<option>Tajikistan</option>
				<option>Tanzania</option>
				<option>Thailand</option>
				<option>Timor-leste</option>
				<option>Togo</option>
				<option>Tokelau</option>
				<option>Tonga</option>
				<option>Trinidad and Tobago</option>
				<option>Tunisia</option>
				<option>Turkey</option>
				<option>Turkmenistan</option>
				<option>Turks and Caicos Islands</option>
				<option>Tuvalu</option>
				<option>Uganda</option>
				<option>Ukraine</option>
				<option>United Arab Emirates</option>
				<option>United Kingdom</option>
				<option>United States</option>
				<option>Uruguay</option>
				<option>Uzbekistan</option>
				<option>Vanuatu</option>
				<option>Venezuela</option>
				<option>Viet Nam</option>
				<option>Virgin Islands, British</option>
				<option>Virgin Islands, U.S.</option>
				<option>Wallis and Futuna</option>
				<option>Western Sahara</option>
				<option>Yemen</option>
				<option>Zambia</option>
				<option>Zimbabwe</option>
			</select>
		</div>
								<div class="form-group"><label>Contact Person</label>
									<input type="text" class="form-control" name="contact_person" value="{$contact_person}" required style="text-align: center; height: 50px; font-size: 18px;"/>
								</div>
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Rgister Now!</button>
                            </div>
                        </div>
                    </form>
                </div>



				<div class="col-lg-3">
				</div>
				
            </div>

			{elseif $employer_display==3}
                <div class="row">
				<div class="col-lg-3">
				</div>
                <div class="col-lg-6">
					<form name="activate_form" action="register.php?job=activate" method="post">
						<div class="form-group"><label>Email</label><input class="form-control" type="text" name="email" id="email" value="{$email}" required />
						</div>
						<div class="form-group"><label>Activation code</label><input class="form-control" type="text" name="activation_code" id="activation_code" value="{$activation_code}" required /></div>
						{if $error}
					      <span style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</span>
{/if} 
<div class="form-group"><input class="btn btn-xl" type="submit" name="ok" value="Activate My Account." /></div>
					</form>
				</div>

				<div class="col-lg-3">
				</div>
				
            </div>
			{elseif $employer_display==2}
			
            <div class="intro-text" style="padding-top: 200px; padding-bottom: 100px;">
                <div class="intro-lead-in">Welcome To Imperial Jobs!</div>
                <div class="intro-heading">the best place to hire</div>
                <a href="#employees" class="page-scroll btn btn-xl">Hire</a>
            </div>

			{elseif $employer_display==4}
			
            <div class="row">
				<div class="col-lg-3">
				</div>
                <div class="col-lg-6 text-center">
					<form name="forget_form" action="employer_forget.php?job=forget" method="post">
						<div class="form-group"><input class="form-control" type="text" name="email" id="email" value="{$email}" placeholder="E-mail" required />
						</div>
						
						<div class="form-group"><input class="btn btn-xl" type="submit" name="ok" value="Ok." /></div>
					</form>
					{if $error}
					      <span style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</span>
					{/if} 
				</div>

				<div class="col-lg-3">
				</div>
				
            </div>

			{elseif $employer_display==5}
			<script>
function passwordStrength(password,passwordStrength,errorField)
{

var desc = new Array();
desc[0] = "  Blank";
desc[1] = "  Very Weak";
desc[2] = "  Week";
desc[3] = "  Better";
desc[4] = "  Medium";
desc[5] = "  Strong";
desc[6] = "  Strongest";

var score   = 0;

//if password bigger than 0 give 1 point
if (password.length > 0) score++;

//if password bigger than 6 give 1 point
if (password.length > 6) score++;

//if password has both lower and uppercase characters give 1 point
if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

//if password has at least one number give 1 point
if (password.match(/\d+/)) score++;

//if password has at least one special caracther give 1 point
if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

//if password bigger than 12 give another 1 point
if (password.length > 12) score++;

passwordStrength.innerHTML = desc[score];
passwordStrength.className = "strength" + score;
}
</script>

<script>
function comparePassword(){
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password_rep").value;
	
    if (password != confirmPassword)
    	 document.getElementById("PasswordMatch").innerHTML="Both Password must be Same";
    else
    	 document.getElementById("PasswordMatch").innerHTML="Ok! Carry on.";
}
</script>
            <div class="row">
				<div class="col-lg-3">
				</div>
                <div class="col-lg-6 text-center">
					<form name="forget_form" action="employer_forget.php?job=check" method="post">
						<div class="form-group"><input class="form-control" type="text" name="email" id="email" value="{$email}" placeholder="E-mail" style="text-align: center; height: 50px; font-size: 18px;" required />
						</div>
						<div class="form-group"><input class="form-control" type="text" name="code" id="code" value="{$code}" placeholder="Code" style="text-align: center; height: 50px; font-size: 18px;" required />
						</div>
						<div class="form-group">
                                    <input type="Password" class="form-control" placeholder="Password" style="text-align: center; height: 50px; font-size: 18px;" name="password" value="{$password}" id="password" onkeyup="passwordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" required />
									<span id="strendth" ></span>
                                </div>
								<div class="form-group">
									<input type="password" class="form-control" name="password_rep" style="text-align: center; height: 50px; font-size: 18px;" placeholder="Repeat Password" id="password_rep" onkeyup="comparePassword()" required /><span id="PasswordMatch"></span>
								</div>
						<div class="form-group"><input class="btn btn-xl" type="submit" name="ok" value="Ok." /></div>
					</form>
					{if $error}
					      <span style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</span>
					{/if} 
				</div>

				<div class="col-lg-3">
				</div>
				
            </div>

			{else}
				
				<h1 class="section-heading">Welcome Employer</h1>
                <div class="row">
                <div class="col-lg-6">
                    <form name="login" action="employer_login.php?job=login" method="post">
						
						<h4>Login</h4>
                        <div class="row">
                            <div class="col-md-12" ">
                                <div class="form-group">
									<br />
									<br />
                                    <input type="text" class="form-control" placeholder="Username" name="login" required style="text-align: center; height: 50px; font-size: 18px;">
                              
                                </div>
                                <div class="form-group">
                                    <input type="Password" class="form-control" placeholder="password" name="password" required style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>
                                
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <input type="submit" value="ok" class="btn btn-xl" style="margin-bottom: 30px;"/>
                            </div>
                        </div>
                    </form>
<a href="employer_forget.php"><h4>Forgot Password</h4></a>
{if $error}
					      <span style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</span>
{/if}                </div>

				<div class="col-lg-6">
                    <form name="login" action="login.php?job=login" method="post">
						<h4>Register</h4>
                        <div class="row">
                            <div class="col-md-12" ">
                                <a href="employer_index.php?job=register"><img alt="register" src="img/register.png" style="margin-top: 35px;"></a>
                                
                            </div>
                        </div>
                    </form>
                </div>
				
            </div>
			{/if}
            </div>
        </div>
    </header>

	<section id="employees">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Top Ranked CVs</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            {if $em_cv==1}
				<div class="row">
					<div class="col-lg-12 text-center" style="background-color:'.$bgcolor.'; box-shadow: 0 35px 20px #777; margin:10px;">
					<br /><br /><br /><br />
					<h2 class="section-heading">Your CV</h2>
					<h3 class="section-subheading text-muted">Full name : {$full_name}</h3>
                    <h3 class="section-subheading text-muted" style="margin-top:-40px;">Name with initial : {$name_with_initial}</h3>
                    <h3 class="section-subheading text-muted" style="margin-top:-20px;">Gender : {$gender}</h3>
              		<h3 class="section-subheading text-muted" style="margin-top:-20px;">Date Of Birth : {$dob}</h3>
              		<h3 class="section-subheading text-muted" style="margin-top:-20px;">Address : {$address}, {$city}, {$country}</h3>
              		<h3 class="section-subheading text-muted" style="margin-top:-20px;">E-mail : {$email}</h3>
              		<h3 class="section-subheading text-muted" style="margin-top:-20px;">Telephone No : {$telephone_no_1}</h3>
					<h3 class="section-subheading text-muted" style="margin-top:-20px;">Mobile No : {$telephone_no_2}</h3>
					<h3 class="section-subheading text-muted" style="margin-top:-20px;">Highest educational qualification : {$high_edu_qualification}</h3>
              		<h3 class="section-subheading text-muted" style="margin-top:-20px;">Professional qualifications : {$prof_qualification}</h3>
              		<h3 class="section-subheading text-muted" style="margin-top:-20px;">CIMA Contact Id : {$cimaid}</h3>
              		<h3 class="section-subheading text-muted" style="margin-top:-20px;">Language skills : {$language_skill}</h3>
					<h3 class="section-subheading text-muted" style="margin-top:-20px;">Area interested in : {$area_interest}</h3>
					<h3 class="section-subheading text-muted" style="margin-top:-20px;">Area Capable of : {$area_capable}</h3>
					<a href="full_cv.php#cv" class="btn btn-xl">Update Cv</a>
              </div>
				</div>
			{else}
			<div class="row">
                    {php}featured_employees();{/php}
            </div>
			{/if}
        </div>
    </section>




	<!-- Services Section -->
    

	<!-- About Section -->
    

    <section id="jobs">
        <div class="container">

			{if $job==1}
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Other Vacancies</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
			<div class="row">
                <div class="col-lg-3 text-center">
                </div>
           
                <div class="col-lg-6 text-center">
					<form name="post_job_form" action="employer_post_job.php?job=save_job#jobs" enctype="multipart/form-data" method="post">

								<div class="form-group">
                                    <label>Title</label><input type="text" class="form-control" name="job_title" value="{$job_title}" required style="text-align: center; height: 50px; font-size: 18px;">                         
                                </div>

								<div class="form-group">
                                    <label>Detail as Image</label><input type="file" name="detail" id="detail" class="form-control" style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>
								<div class="form-group">
                                    <label>Detail in Text (Optional)</label><textarea class="form-control" name="detail_text">{$detail_text}</textarea>
                                    
                                </div>
								<div class="form-group">
                                    <label>Catagory</label><select name="catagory" class="form-control">
				<option>{$catagory}</option>
				<option>IT-Sware/DB/QA/Web/Graphics/GIS</option>
				<option>IT-HWare/Networks/Systems</option>
				<option>Accounting/Auditing/Finance</option>
				<option>Banking/Insurance</option>
				<option>Sales/Marketing/Merchandising</option>
				<option>HR/Training</option>
				<option>Corporate Management/Analysts</option>
				<option>Office Admin/Secretary/Receptionist</option>
				<option>Civil Eng/Construction</option>
				<option>IT-Telecoms</option>
				<option>Customer Relations/Public Relations</option>
				<option>Logistics/Warehouse/Transport</option>
				<option>Eng-Mech/Auto/Elec</option>
				<option>Manufacturing/Operations</option>
				<option>Media/Advert/Communication</option>
				<option>Hotels/Restaurants/Food</option>
				<option>Hospitality/Tourism</option>
				<option>Arts/Recreation/Sports</option>
				<option>Hospital/Nursing/Healthcare</option>
				<option>Legal/Law</option>
				<option>Supervision/Quality Control</option>
				<option>Apparel/Clothing</option>
				<option>Ticketing/Airline/Marine</option>
				<option>Teaching/Academic/Library</option>
				<option>R&D/Science/Research</option>
				<option>Agriculture/Dairy/Environment</option>
				<option>Security</option>
				<option>Beauty/Cosmetics/Fashion</option>
				<option>International Development</option>
				<option>KPO/BPO</option>
				<option>Imports/Exports</option>
			</select>
                                </div>

								<div class="form-group">
                                    <label>Job Type</label><select name="main_catagory" class="form-control">
				<option>{$main_catagory}</option>
				<option>Government</option>
				<option>NGO</option>
				<option>Private</option>
			</select>
                                </div>

								<div class="form-group">
                                    <label>Part time/ Full time</label><select name="timing" class="form-control">
				<option>{$timing}</option>
				<option>Part time</option>
				<option>Full time</option>
			</select>
                                </div>
								<div class="form-group">
                                    <label>Contact Mail id</label><input type="text" name="contact_mail_id" value="{$contact_mail_id}" class="form-control" required style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>

								<div class="form-group">
                                    <label>Closing Date (YYYY-MM-dd)</label><input type="text" class="form-control" name="closing_date" value="{$closing_date}" required style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>

								<div class="form-group">
                                    <label>Keywords</label><textarea name="keywords" class="form-control" >{$keywords}</textarea>
                                </div>

								<div class="form-group">
                                    {if $edit=='true'} <input type="submit" name="ok" value="Update Job" class="btn btn-xl"/> {else} 
										<input type="submit" name="ok" value="Save Job" class="btn btn-xl"/> {/if}
                                </div>

</form>
                </div>
            </div>
			{elseif $job==2}
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Posted Job</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
					<a href="employer_post_job.php#jobs" class="btn btn-xl">Post New Job</a>
					{php} list_jobs($_SESSION['user_name']); {/php}
                </div>
            </div>
			{elseif $job==3}
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Applicants for the Job</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
					<a href="view_job.php?job=display#jobs" class="btn btn-xl">All Job</a>
					{php}display_job_with_applications($_SESSION['ref_no']);{/php}
                </div>
            </div>

			{elseif $job==4}
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Other Vacancies</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
			<div class="row">
                <div class="col-lg-3 text-center">
                </div>
           
                <div class="col-lg-6 text-center">
					<form name="post_job_form" action="non_member_post_job.php?job=save_job#jobs" enctype="multipart/form-data" method="post">

								<div class="form-group">
                                    <label>Title</label><input type="text" class="form-control" name="job_title" value="{$job_title}" required style="text-align: center; height: 50px; font-size: 18px;">                         
                                </div>

								<div class="form-group">
                                    <label>Detail as Image</label><input type="file" name="detail" id="detail" class="form-control" style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>
								<div class="form-group">
                                    <label>Detail in Text (Optional)</label><textarea class="form-control" name="detail_text">{$detail_text}</textarea>
                                    
                                </div>
								<div class="form-group">
                                    <label>Catagory</label><select name="catagory" class="form-control">
				<option>{$catagory}</option>
				<option>IT-Sware/DB/QA/Web/Graphics/GIS</option>
				<option>IT-HWare/Networks/Systems</option>
				<option>Accounting/Auditing/Finance</option>
				<option>Banking/Insurance</option>
				<option>Sales/Marketing/Merchandising</option>
				<option>HR/Training</option>
				<option>Corporate Management/Analysts</option>
				<option>Office Admin/Secretary/Receptionist</option>
				<option>Civil Eng/Construction</option>
				<option>IT-Telecoms</option>
				<option>Customer Relations/Public Relations</option>
				<option>Logistics/Warehouse/Transport</option>
				<option>Eng-Mech/Auto/Elec</option>
				<option>Manufacturing/Operations</option>
				<option>Media/Advert/Communication</option>
				<option>Hotels/Restaurants/Food</option>
				<option>Hospitality/Tourism</option>
				<option>Arts/Recreation/Sports</option>
				<option>Hospital/Nursing/Healthcare</option>
				<option>Legal/Law</option>
				<option>Supervision/Quality Control</option>
				<option>Apparel/Clothing</option>
				<option>Ticketing/Airline/Marine</option>
				<option>Teaching/Academic/Library</option>
				<option>R&D/Science/Research</option>
				<option>Agriculture/Dairy/Environment</option>
				<option>Security</option>
				<option>Beauty/Cosmetics/Fashion</option>
				<option>International Development</option>
				<option>KPO/BPO</option>
				<option>Imports/Exports</option>
			</select>
                                </div>

								<div class="form-group">
                                    <label>Job Type</label><select name="main_catagory" class="form-control">
				<option>{$main_catagory}</option>
				<option>Government</option>
				<option>NGO</option>
				<option>Private</option>
			</select>
                                </div>

								<div class="form-group">
                                    <label>Part time/ Full time</label><select name="timing" class="form-control">
				<option>{$timing}</option>
				<option>Part time</option>
				<option>Full time</option>
			</select>
                                </div>
								<div class="form-group">
                                    <label>Contact Mail id</label><input type="text" name="contact_mail_id" value="{$contact_mail_id}" class="form-control" required style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>

								<div class="form-group">
                                    <label>Closing Date (YYYY-MM-dd)</label><input type="text" class="form-control" name="closing_date" value="{$closing_date}" required style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>

								<div class="form-group">
                                    <label>Keywords</label><textarea name="keywords" class="form-control" >{$keywords}</textarea>
                                </div>

								<div class="form-group">
                                    {if $edit=='true'} <input type="submit" name="ok" value="Update Job" class="btn btn-xl"/> {else} 
										<input type="submit" name="ok" value="Save Job" class="btn btn-xl"/> {/if}
                                </div>

</form>
                </div>
            </div>

			{elseif $job==5}
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Activate Your Job</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
			<div class="row">
                <div class="col-lg-3 text-center">
                </div>
           
                <div class="col-lg-6 text-center">
					<form name="post_job_form" action="employer_activate.php?job=request#jobs" method="post">

								<div class="form-group">
                                    <label>Email</label><input type="text" class="form-control" name="email" required style="text-align: center; height: 50px; font-size: 18px;">                         
                                </div>

								<div class="form-group">
                                    <label>Job Refference No</label><input type="text" name="ref_no" class="form-control" style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>

								<div class="form-group"><input type="submit" name="ok" value="Send Request" class="btn btn-xl"/>
                                </div>

							</form>
                </div>
            </div>

            {else}
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Post a Job</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                
				<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Post as a partner</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
               		<a href="employer_post_job.php#jobs" class="btn btn-xl">Post</a>
				</div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Post as a third Party</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                	<a href="non_member_post_job.php#jobs" class="btn btn-xl">Post</a>
				</div>
				<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Activate Old Job</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                	<a href="employer_activate.php#jobs" class="btn btn-xl">Activate</a>
				</div>
{if $error}
					      <span style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</span>
{/if}  
            </div>
			{/if}

        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>