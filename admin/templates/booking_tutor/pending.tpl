{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<section id="tutors" >
	
<div class="row" style="margin-left: 10px; min-height:800px;">
	<div class="col-lg-10" style="margin-top: 10px;">
	    <div class="panel panel-danger" style="margin-top: 10px;">
                <div class="panel-heading">
			 <h3 class="box-title">Pending Contact Tutors</h3>
		 </div>
		 <div  class="panel-body">
                        {php}list_pending_contact_tutor();{/php}
                </div>
	   </div>
	</div>
</div>
</section>

{include file="footer.tpl"}