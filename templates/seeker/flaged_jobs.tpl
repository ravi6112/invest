{include file="header.tpl"}
{include file="employee_navigation.tpl"}


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header" style="margin-left: -15px;">Jobs flagged to be applied later.</h3>
                {php} list_flagged_jobs($_SESSION['user_name']); {/php}
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>



{include file="admin_footer.tpl"}