{include file="new_header.tpl"}

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
            <a class="navbar-brand" href="index.php"><img alt="logo" src="img/logo.png" width="80" height="50" style="float: left; margin-right: 10px; margin-top: -10px;"><font color="blue">Imperial Job Hub</font></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a href="employer_regi.php">Register</a>
                </li>
                <li>
                    <a href="employer_forget.php">Forget Password</a>
                </li>

                <li>
                    <a href="employer_activate.php">Activate Account</a>
                </li>
                <li>
                    <a href="index.php">Back To Home Page</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Header -->
<header style="background-image: url(img/header-bg1.jpg);" >
    <div class="container">
        <div class="intro-text" style="padding-top: 120px; padding-bottom: 180px;">
            <h2>Forgot Password</h2>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6 text-center">

                    {if $error}
                        <h2 style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</h2>
                    {/if}
                    <form name="forget_form" action="employer_forget.php?job=forget" method="post">
                        <div class="form-group"><input class="form-control" type="text" name="email" id="email" value="{$email}" placeholder="E-mail" required />
                        </div>

                        <div class="form-group"><input class="btn btn-xl" type="submit" name="ok" value="Ok." /></div>
                    </form>
                </div>

                <div class="col-lg-3">
                </div>

            </div>

        </div>
    </div>
    </div>
    </div>
</header>



{include file="footer.tpl"}