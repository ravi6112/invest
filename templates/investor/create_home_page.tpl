{include file="header.tpl"}
{include file="employer_navigation.tpl"}
{literal}
    <script>
        tinymce.init({
            selector: "textarea",
            theme: "modern",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,

        });

    </script>

{/literal}
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Job Seekers will see what details displayed in this box as your home page details.</h3>
                <div class="row">
                    Your Current Logo <div class="employer_logo">{$logo}</div>
                    <div class="col-lg-12">
                        <form name="title_form" action="home_page.php?job=save" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" value="{$title}" style="font-size: 24px;" placeholder="Page Title" required/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="sub_title" value="{$sub_title}" required style="font-size: 16px;" placeholder="Page Sub Title"/>
                            </div>


                            <div class="form-group">Logo : <input class="form-control" type="file" name="logo" id="logo"/></div>

                            <div class="form-group">Details <textarea name="detail">{$detail}</textarea></div>
                            <div class="form-group"><input class="form-control btn btn-danger btn-block" type="submit" name="save" value="Save Logo!"/></div>

                        </form>
                    </div>


                </div>


            </div>
                <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
    </div>
        <!-- /.container-fluid -->
</div>
{include file="admin_footer.tpl"}