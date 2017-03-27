<?php /* Smarty version Smarty-3.0.8, created on 2017-03-17 17:19:50
         compiled from "./templates/assignment/basic_assignment_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15385441258cbcd5ead48a3-56603386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95b934bcabf1b5166f069278c7547040b1930709' => 
    array (
      0 => './templates/assignment/basic_assignment_view.tpl',
      1 => 1489750130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15385441258cbcd5ead48a3-56603386',
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
<section id="tutors" >

 <div class="row" style="margin-left: 10px;  min-height:800px;">
	<div class="col-lg-11" style="margin-top: 10px;">
	    <div class="panel panel-danger" style="margin-top: 10px;">
                <div class="panel-heading">
			 <h3 class="box-title">Tutor</h3>
		 </div>
                <div class="panel-body">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_basic_assignment_detail();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
	</div>
	</div>
	</div><!--/.container-->
    </section>



<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>