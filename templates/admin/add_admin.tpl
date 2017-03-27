{include file="header.tpl"}
{include file="admin_navigation.tpl"}
{literal}
  <script>

    function showPass1(pass)
    {
      var xmlhttp;
      if (pass=="")
      {
        document.getElementById("availability_status").innerHTML="";
        return;
      }
      if (window.XMLHttpRequest)
      {
        xmlhttp=new XMLHttpRequest();
      }
      else
      {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          var outPut = xmlhttp.responseText;
          document.getElementById("availability_status").innerHTML=xmlhttp.responseText;
          document.getElementById("user_name_hidden").innerHTML="hai";
        }
      }
      xmlhttp.open("GET","ajax/query_check_username.php?user_name="+pass,true);
      xmlhttp.send();
      document.reg.email.focus();

    }
  </script>

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
    function showPass2(pass)
    {
      var xmlhttp;
      if (pass=="")
      {
        document.getElementById("emailchecking").innerHTML="";
        return;
      }
      if (window.XMLHttpRequest)
      {
        xmlhttp=new XMLHttpRequest();
      }
      else
      {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          document.getElementById("emailchecking").innerHTML=xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET","ajax/query_check_email.php?email="+pass,true);
      xmlhttp.send();
      document.reg.email.focus();

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
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="page-header">Addmin Management.</h4>
          <div class="col-lg-12" ><b>{$notice}</b></div>
              <form name="add_admin_form" action="add_admin.php?job=save" method="post">

                  <div class="form-group col-lg-4">
                      <input class="form-control" type="text" name="user_name" id="user_name" value="{$user_name}" onkeyup="showPass1(this.value)" placeholder="User Name" required /><span id="availability_status"></span>
                  </div>

                  <div class="form-group col-lg-4">
                      <input class="form-control" type="password" name="password" value="{$password}" placeholder="Password" id="password" onkeyup="passwordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" required /><span id="strendth"></span>
                  </div>

                  <div class="form-group col-lg-4">
                      <input class="form-control" type="password" name="password_rep" value="{$password_rep}" id="password_rep" placeholder="Repeat Password" onkeyup="comparePassword()" required /><span id="PasswordMatch"></span>
                  </div>

                  <div class="form-group col-lg-4">
                      <input class="form-control" type="text" name="full_name" value="{$full_name}" placeholder="Full Name" required />
                  </div>

                  <div class="form-group col-lg-4">
                      <input class="form-control" type="text" name="email" value="{$email}"  id="email" placeholder="Email" onkeyup="showPass2(this.value)" required/><span id="emailchecking"></span>
                  </div>

                  <div class="form-group col-lg-4">
                      <input class="form-control" type="text" name="telephone" value="{$telephone}" placeholder="Telephone No" />
                  </div>

                  <div class="form-group col-lg-8">
                      <input class="form-control" type="text" name="address" value="{$address}" placeholder="Address"/>
                  </div>

                  <div class="form-group col-lg-4">
                      {if $edit=='true'}

                          <input class="form-control btn btn-danger" type="submit" name="ok" value="Update" />
                      {else}
                          <input class="form-control btn btn-danger" type="submit" name="ok" value="Save" />
                      {/if}
                  </div>


              </form>

          <div class="col-lg-12" style="margin-top: 50px;" >{php} list_admins(); {/php}</div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>

{include file="admin_footer.tpl"}