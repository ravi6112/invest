<?php /* Smarty version Smarty-3.0.8, created on 2017-03-17 15:56:32
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183962539158cbb9d83eb046-71499815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1489746304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183962539158cbb9d83eb046-71499815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="footer">
		<div class="clearfix">
			<p style="margin-top: -20px;">
				© 2013 Accountant.lk. All Rights Reserved.
				<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable($_smarty_tpl->getVariable('page',null,true,false)->value);if ($_smarty_tpl->tpl_vars['page']->value = 'User home'){?>
				<?php }else{ ?>
				<a href="./login.php?job=logout" style="margin-left: 500px; font-size: 18px; width: 150px;" class="report_select">Logout</a>
				<?php }?>
			</p>
			
		</div>
	</div>
