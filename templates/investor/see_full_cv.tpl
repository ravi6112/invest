{include file="header.tpl"}
{include file="navigation.tpl"}
<div class="left_side_bar" style="height: 460px;">
<ul><a href='employer_index.php'><b>Employer Home</b></a></ul>
<ul><a href='home_page.php'><b>Create Your Homepage</b></a></ul>
<ul><a href='employer_post_job.php'><b>Post New Job</b></a></ul>
<ul><a href='searching.php'><b>Search Jobseekers</b></a></ul>
<ul><a href='check_old_jobs.php'><b>View Jobs Already Posted and CV's Received</b></a></ul>
<ul><a href='pay_to_view.php'><b>Buy CV's</b></a></ul>
<ul><a href='check_bought_cv.php'><b>View Bought CVs</b></a></ul>
<ul><a href='employer_login.php?job=logout'><b>Logout</b></a></ul>
</div>
<div class="notice"><b>{$notice}</b></div>
<div class="notice"><b>{$error}</b></div>

<div class="job_post_area1">
<h5>View Bought CVs</h5>
{php} list_full_cv($_SESSION['user_name']); {/php}
</div>

</form>

<div style="position: absolute; top: 640px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}