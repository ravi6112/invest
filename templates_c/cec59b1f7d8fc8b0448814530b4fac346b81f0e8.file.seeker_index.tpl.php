<?php /* Smarty version Smarty-3.0.8, created on 2017-03-27 11:17:30
         compiled from "./templates/seeker/seeker_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51749692658d8a7726bb442-05690761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec59b1f7d8fc8b0448814530b4fac346b81f0e8' => 
    array (
      0 => './templates/seeker/seeker_index.tpl',
      1 => 1490593645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51749692658d8a7726bb442-05690761',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/invest/libs/plugins/block.php.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("seeker_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

    <script>
        $( document ).ready(function() {
            $("#dialog").dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 1000
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                }
            });
        });

            function removeProposal(id,ref_no) {
                console.log(ref_no);
                $('#' + id).on("click", function () {
                    $("#dialog").dialog("open");
                    $("#remove_post").attr('action', 'proposal.php?job=invester&ref_no='+ref_no);
                });
            }
    </script>


<div id="dialog">
    <form id="remove_post"  action="proposal.php?job=invester&ref_no=" method="post">
        <input type="radio"  name="invester" value="Got the Invester" checked required> Got The Invester<br>
        <input type="radio" name="invester" value="Never Get Invester" required/> Never Get Invester<br/>
        <input type="submit" style="margin-left: 200px;" name="ok" value="ok"/>
    </form>
</div>

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
dashboard_display();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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