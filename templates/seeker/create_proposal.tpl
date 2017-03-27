{include file="header.tpl"}
{include file="seeker_navigation.tpl"}
<div class="content-wrapper">
<section class="content-header">
<h1>
	  New Proposal
	  <small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
	  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">Proposal</li>
	  <li class="active">New Proposal</li>
	</ol>
</section>

{literal}
    
	<script>
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			plugins: [
				"advlist autolink lists link charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			toolbar2: "print preview media | forecolor backcolor emoticons",
			image_advtab: true,

		});

	</script>
    <script>
    $(document).ready(function () {
        $("#slider").slider({
            range: "min",
            animate: true,
            value: 1,
            min: 0,
            max: 100,
            step: 1,
            slide: function (event, ui) {
                update(1, ui.value); //changed
            }
        });

        //Added, set initial value.
        $("#amount").val(0);
        $("#amount-label").text(0);


        update();
    });

    //changed. now with parameter
    function update(slider, val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1 ? val : $("#amount").val();

        /* commented
         $amount = $( "#slider" ).slider( "value" );
         $duration = $( "#slider2" ).slider( "value" );
         */

        $("#amount").val($amount);
        $("#amount-label").text($amount);

        $('#slider a').html('<label>' + $amount + '</label><div class="ui-slider-label-inner"></div>');
    }
      </script>
	
	<script>
$(document).on('ready', function() {
    $("#images").fileinput({
        showUpload: false,
        maxFileCount: 10,
        mainClass: "input-group-lg"
    });
});
</script>
{/literal}

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
		
		<div class="box box-info">
            <div class="box-header">

              <h3 class="box-title">Create a New Project to attract the investors.</h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <div class="box-body">
				<div class="row">
					<form name="post_job_form" action="proposal.php?job=save" enctype="multipart/form-data" method="post">
						<div class="form-group col-lg-12">
							<input class="form-control" type="text" name="title" value="{$title}" placeholder="Project Title" required/>
						</div>
						
						<div class="col-sm-12" style="margin-top: 20px;">
							<div class="col-sm-3">
								<h4 class="great">Budjet <p class="price" id="amount-label"></p>
								<span class="price">Millions</span></h4>
							</div>
							<div class="col-sm-9" style="margin-top: 30px;">
								<div id="slider"></div><input type="hidden" name="budjet" id="amount" class="form-control">
							</div>
						</div>
						
						 <div class="form-group col-lg-6">
							<select class="form-control" name="catagory" >
								{if $catagory}						
								<option>{$catagory}</option>
								{else}
								<option selected="true" disabled="disabled">Project Catagory</option>
								{/if}
								<option>IT</option>
								<option>Shops</option>
								<option>Theater</option>
							</select>
						</div>
									
						<div class="form-group col-lg-6">
							<select class="form-control" name="investor_type" >
								{if $investor_type}						
								<option>{$investor_type}</option>
								{else}
								<option selected="true" disabled="disabled">Expection about Investor</option>
								{/if}
								<option>Partner</option>
								<option>Sleeping Partner</option>
								<option>Any Other</option>
							</select>
						</div>
		
						<div class="form-group col-lg-12" style="margin-top: 20px;">
							<textarea class="form-control" name="detail" cols="55" rows="7">
								{if $detail}						
								{$detail}
								{else}
								Describe about your proposal here...
								{/if}
							</textarea>
						</div>
		
					   
						<div class="form-group col-lg-12" style="margin-top: 20px;">
							<select multiple="multiple" id="keyword" name="keyword[]">
								{php}list_keywords($_SESSION[ref_no]);{/php}
							</select>
						</div>
						
						<div class="form-group col-lg-12" style="margin-top: 20px;"><label>Upload a Cover Image</label>
							<input id="file-1" name="cover_pic" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
						</div>
						
						<div class="form-group col-lg-12" style="margin-top: 20px;"><label>Create a Gallery (if Needed)</label>
							<input id="images" name="images[]" multiple type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
						</div>
						
						{if $images}
						
						{/if}
						
						<div class="form-group col-lg-12" style="margin-top: 20px;"><label>Upload Detailed reports (if available)</label>
							<input id="detailed_report" name="detailed_report[]" multiple type="file" class="file" data-allowed-file-extensions='["pdf"]' data-overwrite-initial="false" data-min-file-count="1">
						</div>
						
						{if $files}
						
						{/if}
						
						<div class="col-lg-4"></div>
						<div class="form-group col-lg-4" style="margin-top: 20px; margin-bottom: 100px;">
							{if $edit=='true'}
								<input class="form-control btn btn-danger btn-block" type="submit" name="ok" value="Update Proposal" />
							{else}
								<input class="form-control btn btn-danger btn-block" type="submit" name="ok" value="Save Proposal" />
							{/if}
						</div>
		
		
		
		
		
					</form>
		
		
				</div>
			</div>
		</div>

	</div>

            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
</div>
{literal}

    <script src="js/kendo.all.min.js"></script>
  
    <script>
      
      (function($) {
        $("#keyword").kendoMultiSelect();
      }(jQuery));
      
    </script>
	{/literal}
{include file="js_footer.tpl"}