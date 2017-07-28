{include file="header.tpl"}
{include file="seeker_navigation.tpl"}
{literal}
    <script>
        $( document ).ready(function() {
            $("#dialog").dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 1000
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                }
            });
        });

            function removeProposal(id,ref_no) {
                $('#' + id).on("click", function () {
                    $("#dialog").dialog("open");
                    $("#remove_post").attr('action', 'proposal.php?job=invester&ref_no='+ref_no);
                });
            }
    </script>
{/literal}

<div id="dialog">
    <form id="remove_post"  action="proposal.php?job=invester&ref_no=" method="post">
        <input type="radio"  name="invester" value="Got the Invester" checked required> Got The Invester<br>
        <input type="radio" name="invester" value="Never Get Invester" required/> Never Get Invester<br/>
        <input type="submit" style="margin-left: 200px;" name="ok" value="ok"/>
    </form>
</div>

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

                        {php}dashboard_display();{/php}

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