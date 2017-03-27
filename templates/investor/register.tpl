{include file="new_header.tpl"}
{literal}
<script>

<script>
function passwordStrength(password,passwordStrength,errorField)
{

var desc = new Array();
desc[0] = "  Blank";
desc[1] = "  Very Weak";
desc[2] = "  Weak";
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
{/literal}

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

		<form name="login_form" action="regi_inv.php?job=register" method="post">
			<div class="form-group col-lg-6">
				<input class="form-control" type="text" name="user_name" id="user_name" placeholder="Username" onkeyup="showPass1(this.value)" required />
				<span id="availability_status">
			</div>
			<div class="form-group col-lg-6">
				<input class="form-control"  type="text" name="email" placeholder="Email" id="email" onkeyup="emailCheck(this.value)" required /><span id="emailchecking"></span>
			</div>
			<div class="form-group col-lg-6">
				<input class="form-control" type="password" name="password" placeholder="Password" id="password" onkeyup="passwordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" required />
				<span id="strendth"></span>
			</div>
			<div class="form-group col-lg-6">
				<input class="form-control" type="password" name="password_rep" placeholder="Repeat Password" id="password_rep" onkeyup="comparePassword()" required />
				<span id="PasswordMatch"></span>
			</div>
			<div class="form-group col-lg-6">
				<input class="form-control" type="text" name="company_name" placeholder="Company Name" required />
			</div>
			<div class="form-group col-lg-6">
				<input class="form-control" type="text" name="telephone_no" placeholder="Telephone Number" required" />
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="address" placeholder="Address" required />
			</div>
			<div class="form-group col-lg-6">
				<select class="form-control" name="city">
					<option>Select a City</option>
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
			<div class="form-group col-lg-6">
				<select class="form-control"  name="country">
					<option>Select a Country</option>
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
			<div class="form-group col-lg-6">
				<input class="form-control" type="text" name="contact_person" placeholder="Contact Person" required />
			</div>
			<div class="form-group col-lg-6">
				<input class="btn btn-danger btn-block" type="submit" name="ok" value="Register Now!" /></td>
			</div>

		</form>
		</div>
	</div>
</div>
