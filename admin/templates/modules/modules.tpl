{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<section class="content">
    <div class="nav-tabs-custom">
        <div class="tab-content">
            <div class="row" style="margin-left: 10px;  min-height:800px;">
                <div class="col-lg-12" >
                    <div class="panel" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2><strong>Module Management </strong></h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6" style="margin-top: 10px;">		
                                    <div class="panel-body">
                                        <form role="form" action="modules.php?job=save" method="post">
                                            <div class="row" style="margin-bottom: 10px; margin-left: 20px;">
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-lg-12">
                                                        Module Name
                                                        <input class="form-control" name="module_name" value="{$module_name}" required placeholder="Module Name">
                                                    </div>                                
                                                </div>
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-lg-12">
                                                        Module No
                                                          <input class="form-control" name="module_no" value="{$module_no}" required placeholder="Module No">
                                          
                                                    </div>                                
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                         
                                                     {if $edit=='on'}
                                                        <button type="submit" name="ok" value="Update" class="btn btn-block btn-success btn-lg">Update</button>
                                        
                                                    {else}
                                                        <button type="submit" name="ok" value="Save" class="btn btn-block btn-success btn-lg">Save</button>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    {/if}
                                                        <button type="reset" class="btn btn-block btn-danger btn-lg">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="margin-top: 10px;">	
                                    <section class="content">
                                       <div class="nav-tabs-custom">
                                            <div class="tab-content">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4><strong>List Module</strong></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                            {php} list_modules(); {/php}
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                   </section>
                               </div>	
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div>
    </div>
</section>
{include file="user_footer.tpl"}
