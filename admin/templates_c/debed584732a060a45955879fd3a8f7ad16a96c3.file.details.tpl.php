<?php /* Smarty version Smarty-3.0.8, created on 2017-03-16 10:40:23
         compiled from "./templates/admin/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182106539458ca1e3f0602c3-42134482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debed584732a060a45955879fd3a8f7ad16a96c3' => 
    array (
      0 => './templates/admin/details.tpl',
      1 => 1489575988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182106539458ca1e3f0602c3-42134482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		source: "ajax/query_inventory.php",
		minLength: 1
	});				

});
</script>

<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto1").autocomplete({
		source: "ajax/query_suppliers.php",
		minLength: 1
	});				

});
</script>





	
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
		
		
		<div class="row" style="margin-left: 40px;">
		<div class="col-lg-11" style="margin-top: 10px;">
			<div class="panel panel-danger" style="margin-top: 10px;">
                <div class="panel-heading">
                    Admin Details
				</div>
                
                <div class="panel-body">

							<div class="row">
							<div class="col-lg-3"><b>
							Employee Name      :</b> </div><div class="col-lg-9"><?php echo $_smarty_tpl->getVariable('employee_name')->value;?>

							</div></div>
							
							<div class="row">
							<div class="col-lg-3"><b>
							Full Name	:</b></div><div class="col-lg-9"><?php echo $_smarty_tpl->getVariable('full_name')->value;?>

							</div></div>
							
							<div class="row">
							<div class="col-lg-3"><b>
							Department	:</b></div><div class="col-lg-9"><?php echo $_smarty_tpl->getVariable('department')->value;?>

							</div></div>
							
							<div class="row">
							<div class="col-lg-3"><b>
							Email	:</b></div><div class="col-lg-9"><?php echo $_smarty_tpl->getVariable('email')->value;?>

							</div></div>
							
							<div class="row">
							<div class="col-lg-3"><b>
							Telephone	:</b></div><div class="col-lg-9"><?php echo $_smarty_tpl->getVariable('telephone')->value;?>

							</div></div>
							
							<div class="row">
							<div class="col-lg-3"><b>
							Mobile	:</b></div><div class="col-lg-9"><?php echo $_smarty_tpl->getVariable('mobile')->value;?>

							</div></div>
							
							<div class="row">
							<div class="col-lg-3"><b>
							Address       :</b></div><div class="col-lg-9"><?php echo $_smarty_tpl->getVariable('address')->value;?>

							</div></div>

							<div class="row">
							<div class="col-lg-3"><b>
							User Name       :</b></div><div class="col-lg-9"><?php echo $_smarty_tpl->getVariable('user_name')->value;?>

							</div></div>
                </div>
            </div>   
        </div>
	</div>
	
	</div>
<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>