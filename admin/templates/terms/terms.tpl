{include file="user_header.tpl"}
{include file="user_navigation.tpl"}


<div class="row" style="margin-left: 10px; min-height:800px;">
	<div class="panel panel-primary" style="margin-top: 10px;">
		<div class="panel-heading">
                   Terms And Condition
        </div>

			<div class="panel-body">
				<form role="form" action="terms.php?job=update" method="post" class="product" enctype="multipart/form-data">
					<div class="row">
                    <div class="col-lg-12">	
						<div class="panel-body">
                          <textarea class="textarea" style="width: 800px; height: 150px;" name="terms" >{php}list_terms();{/php}</textarea>	 
                         </div>
					</div></div>
                    <div class="row">
					<div class="col-lg-4">
                       	
							<button type="submit" name="ok" value="Save" class="btn btn-default" style="color: white; background-color: #26A65B; margin-top: 25px;">Save</button>
						
					</div></div>
	      		</form>
			</div>
	</div>	
</div>




{include file="footer.tpl"}

{literal}
   

			 
 <script>
  $(function () {
    
    $(".textarea").wysihtml5();
  });
</script>



			 
{/literal}