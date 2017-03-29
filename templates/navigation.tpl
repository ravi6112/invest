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
					<option>{$main_catagory}</option>
					<option>Any</option>
					<option>Government</option>
					<option>NGO</option>
					<option>Private</option>
				</select>
				Job Timing : <select name="timing" required>
					<option>{$timing}</option>
					<option>Any</option>
					<option>Part time</option>
					<option>Full time</option>
				</select>
				Keyword : <input type="text" name="keyword" value="{$keyword}"/> <input type="submit" name="search" value="Search" />
			</form>
		</td>
		<td>
			<form name="search_by_ref_no" action="mini_searching.php?job=search_by_ref_no" method="post">
				Job ref no : <input type="text" name="ref_no" value="{$ref_no}" required/>
				<input type="submit" name="search" value="Search" />
			</form>
		</td>
	</tr>
</table>

<!-- END Menu -->