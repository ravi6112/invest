{include file="header.tpl"}
{include file="employee_navigation.tpl"}


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header" style="margin-left: -15px;">Jobs you may be interested in (These results are generated by going through your profile information.)</h4>
                {php} jobs_i_like($_SESSION['user_name']); {/php}
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

{include file="admin_footer.tpl"}