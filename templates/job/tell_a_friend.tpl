{include file="header.tpl"}
{include file="navigation.tpl"}

<div class="notice"><b>{$notice}</b></div>
<div class="notice"><b>{$error}</b></div>

{literal}
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
{/literal}
    
<form name="tell_friend_form" action="tell_a_friend.php?job=tell" method="post">
<div class="tell_a_friend">
<table>

<tr><td>Your Name</td><td>: <input type="text" name="your_name" value="{$your_name}" size="40" required/></td></tr>

<tr><td>Your Email</td><td>: <input type="text" name="your_email" value="{$your_email}" size="40" required/></td></tr>

<tr><td>Friend's Name</td><td>: <input type="text" name="friend_name" value="{$friend_name}" size="40" required/></td></tr>

<tr><td>Friend's Email</td><td>: <input type="text" name="friend_email" value="{$friend_email}" size="40" required/></td></tr>

<tr><td colspan="2" align="center"><br /><input type="submit" name="ok" value="Tell a Friend." /></td></tr>

</table>
</div>

</form>

<div style="position: absolute; top: 540px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}