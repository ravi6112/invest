{include file="header.tpl"}
{include file="investor_navigation.tpl"}





        <style>
    .fa-thumbs-up{
        color:blue;
    }
</style>
<!-- Main content -->
    <div id="page-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        {php}investor_dashboard_display();{/php}

                    </div>
                </div>
            </div>
        </section>
    </div>
{literal}
    <script>

        function ajaxCall(id,refNo){
            var clas=$('#'+id+' i:first-child').attr('class');
            if(clas=='fa fa-thumbs-o-up'){
                $('#'+id+' i:first-child').addClass('fa-thumbs-up');
                $('#'+id+' i:first-child').removeClass('fa-thumbs-o-up');
                $.ajax(
                    {
                        type:"GET",
                        url:"ajax/like.php",  //here goes your php script file where you want to pass value
                        data: "ref_no="+refNo,

                        success:function(response)
                        {

                            $('#'+id).children("span").text(response);
                        }
                    });

                return;
            }
            if(clas=='fa fa-thumbs-up'){
                $('#'+id+' i:first-child').addClass('fa-thumbs-o-up');
                $('#'+id+' i:first-child').removeClass('fa-thumbs-up');
                $.ajax(
                    {
                        type:"GET",
                        url:"ajax/dislike.php",  //here goes your php script file where you want to pass value
                        data: "ref_no="+refNo,

                        success:function(response)
                        {
                            $('#'+id).children("span").text(response);
                        }

                    });

                return;
            }
        }

    </script>

{/literal}
{include file="navigation_footer.tpl"}
{include file="js_footer.tpl"}