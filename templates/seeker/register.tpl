{include file="new_header.tpl"}

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
function emailCheck(pass)
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
xmlhttp.open("GET","ajax/query_check_user_email.php?email="+pass,true);
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

<div class="container">
	<div class="row">
		<h2>Register</h2>
		<div style="background-color: white; opacity: 0.8;"><p style="font-family: Arial; font-size: 16px; color: black;">Bla blaa blaa Bla blaa blaa Bla blaa blaa Bla blaa blaa Bla blaa blaa Bla blaa blaa. Bla blaa blaa Bla blaa blaa Bla blaa blaa Bla blaa blaa. 
		Bla blaa blaa Bla blaa blaa Bla blaa blaa Bla blaa blaa.
		Bla blaa blaa Bla blaa blaa Bla blaa blaa Bla blaa blaa.
		Bla blaa blaa Bla blaa blaa Bla blaa blaa Bla blaa blaa.
		Bla blaa blaa Bla blaa blaa Bla blaa blaa Bla blaa blaa.</p>
		</div>
		
		<div class="col-lg-12">
			<form name="register_form" action="regi_seeker.php?job=register" method="post">
			
				<div class="form-group col-lg-6">
					<input class="form-control" placeholder="Username" type="text" name="user_name" id="user_name" value="{$user_name}" onkeyup="showPass1(this.value)" required /><span id="availability_status"></span>
				</div>
				<div class="form-group col-lg-6">
					<input class="form-control" placeholder="Email" type="text" name="email" value="{$email}"  id="email" onkeyup="emailCheck(this.value)" required/><span id="emailchecking"></span>
				</div>
				<div class="form-group col-lg-6">
					<input class="form-control" placeholder="Password" type="password" name="password" value="{$password}" id="password" onkeyup="passwordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" required /><span id="strendth"></span>
				</div>
				<div class="form-group col-lg-6">
					<input class="form-control" placeholder="Repeat Password"type="password" name="password_rep" value="{$password_rep}" id="password_rep" onkeyup="comparePassword()" required /><span id="PasswordMatch"></span>
				</div>
				<div class="form-group col-lg-6">
					<input class="btn btn-danger btn-block" type="submit" name="ok" value="Register Now!" />
				</div>
			
			</form>


<div style="position: absolute; top: 640px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}
