<?php /* Smarty version Smarty-3.0.8, created on 2017-03-24 14:07:29
         compiled from "./templates/seeker/seeker_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75692678258d4dac973daf7-08926139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf789d10010d6ee02da62f943c39ed8ccb734ab' => 
    array (
      0 => './templates/seeker/seeker_status.tpl',
      1 => 1490344647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75692678258d4dac973daf7-08926139',
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
<div class="content-wrapper">
    <section id="tutors" >
        <div class="row" style="margin-left: -200px;  min-height:800px;">
            <div class="col-lg-11" style="margin-top: 10px;">
                <div class="panel panel-danger" style="margin-top: 10px;">
                    <div class="panel-heading">
                        <h3 class="box-title">Seeker Status </h3>
                    </div>
                    <div class="panel-body">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_seeker_status();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section>
</div>

<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>



    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>