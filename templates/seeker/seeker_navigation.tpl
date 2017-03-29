

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
                <a href="seeker_index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="seeker_profile.php?job=view"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="seeker_profile.php?job=edit_profile_pic"><i class="fa fa-image"></i> Change Profile Picture</a>
            </li>

            <li>
                <a href="proposal.php"><i class="fa fa-lightbulb-o"></i> Create A New Proposal</a>
            </li>
            <li>
                <a href="jobs_for_me.php?job=my_interest"><i class="fa fa-smile-o"></i> Interested Jobs</a>
            </li>
            <li>
                <a href="jobs_for_me.php?job=capable_jobs"><i class="fa fa-graduation-cap"></i>Capable Jobs</a>
            </li>

            <li>
                <a href="login.php?job=logout"><i class="fa fa-sign-out"></i> Logout</a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
</div>