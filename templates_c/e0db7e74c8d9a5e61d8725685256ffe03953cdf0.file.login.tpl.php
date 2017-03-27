<?php /* Smarty version Smarty-3.0.8, created on 2017-03-23 11:45:25
         compiled from "./templates/investor/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71766076758d367fd89cf58-19837093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0db7e74c8d9a5e61d8725685256ffe03953cdf0' => 
    array (
      0 => './templates/investor/login.tpl',
      1 => 1473936552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71766076758d367fd89cf58-19837093',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.php"><img alt="logo" src="images/logo.png" width="150" height="50" style="float: left; margin-right: 10px; margin-top: -10px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="regi_inv.php">Register</a>
                </li>
                <li>
                    <a class="page-scroll" href="forget.php">Forget Password</a>
                </li>

                <li>
                    <a class="page-scroll" href="activate.php">Activate Account</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php">Back To Home Page</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php if ($_smarty_tpl->getVariable('error')->value){?>
                            <?php echo $_smarty_tpl->getVariable('error')->value;?>

                        <?php }else{ ?>
                            Please Login
                        <?php }?>
                    </h3>
                </div>
                <div class="panel-body">
                    <form name="login_form" action="login_inv.php?job=login" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="login" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" required>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-lg btn-danger btn-block" name="login_button" value="Login Now"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_template = new Smarty_Internal_Template("admin_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
