<?php /* Smarty version Smarty-3.0.8, created on 2017-03-20 10:58:37
         compiled from "./templates/modules/modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153648673158cf6885e802f9-28710890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521a71d09ea659e4b8332936806065673252ff98' => 
    array (
      0 => './templates/modules/modules.tpl',
      1 => 1489987715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153648673158cf6885e802f9-28710890',
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
            <div class="row" style="margin-left: 10px;  min-height:800px;">
                <div class="col-lg-12" >
                    <div class="panel" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2><strong>Module Management </strong></h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6" style="margin-top: 10px;">		
                                    <div class="panel-body">
                                        <form role="form" action="modules.php?job=save" method="post">
                                            <div class="row" style="margin-bottom: 10px; margin-left: 20px;">
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-lg-12">
                                                        Module Name
                                                        <input class="form-control" name="module_name" value="<?php echo $_smarty_tpl->getVariable('module_name')->value;?>
" required placeholder="Module Name">
                                                    </div>                                
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-lg-12">
                                                        Module No
                                                          <input class="form-control" name="module_no" value="<?php echo $_smarty_tpl->getVariable('module_no')->value;?>
" required placeholder="Module No">
                                          
                                                    </div>                                
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                         
                                                     <?php if ($_smarty_tpl->getVariable('edit')->value=='on'){?>
                                                        <button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>
                                        
                                                    <?php }else{ ?>
                                                        <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <?php }?>
                                                        <button type="reset" class="btn btn-block btn-danger btn-lg">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="margin-top: 10px;">	
                                    <section class="content">
                                       <div class="nav-tabs-custom">
                                            <div class="tab-content">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4><strong>List Module</strong></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 list_modules(); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                   </section>
                               </div>	
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div>
    </div>
</section>
<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
