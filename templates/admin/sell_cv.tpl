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
<div class="notice"><b>{$notice}</b></div>
<div class="notice"><b>{$error}</b></div>

<div class="jobs_filter">
<h5>CVs waiting for payment confirmation</h5>
{php} list_non_paid_cvs(); {/php}
</div>
<div style="position: absolute; top: 640px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}