<<<<<<< HEAD
<?php /* Smarty version Smarty-3.0.8, created on 2017-03-27 10:34:20
         compiled from "./templates/navigation_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9346102758d89d5420f0c0-18138151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.0.8, created on 2017-03-17 12:26:30
         compiled from "./templates/navigation_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3939816758cb889e306722-04965246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> e8ed25033299f9dc23d2574ff41c1b5c28845d5c
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0602f7a3f782af1b4531b70ea9a7401458a1646b' => 
    array (
      0 => './templates/navigation_footer.tpl',
<<<<<<< HEAD
      1 => 1489733780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9346102758d89d5420f0c0-18138151',
=======
      1 => 1489733781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3939816758cb889e306722-04965246',
>>>>>>> e8ed25033299f9dc23d2574ff41c1b5c28845d5c
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/invest/libs/plugins/block.php.php';
?>    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-open">
        <!-- Create the tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-panel">

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_advertise();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
</div>
<!-- /.control-sidebar -->