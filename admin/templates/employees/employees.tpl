{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
{literal}
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		source: "ajax/query_employees.php",
		minLength: 1
	});				

});
</script>

<script language="JavaScript" type="text/javascript">
  function employee(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox_employee').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox_employee').style.visibility="hidden"; 
    }
  }
</script>
{/literal}

<div id="popupbox_employee"> 
	<br />
	<form name="add" action="employees.php?job=add" method="post" class="product">
		<table>
			<tr>
				<td>Employee Name</td>
				<td> :</td>
				<td><input type="text" name="employee_name" value="{$employee_name}" required size="35"/></td>		
			</tr>
			<tr>
				<td>Full Name</td>
				<td> :</td>
				<td><input type="text" name="full_name" value="{$full_name}" required size="35"/></td>		
			</tr>
			<tr>
				<td>Department</td>
				<td> :</td>
				<td><input type="text" name="department" value="{$department}" required size="35" placeholder="E.g - Accounts" /></td>
			</tr>
			<tr>
				<td>Email Id</td>
				<td> :</td>
				<td><input type="text" name="email" value="{$email}" size="35"/></td>		
			</tr>
			<tr>
				<td>Telephone No</td>
				<td> :</td>
				<td><input type="text" name="telephone" value="{$telephone}" required size="35"/></td>		
			</tr>
			<tr>
				<td>Mobile No</td>
				<td> :</td>
				<td><input type="text" name="mobile" value="{$mobile}" required size="35"/></td>		
			</tr>
			<tr>
				<td>Address</td>
				<td> :</td>
				<td><textarea name="address" rows="2" cols="34">{$address}</textarea></td>		
			</tr>
			
				<tr>
					<td colspan="3" align="center" height="40">Add username and password if this employee will use the system.</td>
				</tr>
			<tr>
				<td>System User</td>
				<td>: </td><td><input type="checkbox" name="user" value="1" {$user}>Yes</td>
				
			</tr>
			<tr>
				<td>User Name</td>
				<td> :</td>
				<td><input type="text" name="user_name" value="{$user_name}" size="35"/></td>		
			</tr>
			<tr>
				<td>Password</td>
				<td> :</td>
				<td><input type="password" name="password" value="{$password}" size="35"/></td>		
			</tr>
			<tr>
				<td colspan="3"><br />
					{if $edit_mode=='on'}
					<input type="submit" name="ok" value="Update" />
					{else}
					<input type="submit" name="ok" value="Save" />
					{/if}
				</td>		
			</tr>
		</table>
	</form>
	<a href="javascript:employee('hide');"><img src="./images/close.png" width="15" height="15" style="position: absolute; top: 5px; right: 5px;"/></a>
</div>

	<div id="contents">
		{include file="user_navigation.tpl"}
		<div class="main_user_home" style="min-height: 300px;">
			{if $search_mode=='on'}
			<div style="width: 99%; margin-right: 10px;">
			<form action="employees.php?job=search" method="post" class="search">
					<table>
						<tr>
							<td width="480">
								Add New Employee
							</td>
							<td width="60">
								<a href="javascript:employee('show');">
									<img alt="add" src="./images/add.png">
								</a>
							</td>
							<td>
								<input type="text" class='auto' name="search" value="{$search}" size="27" placeholder="Search"/> 
							</td>
							<td width="40" align="right" style="padding-bottom: 10px;">
								<input type="image" src="./images/search.png" height="28" width="28"/>
							</td>
						</tr>
					</table>
				</form>
			</div>
			{php}list_employees_search($_SESSION[search]);{/php}
			{else}
			<div>
				<form action="employees.php?job=search" method="post" class="search">
					<table>
						<tr>
							<td width="400">
								Add New Employee
							</td>
							<td width="60">
								<a href="javascript:employee('show');">
									<img alt="add" src="./images/add.png">
								</a>
							</td>
							<td>
								<input type="text" class='auto' name="search" value="{$search}" size="35" placeholder="Search"/> 
							</td>
							<td width="40" align="right" style="padding-bottom: 10px;">
								<input type="image" src="./images/search.png" height="28" width="28"/>
							</td>
						</tr>
					</table>
				</form>
				{php}list_employees();{/php}
			</div>
			{/if}
		</div>
	</div>

{include file="user_footer.tpl"}