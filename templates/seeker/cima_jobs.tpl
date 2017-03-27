{include file="header.tpl"}
{include file="navigation.tpl"}
<div class="left_side_bar" style="height: 460px;">
<ul><a href='employee_index.php'><b>Job Seeker Home</b></a></ul>
<ul><a href='full_cv.php'><b>Update Profile</b></a></ul>
<ul><a href='flaged_jobs.php'><b>My Flaged Jobs</b></a></ul>
<ul><a href='jobs_for_me.php?job=cima'><b>CIMA jobs</b></a></ul>
<ul><a href='jobs_for_me.php?job=my_interest'><b>Jobs I Prefer</b></a></ul>
<ul><a href='jobs_for_me.php?job=capable_jobs'><b>Jobs I Can Do</b></a></ul>
<ul><a href='login.php?job=logout'><b>Logout</b></a></ul>
</div>

<div class="jobs_filter">
<p><b>Jobs posted by CIMA Sri Lanka Division.</b></p>
{php} cima_jobs(); {/php}
</div>
<div style="position: absolute; top: 640px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}