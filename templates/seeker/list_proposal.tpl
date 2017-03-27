{include file="header.tpl"}
{include file="seeker_navigation.tpl"}


    <!-- Page Content -->
    <div id="page-wrapper"  style="margin-right: 270px">
        <div class="container-fluid">
            <div class="row">
                <section class="content">
                    <div class="nav-tabs-custom"  style="padding-right: 20px;">
                            <div class="col-lg-9">
                                <h3>All Your Proposals Are Here.</h3>

                            </div>
                            <a href="proposal.php?job=create">
                                <div class="col-lg-3 btn btn-danger" style="margin-top: 10px;">
                                    <h4><i class="fa fa-magic fa-lg" aria-hidden="true"></i> Create A New Proposal</h4>
                                </div>
                            </a>
                            {php}list_proposals($_SESSION['user_name']); {/php}
                    </div>
                </section>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- /#page-wrapper -->

{include file="navigation_footer.tpl"}
{include file="js_footer.tpl"}