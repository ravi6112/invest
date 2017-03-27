{include file="user_header.tpl"}
{include file="user_navigation.tpl"}
<section id="tutors" >
	<div class="row" style="margin-left: 10px; min-height:800px;">
		<div class="col-lg-11">
	<div class="panel panel-primary" style="margin-top: 10px;">
		<div class="panel-heading">
                    Search Message
                </div>
                <div class="panel-body">
            
            <form role="form" action="message.php?job=search" method="post">
	             
	              <div class="col-lg-3">
	         		   <div class="form-group" style="visibility:visible;">
    							<div class="input-group date">
									 <input type="text" name="from_date" value="{$from_date}" class="form-control pull-right"  id="datepicker">
								 </div>
								
		                    </div>
				 </div>
				  
				  <div class="col-lg-3">
	         		   <div class="form-group" style="visibility:visible;">
    							<div class="input-group date">
									 <input type="text" name="to_date" value="{$to_date}" class="form-control pull-right" id="datepicker1">
								 </div>
								
		                    </div>
				 </div>
				
				
				 <div class="col-lg-3">
						<button type="submit" name="ok" value="Search" class="btn btn-primary">Search </button>
				</div>
	      </form>
         </div>           
	</div>
</div>
	
<div class="row" style="margin-left: 10px;">
	<div class="col-lg-11" style="margin-top: 10px;">
	    <div class="panel panel-danger" style="margin-top: 10px;">
                <div class="panel-heading">
			 <h3 class="box-title">Read Message</h3>
		 </div>
		 <div  class="panel-body">
                        {php}list_read_message($_SESSION['from_date'],$_SESSION['to_date']);{/php}
                </div>
	   </div>
	</div>
</div></div>
</section>
{literal}
<script>
  $(function () {

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

  });
</script>

<script>
  $(function () {

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    });

  });
</script>
{/literal}
{include file="footer.tpl"}

