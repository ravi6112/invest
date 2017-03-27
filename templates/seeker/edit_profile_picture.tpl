{include file="header.tpl"}
{include file="seeker_navigation.tpl"}
<section class="content-header">
	<h1>
	  New Profile
	  <small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
	  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">New Profile</li>
	</ol>
</section>

<section class="content">
	<div class="nav-tabs-custom">
	<div class="row">
		<div class="col-lg-12">
			<div class="nav-tabs-custom">
				<h1 class="section-heading">Upload New Profile Picture</h1>
				</div>
				<div class="row">
					<form name="form1" enctype="multipart/form-data" method="post" action="seeker_profile.php?job=save_pic">
							<section class="content">
									<div class="form-group">
								<input id="file-1" name="profile_pic" type="file"  data-overwrite-initial="false" data-min-file-count="1">
							</div>
							
							</section>
					</form>
					

			</div>
		
			<!-- /.col-lg-12 -->
	</div>
		<!-- /.row -->
	</div>
	<!-- nav-tabs-custom-->
</div>
	<!--content-->
</section>

{include file="js_footer.tpl"}