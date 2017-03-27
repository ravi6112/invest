<?php /* Smarty version Smarty-3.0.8, created on 2017-03-20 10:36:45
         compiled from "./templates/admin/admin_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16057766658cf6365b6f0a0-41856997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3d1882e6efa64b6eaf364c92fd562db95190d18' => 
    array (
      0 => './templates/admin/admin_manage.tpl',
      1 => 1489984938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16057766658cf6365b6f0a0-41856997',
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
                                <h2><strong>Admin Management </strong></h2>
                            </div>
        
                            <div class="panel-body">
                                <a href='admin_manage.php?job=add_admin'>
                                    <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Add New</button>
                                </a>
                            </div>
        
                            <div class="panel-body">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_admins();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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



    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
