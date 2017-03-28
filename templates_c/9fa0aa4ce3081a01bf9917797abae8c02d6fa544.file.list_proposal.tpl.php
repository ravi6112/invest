<?php /* Smarty version Smarty-3.0.8, created on 2017-03-10 12:36:32
         compiled from "./templates/seeker/list_proposal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155217256158c25078e289f0-86581639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa0aa4ce3081a01bf9917797abae8c02d6fa544' => 
    array (
      0 => './templates/seeker/list_proposal.tpl',
      1 => 1489129591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155217256158c25078e289f0-86581639',
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


    <!-- Page Content -->
    <div id="page-wrapper"  style="margin-right: 270px">
        <div class="container-fluid">
            <div class="row">
                <section class="content">
                    <div class="nav-tabs-custom"  style="padding-right: 20px;">
                            <div class="col-lg-9">
                                <h3>All Your Proposals Are Here.</h3>

                            </div>
                            <a href="proposal.php?job=create">
                                <div class="col-lg-3 btn btn-danger" style="margin-top: 10px;">
                                    <h4><i class="fa fa-magic fa-lg" aria-hidden="true"></i> Create A New Proposal</h4>
                                </div>
                            </a>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_proposals($_SESSION['user_name']); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </section>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- /#page-wrapper -->

<?php $_template = new Smarty_Internal_Template("navigation_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("js_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>