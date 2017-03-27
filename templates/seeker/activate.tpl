{include file="new_header.tpl"}

<div class="container" style="background-image: url('images/home/slider-bg.png');">
	<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
			<form name="register_form" action="regi_seeker.php?job=activate" method="post">
		
				<div class="form-group">
					<input class="form-control" placeholder="Email" type="text" name="email" value="{$email}" />
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Activation Code" type="text" name="activation_code" value="{$activation_code}" />
				</div>
				<div class="form-group">
					<input class="btn btn-danger btn-block" type="submit" name="ok" value="Activate Now!" />
				</div>
		
			</form>
		</div>
			 
	</div>
</div>