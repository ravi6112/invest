<?php /* Smarty version Smarty-3.0.8, created on 2017-03-27 13:48:23
         compiled from "./templates/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154630893558d8cacf654998-26693811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbacb9510296a25cbfcc9aec826eb79a065dc6af' => 
    array (
      0 => './templates/navigation.tpl',
      1 => 1473936552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154630893558d8cacf654998-26693811',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- BEGIN Menu -->
<div class="menu_box"></div>
<table class="menu" style="min-width: 1360px; width: 98%;">
<tr>
<th width="140"><a href='advertise.php'>Advertise</a></th>
<th width="220"><a href='learning.php'>Learning & Development</a></th>
<th width="200"><a href='featured_employers.php'>Featured Employers</a></th>
<th width="120"><a href='statistics.php'>Statistics</a></th>
<th width="120"><a href='post_job.php'>Post Job</a></th>
<th width="160"><a href='employer_index.php'>Employer Home</a></th>
<th width="180"><a href='employee_index.php'>Job Seeker Home</a></th>
<th width="120"><a href='contact_us.php'>Contact Us</a></th>
</tr>
</table>

<table class="mini_searching" height="30">
<tr>
	<td width="750">
		<form name="search_mini" action="mini_searching.php?job=search_mini" method="post">
			Job Type : <select name="main_catagory" required>
							<option><?php echo $_smarty_tpl->getVariable('main_catagory')->value;?>
</option>
							<option>Any</option>
							<option>Government</option>
							<option>NGO</option>
							<option>Private</option>
						</select>
			 Job Timing : <select name="timing" required>
			 				<option><?php echo $_smarty_tpl->getVariable('timing')->value;?>
</option>
			 				<option>Any</option>
			 				<option>Part time</option>
			 				<option>Full time</option>
			 			</select> 
			 Keyword : <input type="text" name="keyword" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
"/> <input type="submit" name="search" value="Search" />
		 </form>
	 </td>
	<td>
		<form name="search_by_ref_no" action="mini_searching.php?job=search_by_ref_no" method="post">
			Job ref no : <input type="text" name="ref_no" value="<?php echo $_smarty_tpl->getVariable('ref_no')->value;?>
" required/> 
			<input type="submit" name="search" value="Search" />
		</form>
	</td>
</tr>
</table>

<!-- END Menu -->