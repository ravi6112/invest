{include file="header.tpl"}

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img alt="logo" src="img/logo.png" width="80" height="50" style="float: left; margin-right: 10px; margin-top: -10px;"><font color="blue">Imperial Job Hub</font></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li>
					<a href="employer_regi.php">Register</a>
				</li>
				<li>
					<a href="employer_forget.php">Forget Password</a>
				</li>

				<li>
					<a href="employer_activate.php">Activate Account</a>
				</li>
				<li>
					<a href="index.php">Back To Home Page</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
<!-- Header -->

	<div class="container">
		<div class="intro-text" style="padding-top: 120px; padding-bottom: 180px;">

			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-8 text-center">


					{if $error}
						<h2>Thanks For Using Imperial Job Hub</h2>

						<h2 style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</h2>
					{else}
						<h2>Post Your Job</h2>
						<p align="center"><font color="red" size="4">If your previous jobs are not activated yet <a href="employer_activate.php">ACTIVATE</a> now</font></p>
						<p align="center"><font color="red" size="4">If you are uploading your Details as an image, image size should be less than 512Kbs.<br /> Please type a 'comma' and a 'space' after each keyword</font></p>

						<form name="post_job_form" action="non_member_post_job.php?job=save_job" enctype="multipart/form-data" method="post">
						<div class="form-group col-lg-6"><label>Company Name</label>
							<input class="form-control" ype="text" name="company_name" value="{$company_name}"
										 size="49" required /></td>
						</div>


						<div class="form-group col-lg-6"><label>Contact person mail id</label>
							<input class="form-control" type="text" name="contact_mail_id"
										 value="{$contact_mail_id}" size="49" required /></td>
						</div>

						<div class="form-group col-lg-6"><label>Job Title</label>
							<input class="form-control" type="text" name="job_title" value="{$job_title}" required/>
						</div>

						<div class="form-group col-lg-6"><label>Detail as Image</label>
							<input class="form-control" type="file" name="detail" id="detail"/>
						</div>

						<div class="form-group col-lg-12"><label>Detail in Text (Optional)</label>
							<textarea class="form-control" name="detail_text" cols="55" rows="7" >{$detail_text}</textarea>
						</div>

						<div class="form-group col-lg-4"><label>Job Catagory</label>
							<select class="form-control" name="catagory" >
								<option>{$catagory}</option>
								<option>IT-Sware/DB/QA/Web/Graphics/GIS</option>
								<option>IT-HWare/Networks/Systems</option>
								<option>Accounting/Auditing/Finance</option>
								<option>Banking/Insurance</option>
								<option>Sales/Marketing/Merchandising</option>
								<option>HR/Training</option>
								<option>Corporate Management/Analysts</option>
								<option>Office Admin/Secretary/Receptionist</option>
								<option>Civil Eng/Construction</option>
								<option>IT-Telecoms</option>
								<option>Customer Relations/Public Relations</option>
								<option>Logistics/Warehouse/Transport</option>
								<option>Eng-Mech/Auto/Elec</option>
								<option>Manufacturing/Operations</option>
								<option>Media/Advert/Communication</option>
								<option>Hotels/Restaurants/Food</option>
								<option>Hospitality/Tourism</option>
								<option>Arts/Recreation/Sports</option>
								<option>Hospital/Nursing/Healthcare</option>
								<option>Legal/Law</option>
								<option>Supervision/Quality Control</option>
								<option>Apparel/Clothing</option>
								<option>Ticketing/Airline/Marine</option>
								<option>Teaching/Academic/Library</option>
								<option>R&D/Science/Research</option>
								<option>Agriculture/Dairy/Environment</option>
								<option>Security</option>
								<option>Beauty/Cosmetics/Fashion</option>
								<option>International Development</option>
								<option>KPO/BPO</option>
								<option>Imports/Exports</option>
							</select>
						</div>

						<div class="form-group col-lg-4"><label>Job Type</label>
							<select class="form-control" name="main_catagory" >
								<option>{$main_catagory}</option>
								<option>Government</option>
								<option>NGO</option>
								<option>Private</option>
							</select>
						</div>

						<div class="form-group col-lg-4"><label>Part time/ Full time</label>
							<select class="form-control" name="timing" >
								<option>{$timing}</option>
								<option>Part time</option>
								<option>Full time</option>
							</select>
						</div>

						<div class="control-group col-lg-3"><label>Closing Date (select)</label>
							<div class="controls input-append date form_date" data-date-format="yyyy-mm-dd" data-link-field="dtp_input1">
								<input type="text" name="closing_date" value="{$closing_date}" readonly placeholder="Closing Date" style="width: 100%;">
								<span class="add-on"><i class="icon-remove"></i></span>
								<span class="add-on"><i class="icon-th"></i></span>
							</div>
							<input type="hidden" id="dtp_input1" value="" /><br/>
						</div>

						<div class="form-group col-lg-9"><label>Keywords to this job</label>
							<input class="form-control" type="text" name="keywords"  value="{$keywords}" />
						</div>
						<div class="col-lg-2"></div>
						<div class="form-group col-lg-4">
							{if $edit=='true'}
								<input class="form-control btn btn-danger btn-block" type="submit" name="ok" value="Update Job" />
							{else}
								<input class="form-control btn btn-danger btn-block" type="submit" name="ok" value="Save Job" />
							{/if}
						</div>


					</form>
					{/if}
				</div>

				<div class="col-lg-2">
				</div>

			</div>

		</div>
	</div>
	</div>
	</div>



{include file="admin_footer.tpl"}

