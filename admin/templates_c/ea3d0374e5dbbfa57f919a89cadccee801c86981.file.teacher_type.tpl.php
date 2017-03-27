<?php /* Smarty version Smarty-3.0.8, created on 2017-03-21 16:10:43
         compiled from "./templates/teacher_type/teacher_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125951617458d1032be88fe3-93662720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3d0374e5dbbfa57f919a89cadccee801c86981' => 
    array (
      0 => './templates/teacher_type/teacher_type.tpl',
      1 => 1478065596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125951617458d1032be88fe3-93662720',
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
	<div class="panel panel-primary" style="margin-top: 10px;  min-height:800px;">
		<div class="panel-heading">
                    Add Teacher Type
        </div>

			<div class="panel-body">
				<form role="form" action="teacher_type.php?job=save" method="post" class="product" enctype="multipart/form-data">
					<div class="col-lg-8">	
						<div class="form-group">
							<input class="form-control" name="teacher_type" value="<?php echo $_smarty_tpl->getVariable('teacher_type')->value;?>
" required placeholder="Teacher Type">
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
                    Teacher type
                </div>
                <div class="panel-body">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_teacher_type();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <div class="panel-footer">
                </div>
            </div>   
        
   </div>


<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>