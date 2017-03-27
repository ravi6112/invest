{include file="header.tpl"}
{include file="navigation.tpl"}

<form name="apply_non_member" action="apply_job.php?job=apply_non_member" method="post" enctype="multipart/form-data">
<table style="position: absolute; top: 220px; left: 22%;" class="apply_now">
<tr>
<td>Company</td>
<td>: </td><td><input type="text" name="company_name" value="{$company_name}" size="40" readonly="readonly"/></td>
<td rowspan="9" width="400" style="padding-left: 20px; text-align: justify; vertical-align: top; background-color: #464E82; color: white; padding-right: 20px;"> <p style="font-size: 13px;"><strong>Why register with us?</strong></p>
<p style="font-size: 13px;">
At mycimajobs.com, you have access to a wide range of jobs, with new vacancies uploaded everyday
from employers across Sri Lanka. Get the job you desire from an array of vacancies at myrassawa.com.
<br />Register today and get the following benefits</p>
<ul style="font-size: 12px;">
<li>Upload your CV or create an online CV and let employers find you.</li>
<li>Search through a number of vacancies, save job searches and stay up to date with the latest job vacancies</li>
<li>Search for your dream job by category, location or key words</li>
<li>Perform a job search and find jobs that suit your skills, experience and interests with our efficient filtering system / Our efficient filtering system will filter out potential jobs for you based on your interests, skills and capabilities.</li>
<li>Create a personal profile to enhance your possibilities of being found by employers</li>
<li>Manage your own user area</li>
</ul>
<p style="font-size: 13px;">Click here to register today and benefit from our services at no cost to you.</p></td>
</tr>

<tr>
<td>Job Title</td>
<td>: </td><td><input type="text" name="job_title" value="{$job_title}" size="40" readonly="readonly"/></td>
</tr>

<tr>
<td>Job Ref No</td>
<td>: </td><td><input type="text" name="ref_no" value="{$ref_no}" size="40" readonly="readonly"/></td>
</tr>

<tr>
<td>Company E-mail</td>
<td>: </td><td><input type="text" name="contact_mail_id" value="{$contact_mail_id}" size="40" readonly="readonly"/></td>
</tr>

<tr>
<td>Your Name</td>
<td>: </td><td><input type="text" name="name" size="40" required/></td>
</tr>

<tr>
<td>Your E-mail</td>
<td>: </td><td><input type="text" name="mail_id" size="40" required/></td>
</tr>

<tr>
<td>Your Message</td>
<td>: </td><td><textarea name="message" cols="44" rows="6">{$message}</textarea></td>
</tr>

<tr>
<td>Your CV</td>
<td>: </td><td><input type="file" name="cv_upload" size="26" required/></td>
</tr>

<tr>
<td align="center" colspan="3"><br />
<input type="submit" name="ok" value="Send" />
</td>
</tr>
</table>

</form>
<div style="position: absolute; top: 640px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}
