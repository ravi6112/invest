{include file="header.tpl"}
{include file="employer_navigation.tpl"}


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-9"><h2>Search for the best candidates</h2></div>
		</div>
		<div class="row">
		<form name="employee_search" action="searching.php?job=search" method="post">
			<div class="form-group col-lg-6">
				<input class="form-control" type="text" name="keyword_for_search" value="{$keyword_for_search}" placeholder="Keyword" required />
			</div>
			<div class="form-group col-lg-3">
				<select class="form-control" name="qual_for_search" required>
					{if $qual_for_search}
						<option>{$qual_for_search}</option>
					{else}
						<option disabled selected>Select Educational Qualification</option>
					{/if}
							<option>ANY</option>
							<option>UNDER GRADUATE</option>
							<option>POST GRADUATE</option>
						</select>
			</div>
			<div class="form-group col-lg-3">
				<select class="form-control"  name="experience" required>
					{if $experience}
						<option>{$experience}</option>
					{else}
						<option disabled selected>Select Experience</option>
					{/if}
							<option>ANY</option>
							<option>1 Year</option>
							<option>2 Years</option>
							<option>3 Years</option>
							<option>5 Years</option>
							<option>Above 5 Years</option>
						</select>
			</div>
			<div class="form-group col-lg-3">
				<select class="form-control" name="language" required>
					{if $language}
						<option>{$language}</option>
					{else}
						<option disabled selected>Select Language</option>
					{/if}
							<option>Sinhala, Tamil And English</option>
							<option>Sinhala And Tamil</option>
							<option>Sinhala And English</option>
							<option>Tamil And English</option>
							<option>Sinhala</option>
							<option>Tamil</option>
							<option>English</option>
						</select>
			</div>
			<div class="form-group col-lg-3">
				<select class="form-control"  name="gender" required>
					{if $gender}
						<option>{$gender}</option>
					{else}
						<option disabled selected>Select Gender</option>
					{/if}
							<option>ANY</option>
							<option>MALE</option>
							<option>FEMALE</option>
						</select>
			</div>
			<div class="form-group col-lg-3">
				<select class="form-control"  name="age" required>
					{if $age}
						<option>{$age}</option>
					{else}
						<option disabled selected>Select Age</option>
					{/if}
							<option>ANY</option>
							<option>18-25</option>
							<option>26-35</option>
							<option>36-45</option>
							<option>45+</option>
						</select>
			</div>
			<div class="form-group col-lg-3">
				<select class="form-control"  name="city" required>
					{if $city}
						<option>{$city}</option>
					{else}
						<option disabled selected>Select City</option>
					{/if}
							<option>ANY</option>
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
			<div class="form-group col-lg-3">
				<select class="form-control" name="country" required>
					{if $country}
					<option>{$country}</option>
					{else}
					<option disabled selected>Select Country</option>
					{/if}
							<option>ANY</option>
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
			<div class="form-group col-lg-3">
				<input class="form-control btn btn-danger"  type="submit" name="submit" value="Search" />
			</div>

		</form>
	</div>

	<diV class="row">
		{php} list_employees($_SESSION['keyword_for_search'], $_SESSION['qual_for_search'], $_SESSION['experience'], $_SESSION['language'], $_SESSION['gender'], $_SESSION['age'], $_SESSION['city'], $_SESSION['country']); {/php}
	</div>


			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>

{include file="admin_footer.tpl"}