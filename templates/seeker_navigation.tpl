<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>I</b>.LK</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Invest</b>.LK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->


        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                {php}display_profile_pic($_SESSION['user_name']);{/php}
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="seeker_index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li>
                <a href="seeker_profile.php?job=view"><i class="fa fa-user"></i> <span>Profile</span></a>
            </li>
            <li>
                <a href="seeker_profile.php?job=edit_profile_pic"><i class="fa fa-image"></i> <span>Change Profile Picture</span></a>
            </li>

            <li>
                <a href="proposal.php"><i class="fa fa-lightbulb-o"></i> <span>Create A New Proposal</span></a>
            </li>
            <li>
                <a href="jobs_for_me.php?job=my_interest"><i class="fa fa-smile-o"></i> <span>Interested Jobs</span></a>
            </li>
            <li>
                <a href="jobs_for_me.php?job=capable_jobs"><i class="fa fa-graduation-cap"></i> <span>Capable Jobs</span></a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i> <span>Theme</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="login_seeker.php?job=color&skin=blue" class="btn btn-primary"  style="background-color: blue;"></a></li>
                    <li><a  href="login_seeker.php?job=color&skin=red" class="btn btn-danger"  style="background-color: red;"></a></li>
                    <li><a  href="login_seeker.php?job=color&skin=purple" class="btn btn-primary"  style="background-color: purple;"></a></li>
                </ul>
            </li>

            <li>
                <a href="login_seeker.php?job=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">

