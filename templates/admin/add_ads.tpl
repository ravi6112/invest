{include file="header.tpl"}
{include file="navigation.tpl"}
<div class="left_side_bar" style="height: 420px;">
<ul><a href='admin_index.php'><b>Admin Home</b></a></ul>
<ul><a href='add_admin.php'><b>Add Admin</b></a></ul>
<ul><a href='add_ads.php'><b>Add Advertisement</b></a></ul>
<ul><a href='sell_cvs.php'><b>Sell CVS</b></a></ul>
<ul><a href='all_employers.php'><b>View Employers</b></a></ul>
<ul><a href='activate_page.php?job=see_employers'><b>Activate Employer</b></a></ul>
<ul><a href='activate_page.php?job=see_jobs'><b>Activate Job</b></a></ul>
<ul><a href='activate_page.php?job=all'><b>All Job</b></a></ul>
<ul><a href='all_employees.php'><b>View Employees</b></a></ul>
<ul><a href='adminlogin.php?job=logout'><b>Logout</b></a></ul>
</div>
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
    document.getElementById("user_name_hidden").innerHTML="hai";
    }
  }
xmlhttp.open("GET","ajax/query_check_username.php?user_name="+pass,true);
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
xmlhttp.open("GET","ajax/query_check_email.php?email="+pass,true);
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

<div id="notification" ><b>{$notice}</b></div>

<div class="add_admin_area">
<form name="add_ads_form" action="add_ads.php?job=save"
	enctype="multipart/form-data" method="post">

<table>

	<tr>
		<td>Company Name</td>
		<td>: <input type="text" name="company_name" value="{$company_name}"
			size="49" required /></td>
	</tr>


	<tr>
		<td>Email</td>
		<td>: <input type="text" name="email"
			value="{$email}" size="49" required /></td>
	</tr>

	<tr>
		<td>Telehone no</td>
		<td>: <input type="telephone_no" name="telephone_no" value="{$telephone_no}"
			size="49" required /></td>
	</tr>
	
	<tr>
		<td>Link</td>
		<td>: <input type="text" name="link" value="{$link}"
			size="49" required /></td>
	</tr>

	<tr>
		<td>Image</td>
		<td>: <input type="file" name="image" id="image" size="35" /></td>
	</tr>
	
	<tr>
		<td>AD Type</td>
		<td>: <select name="ad_type" required>
			<option>{$ad_type}</option>
			<option>SMALL ADS</option>
			<option>ROTATING ADS</option>
		</select></td>
	</tr>

	<tr><td>
{if $edit=='true'}
<input type="submit" name="ok" value="Update" />
{else}
<input type="submit" name="ok" value="Save" />
{/if}</td>
	</tr>

</table>
<lable><p><font color="red" size="4">Upload your ad as an image. And image size must less than 512Kbs</font></p></lable>

</form>
<br />

{php} list_ads(); {/php}
</div>

<div style="position: absolute; top: 690px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}