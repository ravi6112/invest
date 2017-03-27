{include file="header.tpl"}
{include file="employer_navigation.tpl"}


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-9"><h2>CV of {$full_name}</h2></div>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Full name</td>
					<td>{$full_name}</td>
				</tr>
				<tr>
					<td>Name with initial</td>
					<td>{$name_with_initial}</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>{$gender}</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td>{$dob}</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>{$address}, {$city}, {$country}</td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td>{$email}</td>
				</tr>
				<tr>
					<td>Telephone No</td>
					<td>{$telephone_no_1}</td>
				</tr>
				<tr>
					<td>Mobile No</td>
					<td>{$telephone_no_2}</td>
				</tr>
				<tr>
					<td>Highest educational qualification</td>
					<td>{$high_edu_qualification}</td>
				</tr>
				<tr>
					<td>Professional qualifications</td>
					<td>{$prof_qualification}</td>
				</tr>
				<tr>
					<td>Language skills</td>
					<td>{$language_skill}</td>
				</tr>
				<tr>
					<td>Area interested in</td>
					<td>{$area_interest}</td>
				</tr>
				<tr>
					<td>Area Capable of</td>
					<td>{$area_capable}</td>
				</tr>
			</table>



			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>

{include file="admin_footer.tpl"}