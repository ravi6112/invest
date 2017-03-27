{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<section class="content">
    <div class="nav-tabs-custom">
        <div class="tab-content">
            <div class="row" style="margin-left: 10px;  min-height:800px;">
                <div class="col-lg-12" >
                    <div class="panel" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2><strong>Admin Management </strong></h2>
                            </div>
        
                            <div class="panel-body">
                                <a href='admin_manage.php?job=add_admin'>
                                    <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Add New</button>
                                </a>
                            </div>
        
                            <div class="panel-body">
                                {php}list_admins();{/php}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div>
    </div>
</section>
{include file="user_footer.tpl"}

{literal}

    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
{/literal}