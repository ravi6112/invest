<?php /* Smarty version Smarty-3.0.8, created on 2017-03-17 17:19:37
         compiled from "./templates/user_home/user_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36454229758cbcd51240c52-94507305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bcad81bef12e712af583b7b24b1d62d9faf7ae6' => 
    array (
      0 => './templates/user_home/user_home.tpl',
      1 => 1489751374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36454229758cbcd51240c52-94507305',
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
    <!-- Main content -->
<section class="content">
    <div class="panel panel-red" style="margin-top: 10px;  min-height:800px;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h4><strong>Investers</strong></h4>

                            <p>Manage Invester</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-users"></i>
                        </div>
                        <a href="search_invester.php?job=basic_detail" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                          <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_tutor_count();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                          <p>Seekers</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-users"></i>
                        </div>
                        <a href="search_seeker.php?job=basic_detail" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                          <h4>Message</h4>

                          <p> Check Message</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-commenting"></i>
                        </div>
                        <a href="message.php?job=unread_message" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                          <h4>Booking</h4>

                          <p>Pending Booking</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-check-square"></i>
                        </div>
                        <a href="booking_tutor.php?job=pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6" style="margin-top: 10px;">
                    <h3 class="box-title">Pending Contact Tutors</h3>
                        <div class="box box-success">
                            <div class="box-header with-border">
                            </div>
                            <div  class="panel-body">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_pending_contact_tutor_basic();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <a href='booking_tutor.php?job=pending'> <div class="btn btn-primary" style="margin-top: 10px; width: 99%; background-color: #26A65B;">View More</div></a>

                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-lg-6" style="margin-top: 10px;">
                    <h3 class="box-title">Un Read Messages</h3>
                        <div class="box box-danger">
                            <div class="box-header with-border">
                            </div>
                             <div  class="panel-body">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_unread_basic_message();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <a href='message.php?job=unread_message'>
                                        <div class="btn btn-primary" style="margin-top: 10px; width: 99%; background-color: #96281B;">View More
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
