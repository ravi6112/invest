<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img alt="logo" src="img/logo.png" width="55" height="30" style="float: left; margin-right: 10px; margin-top: -5px;"></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li><a href="login.php?job=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-inverse sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="admin_index.php"><i class="fa fa-dashboard fa-lg"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="add_admin.php"><i class="fa fa-pencil-square-o fa-lg"></i> Add Admin</a>
                    </li>

                    <li>
                        <a href="all_employers.php"><i class="fa fa-flag fa-lg"></i> View Employers</a>
                    </li>
                    <li>
                        <a href="activate_page.php?job=see_employers"><i class="fa fa-smile-o fa-lg"></i> Activate Employer</a>
                    </li>
                    <li>
                        <a href="activate_page.php?job=see_jobs"><i class="fa fa-graduation-cap fa-lg"></i>Activate Job</a>
                    </li>
                    <li>
                        <a href="activate_page.php?job=all"><i class="fa fa-smile-o fa-lg"></i> All Job</a>
                    </li>
                    <li>
                        <a href="all_employees.php"><i class="fa fa-graduation-cap fa-lg"></i> View Employees</a>
                    </li>
                    <li>
                        <a href="adminlogin.php?job=logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>