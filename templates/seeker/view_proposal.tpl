{include file="header.tpl"}
{include file="seeker_navigation.tpl"}


    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <h3>All Your Proposals Are Here.</h3>

                </div>
                <a href="proposal.php?job=create">
                    <div class="col-lg-3 btn btn-danger" style="margin-top: 10px;">
                        <h4><i class="fa fa-magic fa-lg" aria-hidden="true"></i> Create A New Proposal</h4>
                    </div>
                </a>
                {php}view_proposal($_SESSION['ref_no']); {/php}
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- /#page-wrapper -->

</div>

{include file="js_footer.tpl"}