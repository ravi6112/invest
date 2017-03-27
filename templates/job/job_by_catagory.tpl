{include file="header.tpl"}
{include file="navigation.tpl"}
<div class="side_bar" style="height: 640px;">{php}featured_employers();{/php}</div>
<div class="job_catagories"></div>
{include file="list_catagory.tpl"}
<div class="notice" style="top: 125px;"><b>{$notice}</b></div>
<div class="notice" style="top: 125px;"><b>{$error}</b></div>
<div class="testing" style="top: 125px;"><b>{$testing}</b></div>
<div class="list_jobs_by_catagory">
{php}list_job_by_catagory($_SESSION['catagory']);{/php}
</div>

<div style="position: absolute; top: 900px; width: 100%; text-align: center; font-size: 13px; padding-bottom: 10px;">
{include file="footer.tpl"}