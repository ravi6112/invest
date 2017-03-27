{include file="header.tpl"}
{include file="employer_navigation.tpl"}


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
<div class="col-lg-5">
<>Select applications to buy CV (each CV will cost 300/=)</b></p><br />
{php}list_applicants($_SESSION['user_name']);{/php}
</div>

<div class='col-lg-3'>
	<p><b>Selected CVs.</b></p><br />
{php}list_selected_applicants($_SESSION['user_name']);{/php}
</div>

<div class='col-lg-3'>
	<p><b>CVs due for payment</b></p><br />
	<p><font color="red"><b>{$pending_payment}</b></font></p>
{php}list_pending_applicants($_SESSION['user_name']);{/php}
</div>

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>

{include file="admin_footer.tpl"}