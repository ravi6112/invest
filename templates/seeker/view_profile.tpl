{include file="header.tpl"}
{include file="seeker_navigation.tpl"}
<section class="content-header">
	<h1>
	  Profile
	  <small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
	  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">Profile</li>
	</ol>
</section>

{literal}
<style>
	.fa:hover {
		color: #3B5998;
	}
	
</style>
{/literal}
<!-- Page Content -->
<div id="page-wrapper">
	<section class="content">
	`	<div class="nav-tabs-custom">
			<div class="container-fluid">
				<div class="row" style="margin-top: 20px;">

			<div class="col-lg-3">
                {if $image}
					<img src="{$image}" class="img-responsive"/>
				{else}
					<img src="images/users.png" class="img-responsive img-thumbnail"/>
				{/if}
				<a href="seeker_profile.php?job=edit_profile_pic" class="btn btn-lg btn-danger btn-block" style="margin-top: 10px; font-size: 14px;"><i class="fa fa-pencil-square-o fa-lg"></i> Eidt Profile Picture</a>
			</div>
			<div class="col-lg-9">
				<table class="table table-hover" style="font-size: 14px;">
				
				<tr>
					<td colspan="2" style="background-color: #C63D2D;"><h4 style="color: #fff; margin-bottom: -5px; margin-top: -1px;">Personal Details</h4></td>
			  	</tr>
				
				<tr>
					<td><i class="fa fa-user fa-lg" aria-hidden="true"></i> Full name</td>
					<td contenteditable="true" onBlur="updateFeild(this,'full_name')" onClick="showEdit(this);">{$full_name}</td>
			  
				</tr>
				<tr>
					<td><i class="fa fa-envelope lg" aria-hidden="true"></i> Email </td>
					<td contenteditable="true" onBlur="updateFeild(this,'email')" onClick="showEdit(this);">{$email}</td>
				</tr>
				<tr>
					<td><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> Telephone</td>
					<td contenteditable="true" onBlur="updateFeild(this,'mobile')" onClick="showEdit(this);">{$mobile}</td>
				</tr>
				<tr>
					<td><i class="fa fa-home fa-lg" aria-hidden="true"></i> Address</td>
					<td contenteditable="true" onBlur="updateFeild(this,'address')" onClick="showEdit(this);">{$address}</td>
				</tr>
				<tr>
					<td><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Facebook</td>
					<td contenteditable="true" onBlur="updateFeild(this,'fb')" onClick="showEdit(this);">{$fb}</td>
				</tr>
				<tr>
					<td><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i> Twitter</td>
					<td contenteditable="true" onBlur="updateFeild(this,'twitter')" onClick="showEdit(this);">{$twitter}</td>
				</tr>
				<tr>
					<td><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> Linkedin</td>
					<td contenteditable="true" onBlur="updateFeild(this,'linkedin')" onClick="showEdit(this);">{$linkedin}</td>
				</tr>
				<tr>
					<td><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i> Google+</td>
					<td contenteditable="true" onBlur="updateFeild(this,'google_plus')" onClick="showEdit(this);">{$google_plus}</td>
				</tr>
				
				<tr>
					<td colspan="2" style="background-color: #C63D2D;"><h4 style="color: #fff; margin-bottom: -5px; margin-top: -1px;">Company Details</h4></td>
			  	</tr>
				<tr>
					<td><i class="fa fa-building fa-lg" aria-hidden="true"></i> Company Name</td>
					<td contenteditable="true" onBlur="updateFeild(this,'company')" onClick="showEdit(this);">{$company}</td>
				</tr>
				<tr>
					<td><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i> Designation</td>
					<td contenteditable="true" onBlur="updateFeild(this,'designation')" onClick="showEdit(this);">{$designation}</td>
				</tr>
				<tr>
					<td><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> Telephone</td>
					<td contenteditable="true" onBlur="updateFeild(this,'company_telephone')" onClick="showEdit(this);">{$company_telephone}</td>
				</tr>
				<tr>
					<td><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> E-mail</td>
					<td contenteditable="true" onBlur="updateFeild(this,'company_email')" onClick="showEdit(this);">{$company_email}</td>
				</tr>
				<tr>
					<td><i class="fa fa-building fa-lg" aria-hidden="true"></i> Company Address</td>
					<td contenteditable="true" onBlur="updateFeild(this,'company_address')" onClick="showEdit(this);">{$company_address}</td>
				</tr>
			</table>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3" ></div>
		</div>
			
			
			
			



			<!-- /.col-lg-12 -->
				</div>
		<!-- /.row -->
			</div>
	<!-- /.container-fluid -->
		</div>
<!--nav-tabs-custom-->
	</div>
<!--content-->
</section>
<!-- /#page-wrapper -->

</div>

{include file="js_footer.tpl"}