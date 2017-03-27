{include file="header.tpl"}

<div class="side_bar"></div>
<div class="notice" style="top: 500px;"><b>{$notice}</b></div>
<div class="notice" style="top: 500px;"><b>{$error}</b></div>
<script>
function passwordStrength(password,passwordStrength,errorField)
{

var desc = new Array();
desc[0] = "  Blank";
desc[1] = "  Very Weak";
desc[2] = "  Week";
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
            <a class="navbar-brand page-scroll" href="index.php"><img alt="logo" src="images/logo.png" width="150" height="50" style="float: left; margin-right: 10px; margin-top: -10px;"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="regi_seeker.php">Register</a>
                </li>
                <li>
                    <a class="page-scroll" href="forget.php">Forget Password</a>
                </li>

                <li>
                    <a class="page-scroll" href="activate.php">Activate Account</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php">Back To Home Page</a>
                </li>
            </ul>
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
                            Please Enter Your Mail ID
                        {/if}
                    </h3>
                </div>
                <div class="panel-body">
                    <form name="login_form" action="forget.php?job=check" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" value="{$email}" required autofocus>
                            </div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Code" name="code"  value="{$code}" required>
                            </div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="New Password" type="password" name="password" id="password" onkeyup="passwordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" required /><span id="strendth"></span>
                            </div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Repeat Password" type="password" name="password_rep" id="password_rep" onkeyup="comparePassword()" required /><span id="PasswordMatch"></span>
                            </div>
                            
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-lg btn-danger btn-block" name="login_button" value="Change New Password"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{include file="admin_footer.tpl"}