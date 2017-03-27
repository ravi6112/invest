{include file="header.tpl"}
{include file="investor_navigation.tpl"}



<div id="page-wrapper">
	<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        {php}proposal_display($_SESSION['id']);{/php}
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>


{include file="navigation_footer.tpl"}
{include file="js_footer.tpl"}
