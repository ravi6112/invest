{include file="header.tpl"}
{include file="employer_navigation.tpl"}


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">

                <div class="col-lg-12">
                {php}display_job_with_applications($_SESSION['ref_no']);{/php}
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