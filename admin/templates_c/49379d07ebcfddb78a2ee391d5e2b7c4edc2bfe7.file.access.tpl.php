<?php /* Smarty version Smarty-3.0.8, created on 2017-03-16 10:33:29
         compiled from "./templates/admin/access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161263637058ca1ca1abcf79-18869311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49379d07ebcfddb78a2ee391d5e2b7c4edc2bfe7' => 
    array (
      0 => './templates/admin/access.tpl',
      1 => 1489640608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161263637058ca1ca1abcf79-18869311',
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

	<section class="content">
		<div class="nav-tabs-custom">
			<div class="tab-content">
				<div class="row">
					<div class="col-lg-12">
					 <h2><strong>Add or Remove Permissions | User Name : </strong><?php echo $_smarty_tpl->getVariable('full_name')->value;?>
</h2>
					</div>

					<div class="row">
						<section class="content">
							<div class="nav-tabs-custom">

								<div class="col-lg-6">
									<div class="tab-content">
										 <strong>Permissions User already have</strong>
									</div>
									<div class="panel-body">
									  <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_admin_module($_SESSION['id']);<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</div>
								</div>
								<div class="col-lg-6">
									<div class="tab-content">
										 <strong>Permissions User Dont have</strong>
									</div>
									<div class="panel-body">
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_not_admin_module($_SESSION['id']);<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>