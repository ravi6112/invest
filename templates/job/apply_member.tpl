{include file="header.tpl"}
{include file="navigation.tpl"}

<form name="apply_member" action="apply_job.php?job=apply_member" method="post" enctype="multipart/form-data">
<table style="position: absolute; top: 250px; left: 35%;" class="apply_now" align="center">

<tr>
<td align="center">Type your message to the employer<br />Other details and your CV will be forwarded by system. <br />If you want to update your CV please go to jobseeker home.</td>
</tr>
<tr>
<td align="center"><textarea name="message" cols="56" rows="6">{$message}</textarea></td>
</tr>

<tr>
<td align="center"><br />
<input type="submit" name="ok" value="Send" />
</td>
</tr>
</table>

</form>

<div style="position: absolute; top: 540px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}
