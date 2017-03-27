{include file="new_header.tpl"}


<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img alt="logo" src="img/logo.png" width="80" height="50" style="float: left; margin-right: 10px; margin-top: -10px;">Imperial Jobs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.php"></a>
                    </li>
					{if $back==1}
					<li>
                        <a href="employer_index.php">Back to Employer</a>
                    </li>
					{else}
                    <li>
                        <a href="employee_index.php">Back to Seeker</a>
                    </li>
					{/if}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-image: url(img/header-bg2.jpg);">
        <div class="container">
            <div class="intro-text" style="padding: 100px;">
            </div>
        </div>
    </header>

	<section id="details">
        <div class="container">
            <div class="row text-center">
				{if $error}
					      <span style="background-color: #FFFF00; margin-top: 23px; padding: 10px; font-size: 14px; color: blue;">{$error}</span>
{/if} 
                {php}display_job_detail($_SESSION['ref_no']);{/php}
            </div>
        </div>
    </section>
	
	<section id="apply">
        <div class="container">
			{if $job==1}
				<div class="row text-center">
			
				
				<h1 class="section-heading">Apply</h1>
				<h3 class="section-subheading text-muted">Type your message to the employer, Other details and your CV will be forwarded by system. If you want to update your CV please go to seeker home.</h3>
				<div class="col-lg-3">

                </div>
                <div class="col-lg-6 text-center">
                    <form name="apply_member" action="apply_job.php?job=apply_member" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12" ">
                               
								 <div class="form-group">
                                    <label>Your Message</label><textarea name="message" class="form-control" required style="text-align: center; height: 50px; font-size: 18px;">{$message}</textarea>
                                </div>                               
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <input type="submit" value="ok" class="btn btn-xl" style="margin-bottom: 30px;"/>
                            </div>
                        </div>
                    </form>
               </div>

				<div class="col-lg-3">

                </div>

			</div>

			{else}
            <div class="row text-center">
			
				
				<h1 class="section-heading">Apply</h1>

				<div class="col-lg-3">

                </div>
                <div class="col-lg-6 text-center">
                    <form name="apply_non_member" action="apply_job.php?job=apply_non_member" method="post" enctype="multipart/form-data">
						

                        <div class="row">
                            <div class="col-md-12" ">
                                <div class="form-group">
                                    <label>Name</label><input type="text" class="form-control" name="name" required style="text-align: center; height: 50px; font-size: 18px;">
                              
                                </div>
                                <div class="form-group">
                                    <label>Email</label><input class="form-control" type="text" name="mail_id" required style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>
								 <div class="form-group">
                                    <label>Your Message</label><textarea name="message" class="form-control" required style="text-align: center; height: 50px; font-size: 18px;">{$message}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload CV</label>
                               		<input type="file" name="cv_upload" class="form-control" required/>
                                </div>
                                
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <input type="submit" value="ok" class="btn btn-xl" style="margin-bottom: 30px;"/>
                            </div>
                        </div>
                    </form>
               </div>

				<div class="col-lg-3">

                </div>

			</div>
			{/if}
            
        </div>
    </section>


	<section id="tell">
        <div class="container">
			<div class="row text-center">
				
				<h1 class="section-heading">Tell a Freind</h1>
				<h3 class="section-subheading text-muted">Type your message to the employer, Other details and your CV will be forwarded by system. If you want to update your CV please go to seeker home.</h3>
				<div class="col-lg-3">

                </div>
                <div class="col-lg-6 text-center">
					<form name="tell_friend_form" action="tell_a_friend.php?job=tell" method="post">
                        <div class="row">
                            <div class="col-md-12" ">
                               
								 <div class="form-group">
                                    <label>Your Name</label><input type="text" class="form-control" name="your_name" value="{$your_name}" required style="text-align: center; height: 50px; font-size: 18px;">
                              
                                </div>
                                <div class="form-group">
                                    <label>Your Email</label><input class="form-control" type="text" name="your_email" value="{$your_email}" required style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>
								<div class="form-group">
                                    <label>Friend's Name</label><input type="text" class="form-control" name="friend_name" required style="text-align: center; height: 50px; font-size: 18px;">
                              
                                </div>
                                <div class="form-group">
                                    <label>Friend's Email</label><input class="form-control" type="text" name="friend_email" required style="text-align: center; height: 50px; font-size: 18px;">
                               
                                </div>                             
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <input type="submit" value="ok" class="btn btn-xl" style="margin-bottom: 30px;"/>
                            </div>
                        </div>
                    </form>
               </div>

				<div class="col-lg-3">

                </div>

			</div>            
        </div>
    </section>





    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>



