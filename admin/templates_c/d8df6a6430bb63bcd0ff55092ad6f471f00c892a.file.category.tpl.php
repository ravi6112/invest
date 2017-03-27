<?php /* Smarty version Smarty-3.0.8, created on 2017-03-17 15:53:06
         compiled from "./templates/category/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58782188158cbb90ae4a189-88502655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8df6a6430bb63bcd0ff55092ad6f471f00c892a' => 
    array (
      0 => './templates/category/category.tpl',
      1 => 1478065598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58782188158cbb90ae4a189-88502655',
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



<div class="col-lg-6">
	<div class="panel panel-primary" style="margin-top: 10px; min-height:800px;">
		<div class="panel-heading">
                    Add Category
        </div>

			<div class="panel-body">
				<form role="form" action="category.php?job=save" method="post" class="product" enctype="multipart/form-data">
					<div class="col-lg-8">	
						<div class="form-group">
							<input class="form-control" name="category" value="<?php echo $_smarty_tpl->getVariable('category')->value;?>
" required placeholder="Category">
						</div>
					</div>

					<div class="col-lg-4">
						<?php if ($_smarty_tpl->getVariable('edit')->value=='on'){?>
							<button type="submit" name="ok" value="Update" class="btn btn-default">Update</button>
						<?php }else{ ?>
							<button type="submit" name="ok" value="Save" class="btn btn-default">Save</button>
						<?php }?>
					</div>
	      		</form>
			</div>
	</div>	
</div>

<div class="col-lg-6">
			<div class="panel panel-red" style="margin-top: 10px;">
                <div class="panel-heading">
                    Category
                </div>
                <div class="panel-body">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_category();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <div class="panel-footer">
                </div>
            </div>   
        
   </div>


<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>