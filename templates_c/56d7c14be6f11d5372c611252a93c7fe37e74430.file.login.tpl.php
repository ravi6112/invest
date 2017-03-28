<<<<<<< HEAD
<?php /* Smarty version Smarty-3.0.8, created on 2017-03-27 10:34:46
         compiled from "./templates/seeker/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143207260658d89d6ea171e7-20920435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.0.8, created on 2017-03-08 11:25:52
         compiled from "./templates/seeker/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121704680658bf9ce8124665-47183325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> e8ed25033299f9dc23d2574ff41c1b5c28845d5c
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d7c14be6f11d5372c611252a93c7fe37e74430' => 
    array (
      0 => './templates/seeker/login.tpl',
      1 => 1477040510,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '143207260658d89d6ea171e7-20920435',
=======
  'nocache_hash' => '121704680658bf9ce8124665-47183325',
>>>>>>> e8ed25033299f9dc23d2574ff41c1b5c28845d5c
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

    <form action="login_seeker.php?job=login" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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