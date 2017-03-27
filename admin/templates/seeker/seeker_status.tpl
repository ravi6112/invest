{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<div class="content-wrapper">
    <section id="tutors" >
        <div class="row" style="margin-left: -200px;  min-height:800px;">
            <div class="col-lg-11" style="margin-top: 10px;">
                <div class="panel panel-danger" style="margin-top: 10px;">
                    <div class="panel-heading">
                        <h3 class="box-title">Seeker Status </h3>
                    </div>
                    <div class="panel-body">
                        {php}list_seeker_status();{/php}
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section>
</div>

{include file="user_footer.tpl"}

{literal}
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
{/literal}