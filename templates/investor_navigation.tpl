<style>
<!--
body {
    padding-bottom: 40px;
    padding-top: 60px;
}

.sidebar-nav-fixed {
	width:20%;
}



-->
</style>


<div class="navbar navbar-fixed-top navbar-default">
  	<div class="container">
      <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img alt="logo" src="images/logo.png" width="55" height="30" style="float: left; margin-right: 10px; margin-top: -5px;">LOGO</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
			<li class="dropdown">
                <a  href="investor_index.php">
                    <i class="fa fa-home fa-fw"></i>
                </a>
            </li>
            
            <li class="dropdown">
                
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
					
                    <li><a href="login_inv.php?job=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!--/.navbar-collapse -->
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar-nav-fixed affix">
                <div style="border: none; border-right: 2px grey solid; margin-top: -10px; background-color: #f8f8f8;">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="investor_index.php"><i class="fa fa-dashboard fa-lg"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o fa-lg"></i> Your Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-eye fa-lg"></i> Search Proposal</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-smile-o fa-lg"></i> Settings</a>
                    </li>
                    

                </ul>
                </div>
                <!--/.well -->
            </div>
            <!--/sidebar-nav-fixed -->
        </div>
        <!--/span-->
        <div class="col-md-6">