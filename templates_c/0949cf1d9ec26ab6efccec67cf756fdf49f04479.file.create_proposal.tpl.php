<?php /* Smarty version Smarty-3.0.8, created on 2017-03-10 12:56:43
         compiled from "./templates/seeker/create_proposal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24037711258c25533de34c6-76801708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0949cf1d9ec26ab6efccec67cf756fdf49f04479' => 
    array (
      0 => './templates/seeker/create_proposal.tpl',
      1 => 1489059787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24037711258c25533de34c6-76801708',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/invest/libs/plugins/block.php.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("seeker_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
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
							<input class="form-control" type="text" name="title" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
" placeholder="Project Title" required/>
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
								<?php if ($_smarty_tpl->getVariable('catagory')->value){?>						
								<option><?php echo $_smarty_tpl->getVariable('catagory')->value;?>
</option>
								<?php }else{ ?>
								<option selected="true" disabled="disabled">Project Catagory</option>
								<?php }?>
								<option>IT</option>
								<option>Shops</option>
								<option>Theater</option>
							</select>
						</div>
									
						<div class="form-group col-lg-6">
							<select class="form-control" name="investor_type" >
								<?php if ($_smarty_tpl->getVariable('investor_type')->value){?>						
								<option><?php echo $_smarty_tpl->getVariable('investor_type')->value;?>
</option>
								<?php }else{ ?>
								<option selected="true" disabled="disabled">Expection about Investor</option>
								<?php }?>
								<option>Partner</option>
								<option>Sleeping Partner</option>
								<option>Any Other</option>
							</select>
						</div>
		
						<div class="form-group col-lg-12" style="margin-top: 20px;">
							<textarea class="form-control" name="detail" cols="55" rows="7">
								<?php if ($_smarty_tpl->getVariable('detail')->value){?>						
								<?php echo $_smarty_tpl->getVariable('detail')->value;?>

								<?php }else{ ?>
								Describe about your proposal here...
								<?php }?>
							</textarea>
						</div>
		
					   
						<div class="form-group col-lg-12" style="margin-top: 20px;">
							<select multiple="multiple" id="keyword" name="keyword[]">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_keywords($_SESSION[ref_no]);<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</select>
						</div>
						
						<div class="form-group col-lg-12" style="margin-top: 20px;"><label>Upload a Cover Image</label>
							<input id="file-1" name="cover_pic" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
						</div>
						
						<div class="form-group col-lg-12" style="margin-top: 20px;"><label>Create a Gallery (if Needed)</label>
							<input id="images" name="images[]" multiple type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
						</div>
						
						<?php if ($_smarty_tpl->getVariable('images')->value){?>
						
						<?php }?>
						
						<div class="form-group col-lg-12" style="margin-top: 20px;"><label>Upload Detailed reports (if available)</label>
							<input id="detailed_report" name="detailed_report[]" multiple type="file" class="file" data-allowed-file-extensions='["pdf"]' data-overwrite-initial="false" data-min-file-count="1">
						</div>
						
						<?php if ($_smarty_tpl->getVariable('files')->value){?>
						
						<?php }?>
						
						<div class="col-lg-4"></div>
						<div class="form-group col-lg-4" style="margin-top: 20px; margin-bottom: 100px;">
							<?php if ($_smarty_tpl->getVariable('edit')->value=='true'){?>
								<input class="form-control btn btn-danger btn-block" type="submit" name="ok" value="Update Proposal" />
							<?php }else{ ?>
								<input class="form-control btn btn-danger btn-block" type="submit" name="ok" value="Save Proposal" />
							<?php }?>
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


    <script src="js/kendo.all.min.js"></script>
  
    <script>
      
      (function($) {
        $("#keyword").kendoMultiSelect();
      }(jQuery));
      
    </script>
	
<?php $_template = new Smarty_Internal_Template("js_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>