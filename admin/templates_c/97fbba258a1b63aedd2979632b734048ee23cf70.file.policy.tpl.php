<?php /* Smarty version Smarty-3.0.8, created on 2017-03-17 15:57:48
         compiled from "./templates/policy/policy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116724895758cbba2437d4a0-48278157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97fbba258a1b63aedd2979632b734048ee23cf70' => 
    array (
      0 => './templates/policy/policy.tpl',
      1 => 1478065600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116724895758cbba2437d4a0-48278157',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/invest/admin/libs/plugins/block.php.php';
?><?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


<div class="row" style="margin-left: 10px; min-height:800px;">
	<div class="panel panel-primary" style="margin-top: 10px;">
		<div class="panel-heading">
                  Privacy Policy 
        </div>

			<div class="panel-body">
				<form role="form" action="policy.php?job=update" method="post" class="product" enctype="multipart/form-data">
					<div class="row">
                    <div class="col-lg-12">	
						<div class="panel-body">
                          <textarea class="textarea" style="width: 800px; height: 150px;" name="policy" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_policy();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</textarea>	 
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




<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


   

			 
 <script>
  $(function () {
    
    $(".textarea").wysihtml5();
  });
</script>



			 
