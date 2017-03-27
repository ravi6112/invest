{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<div class="container" style="min-height: 1000px;">
            <div class="section-header">
                <h1 class="section-title text-center wow fadeInDown" style="margin-top: 25px"> Assignments</h1>
                <h3 class="text-center wow fadeInDown"> Edit assignment</h3>
            </div>

	<div class="row" style="margin-top: 35px;">

  	<div class="col-sm-5 wow">
			<form id="parent_form" method="post" class="form-horizontal" action="assignment.php?job=update_assignments">

			
					<div class="col-sm-12">

							<label>Level</label>
							<select class="form-control"  name="category" id="category" value="{$category}" placeholder="Level" >
								
								{if $category}
											<option value="{$category}">{$category}</option>
								{else}
									<option selected="true" disabled="disabled">Level</option>
								{/if}
								{section name=category loop=$category_names}
								<option  value="{$category_names[category]}" onclick="document.select_category_form.submit()">{$category_names[category]}</option>
								{/section}
							</select>
									
					</div>


					<div class="col-sm-12">

							<label>Subject</label>
								<select class="form-control" id="subject" name="subject" value="{$subject}" placeholder="Select level first" >
									{if $subject}
										<option value="{$subject}">{$subject}</option>
									{else}
										<option selected="true" disabled="disabled">Subject</option>
									{/if}
								</select>	
									
					</div>



					<div class="col-sm-12">
						

							<label>Student Gender</label>
						 	<select class="form-control" id="stu_gender" name="stu_gender" placeholder="Gender" >
								<option  value="{$stu_gender}"> {$stu_gender}</option>	
 								
  								<option value="M">M</option>
  								<option value="F">F</option>	
							</select> 
	
					</div>

			    

					<div class="col-sm-12">

							<label>Student Race</label>
							<select class="form-control" id="stu_race" name="stu_race" placeholder="Race" >
								<option  value="{$stu_race}"> {$stu_race}</option>
  								<option value="Chinese">Chinese</option>
  								<option value="Indian">Indian</option>
  								<option value="Malay">Malay</option>
  								<option value="Others">Others</option>		
							</select> 
										
					</div>



					<div class="col-sm-12">

							<label>Rate</label>
							<select class="form-control" id="rate" name="rate" placeholder="Rate" >
								<option  value="{$rate}"> {$rate}</option>
 								
  								<option value="20-30">20-30</option>
  								<option value="30-40">30-40</option>
								<option value="40-50">40-50</option>
								<option value="50-75">50-75</option>
								<option value="75-100">75-100</option>	
							</select>
										
					</div>


					<div class="col-sm-12">

							<label>No of Lession(/week)</label>
							<select class="form-control" id="no_of_lession" name="no_of_lession" placeholder="No of Lession(/week)" >
								<option  value="{$no_of_lession}"> {$no_of_lession}</option>
 								
  								<option value="1">1</option>
  								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>	
							</select>
	
					</div>
</div>

<div class="col-sm-6 wow">

					<div class="col-sm-12">

							<label>Duration of Lession(hrs)</label>
							<select class="form-control" id="duration" name="duration" placeholder="Duration of Lession(hrs)" >
 								<option  value="{$duration}"> {$duration}</option>
  								<option value="1">1</option>
  								<option value="1.5">1.5</option>
								<option value="2.0">2.0</option>
								<option value="2.5">2.5</option>
								<option value="3.5">3.0</option>	
							</select>
										
					</div>


					<div class="col-sm-12">

							<label>Student Address</label>
							<input class="form-control" type="text" name="address" value="{$address}"  placeholder="Street Address" required>
	
					</div>


					<div class="col-sm-12">

							<label>Location</label>
							<select name="location" class="form-control"  data-placeholder="Select Location" style="width: 100%;">
								<option  value="{$location}"> {$location}</option>											
								{section name=location loop=$location_names}
										<option  value="{$location_names[location]}">{$location_names[location]}</option>
								{/section}
							</select>	

										
					</div>


					<div class="col-sm-12">

							<label>Teacher Gender</label>
							<select class="form-control" id="stu_gender" name="tut_gender" value="{$tut_gender}" data-placeholder="Teacher Gender" >
								<option  value="{$tut_gender}"> {$tut_gender}</option>	
								
  								<option value="M">M</option>
  								<option value="F">F</option>	
							</select> 
										
					</div>


					<div class="col-sm-12">
				
							<label>Teacher type</label>
							<select class="form-control"  name="teacher_type" value="{$teacher_type}" data-placeholder="Teacher Type">
								<option  value="{$teacher_type}"> {$teacher_type}</option>	
								{section name=teacher_type loop=$teacher_type_names}
									<option  value="{$teacher_type_names[teacher_type]}"> {$teacher_type_names[teacher_type]}</option>
								{/section}
							</select>

					</div>


					<div class="col-sm-12" style="padding-bottom:25px; ">

							<label>Remarks</label>
							<textarea rows="2" cols="25" class="form-control" type="text" name="remarks" placeholder="Remark" required> {$remarks}</textarea>
										
					</div>

    </div>

				<div class="row" style="margin-bottom: 25px; padding-top: -20px;">
					<div class="col-sm-3"></diV>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-primary col-sm-12" name="save" value="Save">Update</button>
                                
					</div>
				</div>

			</form>
	              


                </div>
				

            </div>
        </div>
    </section>



{include file="footer.tpl"}