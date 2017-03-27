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
        <div class="intro-text" style="padding-top: 80px; padding-bottom: 150px;">
            <h2>Forgot Password</h2>
            {literal}
                <script>
                    function passwordStrength(password,passwordStrength,errorField)
                    {

                        var desc = new Array();
                        desc[0] = "  Blank";
                        desc[1] = "  Very Weak";
                        desc[2] = "  Weak";
                        desc[3] = "  Better";
                        desc[4] = "  Medium";
                        desc[5] = "  Strong";
                        desc[6] = "  Strongest";

                        var score   = 0;

//if password bigger than 0 give 1 point
                        if (password.length > 0) score++;

//if password bigger than 6 give 1 point
                        if (password.length > 6) score++;

//if password has both lower and uppercase characters give 1 point
                        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

//if password has at least one number give 1 point
                        if (password.match(/\d+/)) score++;

//if password has at least one special caracther give 1 point
                        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

//if password bigger than 12 give another 1 point
                        if (password.length > 12) score++;

                        passwordStrength.innerHTML = desc[score];
                        passwordStrength.className = "strength" + score;
                    }
                </script>

                <script>
                    function comparePassword(){
                        var password = document.getElementById("password").value;
                        var confirmPassword = document.getElementById("password_rep").value;

                        if (password != confirmPassword)
                            document.getElementById("PasswordMatch").innerHTML="Both Password must be Same";
                        else
                            document.getElementById("PasswordMatch").innerHTML="Ok! Carry on.";
                    }
                </script>
            {/literal}
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6 text-center">
                    {if $error}
                        <h2 style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</h2>
                    {/if}
                    <form name="forget_form" action="employer_forget.php?job=check" method="post">
                        <div class="form-group"><input class="form-control" type="text" name="email" id="email" value="{$email}" placeholder="E-mail" style="text-align: center; height: 40px; font-size: 18px;" required />
                        </div>
                        <div class="form-group"><input class="form-control" type="text" name="code" id="code" value="{$code}" placeholder="Code" style="text-align: center; height: 40px; font-size: 18px;" required />
                        </div>
                        <div class="form-group">
                            <input type="Password" class="form-control" placeholder="Password" style="text-align: center; height: 40px; font-size: 18px;" name="password" value="{$password}" id="password" onkeyup="passwordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" required />
                            <span id="strendth" ></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_rep" style="text-align: center; height: 40px; font-size: 18px;" placeholder="Repeat Password" id="password_rep" onkeyup="comparePassword()" required /><span id="PasswordMatch"></span>
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