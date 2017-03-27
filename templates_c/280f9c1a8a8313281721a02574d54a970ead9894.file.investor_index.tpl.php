<?php /* Smarty version Smarty-3.0.8, created on 2017-03-27 11:32:31
         compiled from "./templates/investor/investor_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198254509558d8aaf711fbe0-15199591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280f9c1a8a8313281721a02574d54a970ead9894' => 
    array (
      0 => './templates/investor/investor_index.tpl',
      1 => 1490594546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198254509558d8aaf711fbe0-15199591',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/invest/libs/plugins/block.php.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("investor_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>





        <style>
    .fa-thumbs-up{
        color:blue;
    }
</style>
<!-- Main content -->
    <div id="page-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
investor_dashboard_display();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>

        function ajaxCall(id,refNo){
            var clas=$('#'+id+' i:first-child').attr('class');
            if(clas=='fa fa-thumbs-o-up'){
                $('#'+id+' i:first-child').addClass('fa-thumbs-up');
                $('#'+id+' i:first-child').removeClass('fa-thumbs-o-up');
                $.ajax(
                    {
                        type:"GET",
                        url:"ajax/like.php",  //here goes your php script file where you want to pass value
                        data: "ref_no="+refNo,

                        success:function(response)
                        {

                            $('#'+id).children("span").text(response);
                        }
                    });

                return;
            }
            if(clas=='fa fa-thumbs-up'){
                $('#'+id+' i:first-child').addClass('fa-thumbs-o-up');
                $('#'+id+' i:first-child').removeClass('fa-thumbs-up');
                $.ajax(
                    {
                        type:"GET",
                        url:"ajax/dislike.php",  //here goes your php script file where you want to pass value
                        data: "ref_no="+refNo,

                        success:function(response)
                        {
                            $('#'+id).children("span").text(response);
                        }

                    });

                return;
            }
        }

    </script>


<?php $_template = new Smarty_Internal_Template("navigation_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("js_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>