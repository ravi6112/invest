<<<<<<< HEAD
<?php /* Smarty version Smarty-3.0.8, created on 2017-03-27 10:35:24
         compiled from "./templates/seeker_navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96648516958d89d94654f07-50257646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.0.8, created on 2017-03-23 14:31:44
         compiled from "./templates/seeker_navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7413455758d38ef82c9084-59855812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> e8ed25033299f9dc23d2574ff41c1b5c28845d5c
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50d5dca24fa8a8174137f4095c988fd381f3bdf' => 
    array (
      0 => './templates/seeker_navigation.tpl',
      1 => 1490259692,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '96648516958d89d94654f07-50257646',
=======
  'nocache_hash' => '7413455758d38ef82c9084-59855812',
>>>>>>> e8ed25033299f9dc23d2574ff41c1b5c28845d5c
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
            <a href="seeker_index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li>
            <a href="seeker_profile.php?job=view"><i class="fa fa-user"></i> <span>Profile</span></a>
        </li>
        <li>
            <a href="seeker_profile.php?job=edit_profile_pic"><i class="fa fa-image"></i> <span>Change Profile Picture</span></a>
        </li>

        <li>
            <a href="proposal.php"><i class="fa fa-lightbulb-o"></i> <span>Create A New Proposal</span></a>
        </li>
        <li>
            <a href="jobs_for_me.php?job=my_interest"><i class="fa fa-smile-o"></i> <span>Interested Jobs</span></a>
        </li>
        <li>
            <a href="jobs_for_me.php?job=capable_jobs"><i class="fa fa-graduation-cap"></i> <span>Capable Jobs</span></a>
        </li>

        <li>
            <a href="login_seeker.php?job=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">

