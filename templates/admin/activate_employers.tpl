{include file="header.tpl"}
{include file="admin_navigation.tpl"}
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">All Non Activated Employers</h4>
                {php} list_non_activated_employers(); {/php}
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