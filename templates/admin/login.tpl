{include file="header.tpl"}

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="index.php"><img alt="logo" src="img/logo.png" width="80" height="50" style="float: left; margin-right: 10px; margin-top: -10px;"><font color="blue">Imperial Job Hub</font></a>
		</div>


		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						{if $error}
							{$error}
						{else}
							Please Login
						{/if}
					</h3>
				</div>
				<div class="panel-body">
					<form name="login_form" action="adminlogin.php?job=login" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="login" required autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
							<!-- Change this to a button or input when using this as a form -->
							<input type="submit" class="btn btn-lg btn-danger btn-block" name="login_button" value="Login Now"/>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

{include file="admin_footer.tpl"}