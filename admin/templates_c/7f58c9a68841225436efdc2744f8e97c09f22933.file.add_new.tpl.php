<?php /* Smarty version Smarty-3.0.8, created on 2017-03-17 15:35:38
         compiled from "./templates/admin/add_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69983658858cbb4f2714762-58749730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f58c9a68841225436efdc2744f8e97c09f22933' => 
    array (
      0 => './templates/admin/add_new.tpl',
      1 => 1489650389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69983658858cbb4f2714762-58749730',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	
<div id="contents">
	<?php if ($_smarty_tpl->getVariable('error_report')->value=='on'){?>
	<div class="error_report">
		<strong><?php echo $_smarty_tpl->getVariable('error_message')->value;?>
</strong>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('warning_report')->value=='on'){?>
	<div class="warning_report" style="margin-bottom: 50px;">
		<strong><?php echo $_smarty_tpl->getVariable('warning_message')->value;?>
</strong>
	</div>
	<?php }?>
	<section class="content">
		<div class="nav-tabs-custom">
			<div class="tab-content">
				<div class="row">
					<div class="col-lg-12" align="center">
						<h2><strong>Employee Management </strong></h2>
					</div>

					<form role="form" action="admin_manage.php?job=add" method="post" class="product" enctype="multipart/form-data">
						<div class="row" style="margin-bottom: 10px; margin-left: 20px;">
							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Employee Name: </div>

								<div class="col-lg-6">
									<input class="form-control" name="employee_name"  value="<?php echo $_smarty_tpl->getVariable('employee_name')->value;?>
" placeholder="Employee Name">
								</div>
							</div>

							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Full Name: </div>

								<div class="col-lg-6">
									<input class="form-control" name="full_name" value="<?php echo $_smarty_tpl->getVariable('full_name')->value;?>
"  placeholder="Full name">
								</div>
							</div>

							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Department : </div>

								<div class="col-lg-6">
									<select class="form-control" name="department" value="<?php echo $_smarty_tpl->getVariable('department')->value;?>
" required>
										<option value="" disable selected>Department</option>
										  <option value="management">Management</option>
										<option value="house_keeping">House keeping</option>
										<option value="reception">Reception</option>
										<option value="kichen">Kichen</option>
										<option value="restaurant">Restaurant</option>
									</select>
								</div>
							</div>

							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Email : </div>

								<div class="col-lg-6">
									<input class="form-control" name="email" value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
"  placeholder="Email">
								</div>
							</div>

							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Telephone : </div>

								<div class="col-lg-6">
									<input class="form-control" name="telephone" value="<?php echo $_smarty_tpl->getVariable('telephone')->value;?>
"  placeholder="Telephone">
								</div>
							</div>

							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Mobile : </div>
								<div class="col-lg-6">

									<input class="form-control" name="mobile" value="<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
"  placeholder="mobile">
								</div>
							</div>

							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Address : </div>

								<div class="col-lg-6">
									<textarea class="form-control" name="address" value=""  placeholder="address"> <?php echo $_smarty_tpl->getVariable('address')->value;?>
</textarea>
								</div>
							</div>

							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Username : </div>

								<div class="col-lg-6">
									<input class="form-control" name="user_name" value="<?php echo $_smarty_tpl->getVariable('user_name')->value;?>
"  placeholder="User Name">
								</div>
							</div>

							<div class="row" style="margin-bottom: 10px;">
								<div class="col-lg-3">Password : </div>

								<div class="col-lg-6">
									<input type="password" class="form-control" name="password" required="required" placeholder="Password">
								</div>
							</div>

							<div class="row" style="margin-left: 20px;">
								<div class="col-lg-2">
									 <?php if ($_smarty_tpl->getVariable('edit_mode')->value=='on'){?>
										<button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>

									<?php }else{ ?>
										<button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
								</div>
								<div class="col-lg-2">
								<?php }?>
									<button type="reset" class="btn btn-block btn-danger btn-lg">Reset</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
	
<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

   
 <script>
		$(document).on('ready', function() {
			$("#gallery").fileinput({
				showUpload: false,
					maxFileCount: 10,
					mainClass: "input-group-lg"
				});
			});
</script>

<script>
	$(document).on('ready', function() {
		$("#input-1").fileinput({
			showUpload: false,
				maxFileCount: 1,
				mainClass: "input-group-lg"
			});
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
    
    $('#datepicker1').datepicker({
	 format: 'yyyy-mm-dd',
      autoclose: true
    });
 });
</script>
