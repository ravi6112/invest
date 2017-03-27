<?php /* Smarty version Smarty-3.0.8, created on 2017-03-20 11:39:52
         compiled from "./templates/advertise/advertise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145900739258cf72309653d1-91514167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c754b237f18e988e30e918239357c5ecc67b45a2' => 
    array (
      0 => './templates/advertise/advertise.tpl',
      1 => 1489990190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145900739258cf72309653d1-91514167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("user_navigation.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<section class="content">
    <div class="nav-tabs-custom">
        <div class="tab-content">
            <div class="row" style="margin-left: 10px;  min-height:800px;">
                <div class="col-lg-12" >
                    <div class="panel" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-lg-12" align="center">
                                <h2><strong>Advertisement Post </strong></h2>
                            </div>
            
                            <form role="form" action="advertise.php?job=add" method="post" class="product" enctype="multipart/form-data">
                                <div class="row" style="margin-bottom: 10px; margin-left: 20px;">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Company Name: </div>
            
                                        <div class="col-lg-6">
                                            <input class="form-control" name="company_name"  value="<?php echo $_smarty_tpl->getVariable('company_name')->value;?>
" placeholder="Company Name">
                                        </div>
                                    </div>
            
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Title: </div>
            
                                        <div class="col-lg-6">
                                            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
"  placeholder="Title">
                                        </div>
                                    </div>
            
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Text : </div>
            
                                        <div class="col-lg-6">
                                            <input class="form-control" name="text" value="<?php echo $_smarty_tpl->getVariable('text')->value;?>
"  placeholder="Text">
                                        </div>
                                    </div>
            
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Image : </div>
            
                                        <div class="col-lg-6">
                                            <input id="file-1" name="image" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Website : </div>

                                        <div class="col-lg-6">
                                            <input class="form-control" name="url" value="<?php echo $_smarty_tpl->getVariable('url')->value;?>
"  placeholder="Website">
                                        </div>
                                    </div>
            
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Staring Date : </div>
            
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="datepicker1" name="start_date" value="<?php echo $_smarty_tpl->getVariable('start_date')->value;?>
" placeholder="Starting Date">
                                        </div>
                                        <div class="col-lg-7"></div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Ending Date : </div>
            
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="datepicker2" name="end_date" value="<?php echo $_smarty_tpl->getVariable('end_date')->value;?>
" placeholder="ending Date">
                                        </div>
                                        <div class="col-lg-7"></div>
                                    </div>
            
                                    <div class="row" style="margin-left: 20px;">
                                        <div class="col-lg-2">
                                            <?php if ($_smarty_tpl->getVariable('edit_mode')->value=='on'){?>
                                            <button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>
            
                                            <?php }else{ ?>
                                            <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
                                        </div>
                                        <div class="col-lg-2">
                                            <?php }?>
                                            <button type="reset" class="btn btn-block btn-danger btn-lg">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div>
    </div>
</section>

<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


    <script>
        $(document).on('ready', function() {
            $("#gallery").fileinput({
                showUpload: false,
                maxFileCount: 10,
                mainClass: "input-group-lg"
            });
        });
    </script>

    <script>
        $(document).on('ready', function() {
            $("#input-1").fileinput({
                showUpload: false,
                maxFileCount: 1,
                mainClass: "input-group-lg"
            });
        });
    </script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();

        });
    </script>
    <script>
        $(function () {

            $('#datepicker1').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>

    <script>
        $(function () {

            $('#datepicker2').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>
