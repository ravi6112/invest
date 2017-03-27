{include file="user_header.tpl"}
{include file="user_navigation.tpl"}



<div class="col-lg-6">
	<div class="panel panel-primary" style="margin-top: 10px;  min-height:800px;">
		<div class="panel-heading">
                    Add Teacher Type
        </div>

			<div class="panel-body">
				<form role="form" action="teacher_type.php?job=save" method="post" class="product" enctype="multipart/form-data">
					<div class="col-lg-8">	
						<div class="form-group">
							<input class="form-control" name="teacher_type" value="{$teacher_type}" required placeholder="Teacher Type">
						</div>
					</div>

					<div class="col-lg-4">
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
                    Teacher type
                </div>
                <div class="panel-body">
                    {php}list_teacher_type();{/php}
                </div>
                <div class="panel-footer">
                </div>
            </div>   
        
   </div>


{include file="footer.tpl"}