{include file="header.tpl"}
{include file="admin_navigation.tpl"}
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">All Jobs</h4>
                {php} list_jobs(); {/php}
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>

{include file="admin_footer.tpl"}