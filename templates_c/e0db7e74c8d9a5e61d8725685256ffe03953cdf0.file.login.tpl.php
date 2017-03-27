<?php /* Smarty version Smarty-3.0.8, created on 2017-03-27 11:05:13
         compiled from "./templates/investor/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122214095558d8a491bdb930-66204220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0db7e74c8d9a5e61d8725685256ffe03953cdf0' => 
    array (
      0 => './templates/investor/login.tpl',
      1 => 1490592904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122214095558d8a491bdb930-66204220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("login_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>INVEST</b>.LK</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="login_inv.php?job=login" method="post">
     <div class="form-group">
             <input class="form-control" placeholder="Username" name="login" required autofocus>
      </div>
     <div class="form-group">
             <input class="form-control" placeholder="Password" name="password" type="password" required>
     </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
             <a href="#">I forgot my password</a><br>
             <a href="register.html" class="text-center">Register a new membership</a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>



