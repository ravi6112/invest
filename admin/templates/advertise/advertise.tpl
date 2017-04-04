{include file="user_header.tpl"}
{include file="user_navigation.tpl"}

<section class="content">
    <div class="nav-tabs-custom">
        <div class="tab-content">
            <div class="row" style="margin-left: 10px;  min-height:800px;">
                <div class="col-lg-12" >
                    <div class="panel" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-lg-12" align="center">
                                <h2><strong>Advertisement Post </strong></h2>
                            </div>

                            <form role="form" action="advertise.php?job=add" method="post" class="product" enctype="multipart/form-data">
                                <div class="row" style="margin-bottom: 10px; margin-left: 20px;">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Company Name: </div>

                                        <div class="col-lg-6">
                                            <input class="form-control" name="company_name"  value="{$company_name}" placeholder="Company Name">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Title: </div>

                                        <div class="col-lg-6">
                                            <input class="form-control" name="title" value="{$title}"  placeholder="Title">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Text : </div>

                                        <div class="col-lg-6">
                                            <input class="form-control" name="text" value="{$text}"  placeholder="Text">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Image : </div>

                                        <div class="col-lg-6">
                                            <input id="file-1" name="image" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Website : </div>

                                        <div class="col-lg-6">
                                            <input class="form-control" name="url" value="{$url}"  placeholder="Website">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Staring Date : </div>

                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="datepicker1" name="start_date" value="{$start_date}" placeholder="Starting Date">
                                        </div>
                                        <div class="col-lg-7"></div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-lg-3">Ending Date : </div>

                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="datepicker2" name="end_date" value="{$end_date}" placeholder="ending Date">
                                        </div>
                                        <div class="col-lg-7"></div>
                                    </div>

                                    <div class="row" style="margin-left: 20px;">
                                        <div class="col-lg-2">
                                            {if $edit_mode=='on'}
                                            <button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>

                                            {else}
                                            <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
                                        </div>
                                        <div class="col-lg-2">
                                            {/if}
                                            <button type="reset" class="btn btn-block btn-danger btn-lg">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
        $(document).on('ready', function() {
            $("#gallery").fileinput({
                showUpload: false,
                maxFileCount: 10,
                mainClass: "input-group-lg"
            });
        });
    </script>

    <script>
        $(document).on('ready', function() {
            $("#input-1").fileinput({
                showUpload: false,
                maxFileCount: 1,
                mainClass: "input-group-lg"
            });
        });
    </script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();

        });
    </script>
    <script>
        $(function () {

            $('#datepicker1').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>

    <script>
        $(function () {

            $('#datepicker2').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>
{/literal}