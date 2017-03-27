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
<div class="standard_cv">
<table class="employee_detail" cellpadding="3">

<tr valign="top">
<th>Full name</th>
<td>: </td><td>{$full_name}</td>
</tr>

<tr>
<th>Name with initial</th>
<td>: </td><td>{$name_with_initial}</td>
</tr>

<tr>
<th>Gender</th>
<td>: </td><td>{$gender}</td>
</tr>

<tr>
<th>Date Of Birth</th>
<td>: </td><td>{$dob}</td>
</tr>

{if $telephone_no_1>'0'}
<tr>
<th>Address</th>
<td>: </td><td>{$address}<br />
			{$city}<br />
			{$country}</td>
</tr>

<tr>
<th>E-mail</th>
<td>: </td><td>{$email}</td>
</tr>

<tr>
<th>Telephone No 1</th>
<td>: </td><td>{$telephone_no_1}</td>
</tr>

<tr>
<th>Telephone No 2</th>
<td>: </td><td>{$telephone_no_2}</td>
</tr>
{else}
{/if}

<tr>
<th>Latest heigher educational qualification</th>
<td>: </td><td>{$high_edu_qualification}</td>
</tr>

<tr>
<th>Professional qualifications</th>
<td>: </td><td>{$prof_qualification}</td>
</tr>

{if $cimaid>'0'}
<tr>
<th>CIMA Contact Id</th>
<td>: </td><td>{$cimaid}</td>
</tr>
{else}
{/if}

<tr>
<th>Latest Work Experience</th>
<td>: </td><td>{$latest_experience}</td>
</tr>

<tr>
<th>Language skills</th>
<td>: </td><td>{$language_skill}</td>
</tr>

<tr>
<th>Area interested in</th>
<td>: </td><td>{$area_interest}</td>
</tr>

<tr>
<th>Area Capable of</th>
<td>: </td><td>{$area_capable}</td>
</tr>

</table>
{if $telephone_no_1>'0'}

{else}
<a href="pay_to_view.php?job=pay"><div class="pay_button">Pay to view full CV.</div></a>
{/if}
</div>
<div style="position: absolute; top: 640px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}