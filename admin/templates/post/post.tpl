{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<section class="content">
    <div class="nav-tabs-custom">
        <div class="tab-content">
            <div class="row" style="margin-left: 10px;  min-height:800px;">
                <div class="col-lg-12" >
                    <div class="col-lg-12">
                        <h2><strong>Post Seekers </strong></h2>
                    </div>

                    <div class="panel-body">
                        {php}list_post_seekers();{/php}
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section>
{include file="user_footer.tpl"}

{literal}

    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
{/literal}