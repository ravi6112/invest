{include file="user_header.tpl"}
{include file="user_navigation.tpl"}



<div class="col-lg-6">
	<div class="panel panel-primary" style="margin-top: 10px;  min-height:800px;">
		<div class="panel-heading">
                    Add Subjects
        </div>

			<div class="panel-body">

				<form name="select_category_form" action="subject.php?job=save_category" method="post" class="product">

					<div class="col-lg-4">	
						<div class="form-group">

								<select class="form-control"  name="category" required placeholder="Category" >
		                    		{if $category}
										<option value="{$category}">{$category}</option>
									{else}
										<option value="" disabled selected>Category</option>
									{/if}
									{section name=category loop=$category_names}
									<option  value="{$category_names[category]}">{$category_names[category]}</option>
									{/section}
								</select>							

						</div>
					</div>					



				
					<div class="col-lg-6">	
						<div class="form-group">
							<input class="form-control" name="subject" value="{$subject}" required placeholder="Subject">
						</div>
					</div>

					<div class="col-lg-2">
						{if $edit=='on'}
							<button type="submit" name="ok" value="Update" class="btn btn-default">Update</button>
						{else}
							<button type="submit" name="ok" value="Save" class="btn btn-default">Save</button>
						{/if}
					</div>
										

	      		</form>

			</div>
	</div>	
</div>

<div class="col-lg-6">
			<div class="panel panel-red" style="margin-top: 10px;">
                <div class="panel-heading">
                    grade
                </div>
                <div class="panel-body">
                    {php}list_subject();{/php}
                </div>
                <div class="panel-footer">
                </div>
            </div>   
        
   </div>


{include file="footer.tpl"}