<?php /* Smarty version Smarty-3.0.8, created on 2017-03-27 14:18:26
         compiled from "./templates/investor_navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87204866658d8d1da783213-48293028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70fe85cc3dbc0df087bb88625221101bf949b7f4' => 
    array (
      0 => './templates/investor_navigation.tpl',
      1 => 1490604499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87204866658d8d1da783213-48293028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/invest/libs/plugins/block.php.php';
?><header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>.LK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Invest</b>.LK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

        </ul>
      </div>
    </nav>
  </header>

    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
display_profile_pic($_SESSION['user_name']);<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="investor_index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-user"></i> <span>Profile</span></a>
        </li>
        <li>
            <a href="investor_profile.php?job=edit_profile_pic"><i class="fa fa-image"></i> <span>Change Profile Picture</span></a>
        </li>

       

        <li>
            <a href="login_inv.php?job=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">

