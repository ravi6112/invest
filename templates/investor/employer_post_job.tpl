{include file="header.tpl"}
{include file="employer_navigation.tpl"}

{literal}
	<script>
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			toolbar2: "print preview media | forecolor backcolor emoticons",
			image_advtab: true,

		});

	</script>
{/literal}

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Create New Job</h3>
				<div>If you upload your Detail as an image, image size must less than 512Kbs. After each Keyword please put a comma and a space</div>
				<br />
				<form name="post_job_form" action="employer_post_job.php?job=save_job" enctype="multipart/form-data" method="post">
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

							<div class="form-group col-lg-6"><label>Contact E-Mail</label>
								<input class="form-control" type="text" name="contact_mail_id" value="{$contact_mail_id}" />
							</div>

							<div class="control-group col-lg-6"><label>Closing Date (select)</label>
								<div class="controls input-append date form_date" data-date-format="yyyy-mm-dd" data-link-field="dtp_input1">
									<input type="text" name="closing_date" value="{$closing_date}" readonly placeholder="Closing Date" style="width: 100%;">
									<span class="add-on"><i class="icon-remove"></i></span>
									<span class="add-on"><i class="icon-th"></i></span>
								</div>
								<input type="hidden" id="dtp_input1" value="" /><br/>
							</div>

							<div class="form-group col-lg-12"><label>Keywords to this job</label>
								<input class="form-control" type="text" name="keywords"  value="{$keywords}" />
							</div>
							<div class="col-lg-4"></div>
							<div class="form-group col-lg-4">
								{if $edit=='true'}
									<input class="form-control btn btn-danger btn-block" type="submit" name="ok" value="Update Job" />
								{else}
									<input class="form-control btn btn-danger btn-block" type="submit" name="ok" value="Save Job" />
								{/if}
							</div>


						</form>
			</div>


		</div>


	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
{include file="admin_footer.tpl"}