{include file="login_header.tpl"}
{literal}
    <script>
        function colorChange(color) {
            console.log(color);
            $("body").toggleClass('hold-transition sidebar-mini skin-'+color);
        }
    </script>
{/literal}
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
        <div class="row">
            <div class="col-xs-4">
                <a href="login_inv.php?job=color&skin=blue" class="btn btn-primary"  style="background-color: blue;"></a>
            </div>
            <div class="col-xs-4">
                <a  href="login_inv.php?job=color&skin=red" class="btn btn-danger"  style="background-color: red;"></a>
            </div>
            <div class="col-xs-4">
                <a  href="login_inv.php?job=color&skin=purple" class="btn btn-primary"  style="background-color: purple;"></a>
            </div>

        </div>
    </div>
    <!-- /.login-box-body -->
</div>



