{include file="header.tpl"}
{include file="navigation.tpl"}
<div class="side_bar"></div>
<div class="notice" style="top: 500px;"><b>{$notice}</b></div>
<div class="notice" style="top: 500px;"><b>{$error}</b></div>
<div class="admin_regi_form" style="height: 200px">
<form name="forget_form" action="employer_activate.php?job=request" method="post">

<table style="position: absolute; left: 450px; top: 250px; text-align: left;" width="420">

	<tr>
		<th>E-mail</th>
		<td>: <input type="text" name="email" size="26" required /></td>
	</tr>

	<tr>
		<th width="150">Activation Type</th>
		<td>: <select name="type" required>
			<option></option>
			<option>JOB ACTIVATION</option>
			<option>MEMBERSHIP ACTIVATION</option>
			<option>ADVERTISEMENT ACTIVATION</option>
		</select></td>
	</tr>
	
	<tr>
		<th>Job Ref no *</th>
		<td>: <input type="text" name="ref_no" size="26"/></td>
	</tr>
	
	<tr>
		<td align="justify" colspan="2"><lable> <br />* For 'Job activation' please fill job ref number. You can find your job ref number in your email, which was sent by our admin after you posted your job.</lable></td>
	</tr>

	<tr>
		<td align="center" colspan="2"><br /><input type="submit" name="ok"
			value="Ok." /></td>
	</tr>

</table>


</form>
</div>

<div style="position: absolute; top: 640px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}