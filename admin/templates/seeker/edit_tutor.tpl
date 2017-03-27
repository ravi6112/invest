{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<section id="tutors" >
      
<div class="row" style="margin-left: 10px;  min-height:1200px;">
	<div class="col-lg-12" style="margin-top: 10px;">
	    <div class="panel panel-danger" style="margin-top: 10px;"> 
      

			<div class="section-header" align="center">
					  <h2 style="margin-top: 25px"> Personal Details <a href="edit_tutor.php?job=done">  &nbsp; &nbsp;&nbsp;&nbsp; Finish Update</a></h2>
				 </div>
			   
				<div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
					<div class="col-sm-3" style="margin-top: 15px;">
						<img src="http://tiancaitutors.com/{$image}" class="img-rounded" width="250"/>
					</div>
					<div class="col-sm-9" style="margin-top: 40px;">
						<form action="edit_tutor.php?job=profile_pic" method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-12" style="margin-top: 15px; align:left;">
									<p><b>Update New Profile Picture</b></p>
								</div>
								<div class="col-sm-12" style="margin-top: 15px;">
									<input id="input-6" name="profile" type="file" multiple class="file-loading">
								</div>
								<div class="col-sm-12" style="margin-top: 15px; ">
									<button style="height:40px;width:200px" type="submit" class="btn btn-primary" name="save" value="Save"> Update Profile Pic</button>
								</div>
							</div>
						</form>
					</div>
				   </div>
				</div>
				<form id="tutor_form" method="post" class="form-horizontal" action="edit_tutor.php?job=update" enctype="multipart/form-data">
			   
				<div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
					<div class="col-sm-2"style="margin-top: 15px;">
						<p><b>Title</b></p>
						<select name="title" class="form-control">
							<option value="{$title}">{$title}</option>
							<option value="Mr.">Mr. </option>
							<option value="Mrs.">Mrs. </option>
							<option value="Ms.">Ms. </option>
						</select>
					</div>

					<div class="col-sm-5"style="margin-top: 15px;">
						<p><b>First Name</b></p>
						<input class="form-control" type="text" value="{$first_name}" name="first_name" id="first_name" placeholder="First name" required>
					</div>

					<div class="col-sm-5"style="margin-top: 15px;">
						<p><b>Last Name</b></p>
						<input class="form-control" type="text" value="{$last_name}" name="last_name" placeholder="Last name" required>
					</div>
				

					<div class="col-sm-7"style="margin-top: 15px;">
						<p><b>Email</b></p>
						<input class="form-control" type="text" value="{$email}" name="email" placeholder="Email Address" required>
					</div>
				

					<div class="col-sm-5"style="margin-top: 15px;">
						<p><b>Mobile</b></p>
						<input class="form-control" type="text" value="{$contactnum}" name="contactnum" placeholder="Contact Number" required>
					</div>
				</div>
				</div>
	   
			   <div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
					   <div class="col-sm-12"style="margin-top: 15px;">
							<p><b>Street Address</b></p>
						   <input class="form-control" type="text" name="streetAddress" value="{$streetAddress}" placeholder="Street Address" required>
					   </div>
				   </div>
			   </div>
					   
			   <div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
					   <div class="col-sm-12"style="margin-top: 15px;">
						<p><b>Postal Code</b></p>
						   <input class="form-control" type="text" name="postalCode" value="{$postalCode}" placeholder="Postal Code" required>
					   </div>
				   </div>
			   </div>
						   
			   <div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
					   <div class="col-sm-12"style="margin-top: 15px;">
							<p><b>NRIC</b></p>
						   <input class="form-control" type="text" name="nic" value="{$nic}" placeholder="NRIC" required>
					   </div>
				   </div>
			   </div>
						   
	   
			   <div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
					   <div class="col-sm-12"style="margin-top: 15px;">
							<p><b>AGE</b></p>
						   <input type="text" class="form-control pull-right" name="birthday" value="{$birthday}" placeholder="Birthday" required>
					   </div>
				   </div>
			   </div>
						   
	   
			   <div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
					   <div class="col-sm-12"style="margin-top: 15px;">
							<p><b>Institution</b></p>
						   <input class="form-control" type="text" name="institution" value="{$institution}" placeholder="Institution" required>
					   </div>
				   </div>
			   </div>
							   
	   
			   <div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
						   <div class="col-sm-12"style="margin-top: 15px;">
								<p><b>Teacher Type</b></p>				   
							   <select class="form-control"  name="teacher_type" data-placeholder="Teacher Type">
									<option  value="{$teacher_type}"> {$teacher_type}</option>
								   {section name=teacher_type loop=$teacher_type_names}
									   <option  value="{$teacher_type_names[teacher_type]}"> {$teacher_type_names[teacher_type]}</option>
									   {/section}
							   </select>	
						   </div>
	   
					   </div>
				   </div>
			   
	   
			   <div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
					   <div class="col-sm-12"style="margin-top: 15px;">
						<p><b>Year of Experience</b></p>
						   <input class="form-control" type="text" name="year_of_exp" value="{$year_of_exp}" placeholder="Year of Experience" required>
					   </div>
				   </div>
			   </div>
						   
	   
			   <div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
							   
					  <div class="col-sm-12"style="margin-top: 15px;">
						<p><b>Describe yourself here...</b></p>
						<textarea class="textarea" style="width:100%; height: 150px;" name="description"  placeholder="Describe yourself here..." required>{$description}</textarea>							
							
					   </div>				 
				   </div>
			   </div>
						   
				<div class="row" style="margin-top: -20px;">
				   <div class="col-sm-12">
						<div class="col-sm-12"style="margin-top: 15px;">
						<p><b>Location</b></p>
						{php}list_location_for_edit($_SESSION['user_id']);{/php}
						<select name="location[]" class="form-control select2" multiple="multiple" data-placeholder="Select Location" style="width: 100%;">
							<option  value="All Locations">All Locations</option>
							{section name=location loop=$location_names}
								<option  value="{$location_names[location]}">{$location_names[location]}</option>
							{/section}
						</select>
						</div>
					</div>
				</div>
			   <div class="row" style="margin-top: 20px; margin-left: 10px; margin-bottom:  10px;">
				   <div class="col-sm-12">
					   <button style="height:40px;width:100px" type="submit" class="btn btn-primary" name="save" value="Save"> Update </button>
		 
				   </div>
			   </div>
							   
							   
		   </form>
	 
			<div class="section-header" align="center">
                	<h2 style="margin-top: 25px"> Educational Qualification</h2>
               </div>
		
			
			<form id="tutorDetail" name="tutorDetail" method="post" class="form-horizontal" action="edit_tutor.php?job=qualification" enctype="multipart/form-data">
<!--  Other deatails-->
				<div class="row" style="margin-top: -20px;">
					<div class="col-sm-6">
						<div class="col-sm-12"style="margin-top: 15px;">
							<input class="form-control" type="text" name="institution" placeholder="Institution" required>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12"style="margin-top: 15px;">
							<input class="form-control" type="text" name="qualification" placeholder="Qualification" required>
						</div>
					</div>
					<div class="col-sm-6">

						<div class="col-sm-5"style="margin-top: 15px;">
							Certificate -: 
						</div>
						<div class="col-sm-7" style="margin-top: 15px; margin-left: -105px;">
							<input id="input-6" name="certificate" type="file" multiple class="file-loading">
						</div>
					</div>
				</div>
				
				
				<div class="row" style="margin-top: 20px; margin-left: 10px;">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary" name="submit" value="add">Add Qualification</button>
					</div>
				</div>
			</form>

 
 
		<div class="section-header" align="center">
			<h2 style="margin-top: 25px"> Subjects, Rates and Levels</h2>
		 </div>
			
			<form name="select_category_form" action="edit_tutor.php?job=save_subject" method="post" class="product">
				<div class="row">
				<div class="col-sm-12">
				<div class="col-sm-4" style="margin-top: 15px;">
														
					<select class="form-control"  name="category" id="category_multi" required placeholder="Category" >
						{if $category}
									<option value="{$category}">{$category}</option>
						{else}
							<option selected="true" disabled="disabled">Category</option>
						{/if}
						{section name=category loop=$category_names}
						<option  value="{$category_names[category]}" onclick="document.select_category_form.submit()">{$category_names[category]}</option>
						{/section}
					</select>								

					
				</div>
												
												
				<div class="col-sm-4" style="margin-top: 15px;">

					
					<div class="form-group">

						<select class="form-control select2"  name="grade[]" id="grade_multi" multiple="multiple" data-placeholder="Select a Grade" required>
							<option disabled>Select level first</option>
						</select>							

					</div>						 
				</div>
																						
				<div class="col-sm-4"style="margin-top: 15px;">

					<div class="form-group">
						
						
						<select class="form-control select2" id="subject_multi" name="subject[]" multiple="multiple" data-placeholder="Select a Subject" required placeholder="subject" >
							<option disabled>Select level first</option>
						</select>							

					</div>
				</div>

				<div class="col-sm-4" style="margin-top: 15px;">
						<input name="min_rate" class="form-control" type="number" placeholder="Min Rate" required>
				</div>
				
				<div class="col-sm-4" style="margin-top: 15px;">
						<input name="max_rate" class="form-control" type="number" placeholder="Max Rate" required>
				</div>
				
				<div class="col-sm-3" style="margin-top: 15px; margin-bottom: 30px;">
					<button type="submit" class="btn btn-primary" name="submit" value="add">Add Subject</button>
				</div>

				</div>
		
		</form>

</div>
		</div>
	</div>
</div>
            
      
<div class="row" style="margin-left: 10px;">
	<div class="col-lg-12">
	    <div class="panel panel-danger" style="margin-top: 10px;">
                <div class="panel-heading">
			 <h3 class="box-title">Tutor</h3>
		 </div>
		 <div  class="panel-body">
                {php}list_edit_tutor_detail($_SESSION['user_id']);{/php}
                </div>
	   </div>
	</div>
</div>



</section>



{include file="footer.tpl"}


{literal}
   
			 <script>
					$(document).on('ready', function() {
						$("#input-6").fileinput({
							showUpload: false,
								maxFileCount: 1,
								mainClass: "input-group-lg"
							});
						});
			</script>
			 
 <script>
  $(function () {
    
    $(".textarea").wysihtml5();
  });
</script>


			 
 <script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

  });
</script>
 
 <script>
  $(function () {
   
    $("[data-mask]").inputmask();
  
  });
</script>

<script>
	$(function() {
	
		$("#category_multi").change(function() {
		  $("#subject_multi").load("ajax/subject_multi_by_category.php?choice=" + encodeURIComponent($("#category_multi").val()));
		  $("#grade_multi").load("ajax/grade_multi_by_category.php?choice=" + encodeURIComponent($("#category_multi").val()));
		});
	});
</script>

			 
{/literal}