{include file="login_header.tpl"}
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>INVEST</b>.LK</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="login_inv.php?job=login" method="post">
     <div class="form-group">
             <input class="form-control" placeholder="Username" name="login" required autofocus>
      </div>
     <div class="form-group">
             <input class="form-control" placeholder="Password" name="password" type="password" required>
     </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
             <a href="#">I forgot my password</a><br>
             <a href="register.html" class="text-center">Register a new membership</a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>



